<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class BlogController extends Controller
{
    public function index() {
        return view('admin.blog.index', [
            'artikels' => Blog::orderBy('id', 'desc')->get()
            
        ]);
    }

    public function create() {
        return view('admin.blog.create');
    }

    public function store(Request $request) {
    
        $rules = [
            'judul' => 'required',
            'desc' => 'required|min:20',
        ];


       
        $message = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Image wajib diisi!',
            'desc.required' => 'Desc wajib diisi!',
        ];

        $request->validate($rules, $message);


        $filename = time() . '.' . $request->file('image')->extension();
        $request->file('image')->storeAs('public/artikel', $filename);

        // dd($request);

        $storage = "public/images";
        $dom = new \DOMDocument();


        libxml_use_internal_errors(true);
        $dom->loadHTMl($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors();


        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mine>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContent = substr(md5($fileNameContent), 6, 6). '_' . time();
                $filePath = ("$storage/$fileNameContent.$mimetype");
                $image = Image::make($src)->resize(1440, 720)->encode($mimetype, 100)->save(public_path($filePath));
                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->getAttribute('src', $new_src);
                $img->setAttribute('class', 'image-responsive');
            }
        }

        

        Blog::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '_'),
            'desc' => $request->desc,  
            'image' => $filename
        ]);

        return redirect(route('blog'))->with('succes', 'Data berhasil ditambahkan');
    }

    public function edit($id) {
        $artikel = Blog::find($id);
        return view('admin.blog.edit', [
            'artikel' => $artikel
        ]);
    }

    public function update(Request $request, $id) {
        $blog = Blog::find($id);
        
       
       $rules = [
            'judul' => 'required',
            'desc' => 'required|min:20'
       ];

       $message = [
        'judul.required' => 'Judul wajib diisi!',
        'desc.required' => 'Desc wajib diisi!',
       ];

       $request->validate($rules, $message);

       if ($request->file('image')){
        if ($blog->image) {
            Storage::disk('local')->delete('public/artikel/' . $blog->image);
        }
        
        $filename = time() . '.' . $request->file('image')->extension();
        $request->file('image')->storeAs('public/artikel', $filename);
       }

       $blog->update([
        'judul' => $request->judul,
        'image' => $filename,
        'desc' => $request->desc
       ]);

       return redirect(route('blog'))->with('succes', 'data berhasil diupdate');

    }

    public function destroy($id) {
        $artikel = Blog::find($id);
        if(Storage::disk('local')->exists('public/artikel/' . $artikel->image)){
            Storage::disk('local')->delete('public/artikel/' . $artikel->image);
        }
        $artikel->delete();

        return redirect('blog')->with('succes', 'databerhasil dihapus');
    }
}
