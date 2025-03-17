<?php

namespace App\Http\Controllers;

use File;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function index(){
        return view('admin.photo.index', [
            'photos' => Photo::orderBy('id', 'desc')->get()
        ]);
    }

    public function store(Request $request){
        $rules = [
            'judul' => 'required',
            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp',
        ];


       
        $message = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Image wajib diisi!',
        ];

        $request->validate($rules, $message);


        $filename = time() . '.' . $request->file('image')->extension();
        $request->file('image')->storeAs('public/photo', $filename);

        Photo::create([
            'judul' => $request->judul,  
            'image' => $filename
        ]);

        return redirect(route('photo'))->with('success', 'Data photo berhasil ditambahkan');
    }

    public function update(Request $request, $id){
        $photo = Photo::find($id);
        
       
       $rules = [
            'judul' => 'required',
            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp'
       ];

       $message = [
        'judul.required' => 'Judul wajib diisi!',
        'image.required' => 'image wajib diisi!',
       ];

       $request->validate($rules, $message);

       if ($request->file('image')){
        if ($photo->image) {
            Storage::disk('local')->delete('public/photo/' . $photo->image);
        }
        
        $filename = time() . '.' . $request->file('image')->extension();
        $request->file('image')->storeAs('public/photo', $filename);
       }

        $photo->update([
            'judul' => $request->judul,
            'image' => $filename, 
        ]);

    return redirect(route('photo'))->with('succes', 'Data berhasil diupdate');


    }

    public function destroy($id){
        $photo = Photo::find($id);
        if(Storage::disk('local')->exists('public/photo/' . $photo->image)){
            Storage::disk('local')->delete('public/photo/' . $photo->image);
        }
        $photo->delete();

        return redirect('photo')->with('succes', 'databerhasil dihapus');
    }
}
