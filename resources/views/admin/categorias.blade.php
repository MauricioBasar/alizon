@extends('plantillagestor')

@section('titulo')
  Alizon.com Gestor de Categorias
@endsection

@section('descripcion')
  Gestor de contenidos de Categorias
@endsection

@section('secciongestor')
<div class="secciongestor">
<form action="/gestor/categorias" method="post" enctype="multipart/form-data">
  @csrf
  <h1 class="titulo">Carga los tipos de categorias</h1>
 <ul>
    <li>
      <input class="bordecategorias" type="text" name="categorias">
      <span class="mensajeerrorcategorias">
        @if ($errors->get("categorias"))
          @if ($errors->get("categorias"))
            <style>.bordecategorias{ {{$borderojo ?? ''}} }.mensajeerrorcategorias{ {{$errorestilos ?? ''}} }</style>
            @foreach ($errors->get("categorias") as $error)
              {{$error}}
              </br>
            @endforeach
            @else
              <style>.bordecategorias{ {{$bordeverde}} }</style>
          @endif
        @endif
      </span>
    </li>

    <button type="submit" name="submit">Publicar Categoria</button>
  </ul>
 </form>
</div>
@endsection
