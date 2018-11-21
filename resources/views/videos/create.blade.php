@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="row justify-content-center">Subir Video</h1>
    <form method="POST" action="{{route('videos.submit')}}" enctype="multipart/form-data">
      <div class="row">
        {{ csrf_field() }}
        <div class="col-sm-12 col-md-6">
          <h2>Paso 1: Subir Video</h2>
          <label>Solo se admiten los formatos de video</label>
          <input class="form-control-file" type="file" name="video" id="video">
        </div>
        <div class="col-sm-12 col-md-6">
          <h2>Paso 2: Escribe los datos del video</h2>
          <label>Titulo del video:</label>
          <input class="form-control" type="text" name="titulo" id="titulo">
          <label>Tema:</label>
          <input class="form-control" type="text" name="tema" id="tema">
          <label>Experiencia Educativa:</label>
          <input class="form-control" type="text" name="experienciaEducativa" id="experienciaEducativa">
        </div>
      </div>
      <button style="margin-top: 1em;" class="row btn btn-primary float-right">Subir Video</button>
    </form>
</div>
@endsection
