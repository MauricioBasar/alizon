@extends('plantillagestor')

@section('titulo')
  Alizon.com Gestor de Marcas
@endsection

@section('descripcion')
  Gestor de contenidos de Marcas
@endsection

@section('secciongestor')
<div class="secciongestor">
<form action="/gestor/marcas" method="post" enctype="multipart/form-data">
  @csrf
  <h1 class="titulo">Carga los tipos de marcas</h1>
 <ul>
    <li>
      <input class="bordemarcas" type="text" name="marcas">
      <span class="mensajeerrormarcas">
        @if ($errors->get("marcas"))
          @if ($errors->get("marcas"))
            <style>.bordemarcas{ {{$borderojo ?? ''}} }.mensajeerrormarcas{ {{$errorestilos ?? ''}} }</style>
            @foreach ($errors->get("marcas") as $error)
              {{$error}}
              </br>
            @endforeach
            @else
              <style>.bordemarcas{ {{$bordeverde}} }</style>
          @endif
        @endif
      </span>
    </li>

    <button type="submit" name="submit">Publicar Marca</button>
  </ul>
 </form>
</div>
@endsection
