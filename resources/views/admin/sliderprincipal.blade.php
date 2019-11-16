@extends('admin.plantilla')

@section('titulo')
  Alizon.com Gestor del Slider Pricipal
@endsection

@section('descripcion')
  Gestor de contenidos del Slider Principal
@endsection

@section('secciongestor')
<div class="secciongestor">
<form action="/gestor/sliderprincipal" method="post" enctype="multipart/form-data">
  @csrf
  <h1 class="titulo">Cargar Imagen al Slider Principal</h1>
 <ul>
    <li>
      <label for="imagen">Cargar Imagen</label>
      <input class="bordeimagen" type="file" name="imagen">
      <span class="mensajeerrorimagen">
          @if ($errors->get("imagen"))
            <style>.bordeimagen{ {{$borderojo2 ?? ''}} }.mensajeerrorimagen{ {{$errorestilos2 ?? ''}} }</style>
            @foreach ($errors->get("imagen") as $error)
              {{$error}}
              </br>
            @endforeach
            @else
              <style>.bordeimagen{ {{$bordeverde}} }</style>
          @endif
      </span>
    </li>

    <button type="submit" name="submit">Publicar Imagen</button>
  </ul>
 </form>
</div>
@endsection
