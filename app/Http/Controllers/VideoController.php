<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(){
        return view('admin.video.index', [
            'videos' => Video::orderBy('id', 'desc')->get()
        ]);
    }

    public function store(Request $request){
        $rules = [
            'judul' => 'required',
            'youtube_code' => 'required',
        ];
      
        $message = [
            'judul.required' => 'Judul wajib diisi!',
            'youtube_code.required' => 'Youtube code wajib diisi!',
        ];

        $request->validate($rules, $message);

        Video::create([
            'judul' => $request->judul,  
            'youtube_code' => $request->youtube_code
        ]);

        return redirect(route('video'))->with('success', 'Data video berhasil ditambahkan');
    }

    public function update(Request $request, $id){
        $video = Video::find($id);
             
        $rules = [
        'judul' => 'required',
        'youtube_code' => 'required',
        ];
  
        $message = [
            'judul.required' => 'Judul wajib diisi!',
            'youtube_code.required' => 'Youtube code wajib diisi!',
        ];

        $request->validate($rules, $message);

        $video->update([
            'judul' => $request->judul,
            'youtube_code' => $request->youtube_code, 
        ]);

    return redirect(route('video'))->with('succes', 'Data berhasil diupdate');


    }

    public function destroy($id){
        $video = Video::find($id);

        $video->delete();

        return redirect('video')->with('succes', 'databerhasil dihapus');
    }
}


