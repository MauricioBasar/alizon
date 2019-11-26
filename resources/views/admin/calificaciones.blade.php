@extends('plantillagestor')

@section('titulo')
  Alizon.com Gestor de Calificaciones
@endsection

@section('descripcion')
  Gestor de contenidos de Calificaciones
@endsection

@section('secciongestor')
<div class="secciongestor">
<form action="/gestor/calificaciones" method="post" enctype="multipart/form-data">
  @csrf
  <h1 class="titulo">Carga los tipos de calificaciones</h1>
 <ul>
    <li>
      <input class="bordecalificaciones" type="text" name="calificaciones">
      <span class="mensajeerrorcalificaciones">
        @if ($errors->get("calificaciones"))
          @if ($errors->get("calificaciones"))
            <style>.bordecalificaciones{ {{$borderojo ?? ''}} }.mensajeerrorcalificaciones{ {{$errorestilos ?? ''}} }</style>
            @foreach ($errors->get("calificaciones") as $error)
              {{$error}}
              </br>
            @endforeach
            @else
              <style>.bordecalificaciones{ {{$bordeverde}} }</style>
          @endif
        @endif
      </span>
    </li>

    <button type="submit" name="submit">Publicar Calificacion</button>
  </ul>
 </form>
</div>
@endsection
