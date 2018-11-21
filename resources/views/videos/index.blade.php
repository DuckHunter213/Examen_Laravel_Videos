@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <h1>Los videos deben ser públicos</h1>
    </div>
    @foreach($videos as $video)
    <div class="container">
      <label class="row">{{$video->titulo}}</label>
      <label class="row">{{$video->tema}}</label>
      <label class="row">{{$video->create_at}}</label>
      <div class="row ">
        <video width="320" height="240" controls>
          <source src="{{$video->urlVideo}}" type="video/mp4">
        </video>
      </div>
      @endforeach
    </div>
</div>
@endsection
