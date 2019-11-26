@extends('plantillagestor')

@section('titulo')
  Alizon.com Gestor de Subcategorias
@endsection

@section('descripcion')
  Gestor de contenidos de Subcategorias
@endsection

@section('secciongestor')
<div class="secciongestor">
<form action="/gestor/subcategorias" method="post" enctype="multipart/form-data">
  @csrf
  <h1 class="titulo">Carga los tipos de subcategorias</h1>
 <ul>
   <li>
   <select name="categorias">
     <optgroup label="Categorias">
       <option value="">Seleciona una Categoria</option>
       @foreach ($categorias as $categoria)
         <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
       @endforeach
     </optgroup>
   </select>
   <span class="mensajeerrorcategorias">
       @if ($errors->get("categorias"))
         <style>.mensajeerrorcategorias{ {{$errorestilos ?? '' ?? ''}} }</style>
         @foreach ($errors->get("categorias") as $error)
           {{$error}}
           </br>
         @endforeach
       @endif
   </span>
   </li>

    <li>
      <input class="bordesubcategorias" type="text" name="subcategorias">
      <span class="mensajeerrorsubcategorias">
        @if ($errors->get("subcategorias"))
          @if ($errors->get("subcategorias"))
            <style>.bordesubcategorias{ {{$borderojo ?? ''}} }.mensajeerrorsubcategorias{ {{$errorestilos ?? ''}} }</style>
            @foreach ($errors->get("subcategorias") as $error)
              {{$error}}
              </br>
            @endforeach
            @else
              <style>.bordesubcategorias{ {{$bordeverde}} }</style>
          @endif
        @endif
      </span>
    </li>

    <button type="submit" name="submit">Publicar Subcategoria</button>
  </ul>
 </form>
</div>
@endsection
