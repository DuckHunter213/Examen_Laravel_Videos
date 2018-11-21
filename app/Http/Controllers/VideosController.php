<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\video;

class VideosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('auth',['except' => ['index']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $videos = video::all();
      return view('videos/index',compact('videos'));
    }

    public function create()
    {
      return view('videos/create');
    }

    public function submit(Request $request){
      request()->validate(['file' => 'video']);
      $request->file('video');
      $nombreDocumento = $request->file('video')->getClientOriginalName();
      $request->file('video')->storeAs('public/',$nombreDocumento);
      $video = new video([
        'titulo' => $request->get('titulo'),
        'tema' => $request->get('tema'),
        'experienciaEducativa'=> $request->get('experienciaEducativa'),
        'urlVideo'=> "../storage/".$nombreDocumento,
      ]);
      $video->save();

      return redirect('videos/index');
    }
}
