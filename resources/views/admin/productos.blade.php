@extends('plantillagestor')

@section('titulo')
  Alizon.com Gestor Agregar Productos
@endsection

@section('descripcion')
  Gestor de contenidos Para Agregar Productos
@endsection

@section('secciongestor')
<div class="secciongestor">
<form action="/gestor/productos" method="post" enctype="multipart/form-data">
  @csrf
  <h1 class="titulo">Seccion Para Agregar Los Productos</h1>
 <ul>
   <li>
     <select name="calificacion">
       <optgroup label="Calificaciones">
         <option value="">Seleciona una Calificacion</option>
         @foreach ($calificaciones as $calificacion)
           <option value="{{$calificacion->id}}">{{$calificacion->calificacion}} Estrella</option>
         @endforeach
       </optgroup>
     </select>
     <span class="mensajeerrorcalificacion">
         @if ($errors->get("calificacion"))
           <style>.mensajeerrorcalificacion{ {{$errorestilos ?? '' ?? ''}} }</style>
           @foreach ($errors->get("calificacion") as $error)
             {{$error}}
             </br>
           @endforeach
         @endif
     </span>

     <select name="categoria">
       <optgroup label="Categorias">
         <option value="">Seleciona una Categoria</option>
         @foreach ($categorias as $categoria)
           <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
         @endforeach
       </optgroup>
     </select>
     <span class="mensajeerrorcategoria">
         @if ($errors->get("categoria"))
           <style>.mensajeerrorcategoria{ {{$errorestilos ?? '' ?? ''}} }</style>
           @foreach ($errors->get("categoria") as $error)
             {{$error}}
             </br>
           @endforeach
         @endif
     </span>

     <select name="subcategoria">
       <optgroup label="Subcategorias">
         <option value="">Seleciona una Subcategoria</option>
         @foreach ($subcategorias as $subcategoria)
           <option value="{{$subcategoria->id}}">{{$subcategoria->subcategoria}}</option>
         @endforeach
       </optgroup>
     </select>
     <span class="mensajeerrorsubcategoria">
         @if ($errors->get("subcategoria"))
           <style>.mensajeerrorsubcategoria{ {{$errorestilos ?? '' ?? ''}} }</style>
           @foreach ($errors->get("subcategoria") as $error)
             {{$error}}
             </br>
           @endforeach
         @endif
     </span>

     <select name="marca">
       <optgroup label="Marcas">
         <option value="">Seleciona una Marca</option>
         @foreach ($marcas as $marca)
           <option value="{{$marca->id}}">{{$marca->marca}}</option>
         @endforeach
       </optgroup>
     </select>
     <span class="mensajeerrormarca">
         @if ($errors->get("marca"))
           <style>.mensajeerrormarca{ {{$errorestilos ?? '' ?? ''}} }</style>
           @foreach ($errors->get("marca") as $error)
             {{$error}}
             </br>
           @endforeach
         @endif
     </span>

     <select name="oferta">
       <optgroup label="Ofertas">
         <option value="">Seleciona una Oferta</option>
         @foreach ($ofertas as $oferta)
           <option value="{{$oferta->id}}">{{$oferta->oferta}}% de descuento</option>
         @endforeach
       </optgroup>
     </select>
     <span class="mensajeerroroferta">
         @if ($errors->get("oferta"))
           <style>.mensajeerroroferta{ {{$errorestilos ?? '' ?? ''}} }</style>
           @foreach ($errors->get("oferta") as $error)
             {{$error}}
             </br>
           @endforeach
         @endif
     </span>


     <select name="cuota">
       <optgroup label="Cantidad de Cuotas">
         <option value="">Selecionar Cuotas</option>
         <option value="3">3 Cuotas</option>
         <option value="6">6 Cuotas</option>
         <option value="9">9 Cuotas</option>
         <option value="12">12 Cuotas</option>
         <option value="18">18 Cuotas</option>
       </optgroup>
     </select>
     <span class="mensajeerrorcuota">
         @if ($errors->get("cuota"))
           <style>.mensajeerrorcuota{ {{$errorestilos ?? '' ?? ''}} }</style>
           @foreach ($errors->get("cuota") as $error)
             {{$error}}
             </br>
           @endforeach
         @endif
     </span>
   </li>

   <li>
     <label for="titulo">Titulo del Producto</label>
     <input class="bordetitulo" type="text" name="titulo" value="{{old("titulo")}}">
     <span class="mensajeerrortitulo">
       @if ($errors->get("titulo"))
         @if ($errors->get("titulo"))
           <style>.bordetitulo{ {{$borderojo ?? ''}} }.mensajeerrortitulo{ {{$errorestilos ?? ''}} }</style>
           @foreach ($errors->get("titulo") as $error)
             {{$error}}
             </br>
           @endforeach
           @else
             <style>.bordetitulo{ {{$bordeverde}} }</style>
         @endif
       @endif
     </span>
   </li>

   <li>
     <label for="minidescripcion">Ingresa Una descripcion de 153 caracteres maximo para el seo</label>
     <textarea class="bordeminidescripcion" name="minidescripcion" value="{{old("minidescripcion")}}" rows="8" cols="80"></textarea>
     <span class="mensajeerrorminidescripcion">
       @if ($errors->get("minidescripcion"))
         @if ($errors->get("minidescripcion"))
           <style>.bordeminidescripcion{ {{$borderojo ?? ''}} }.mensajeerrorminidescripcion{ {{$errorestilos ?? ''}} }</style>
           @foreach ($errors->get("minidescripcion") as $error)
             {{$error}}
             </br>
           @endforeach
           @else
             <style>.bordeminidescripcion{ {{$bordeverde}} }</style>
         @endif
       @endif
     </span>
   </li>

   <li>
     <label for="descripcion">Ingresa La descripcion Completa Hasta 500 caracteres</label>
     <textarea class="bordedescripcion" name="descripcion" value="{{old("descripcion")}}" rows="8" cols="80"></textarea>
     <span class="mensajeerrordescripcion">
       @if ($errors->get("descripcion"))
         @if ($errors->get("descripcion"))
           <style>.bordedescripcion{ {{$borderojo ?? ''}} }.mensajeerrordescripcion{ {{$errorestilos ?? ''}} }</style>
           @foreach ($errors->get("descripcion") as $error)
             {{$error}}
             </br>
           @endforeach
           @else
             <style>.bordedescripcion{ {{$bordeverde}} }</style>
         @endif
       @endif
     </span>
   </li>

   <li>
     <label for="precio">Precio del Producto</label>
     <input class="bordeprecio" type="text" name="precio" value="{{old("precio")}}">
     <span class="mensajeerrorprecio">
       @if ($errors->get("precio"))
         @if ($errors->get("precio"))
           <style>.bordeprecio{ {{$borderojo ?? ''}} }.mensajeerrorprecio{ {{$errorestilos ?? ''}} }</style>
           @foreach ($errors->get("precio") as $error)
             {{$error}}
             </br>
           @endforeach
           @else
             <style>.bordeprecio{ {{$bordeverde}} }</style>
         @endif
       @endif
     </span>
   </li>

    <li>
      <label for="imagen">Cargar Imagen</label>
      <input class="bordeimagen" type="file" name="imagen">
      <span class="mensajeerrorimagen">
        @if ($errors->get("imagen"))
          @if ($errors->get("imagen"))
            <style>.bordeimagen{ {{$borderojo ?? '' ?? ''}} }.mensajeerrorimagen{ {{$errorestilos ?? '' ?? ''}} }</style>
            @foreach ($errors->get("imagen") as $error)
              {{$error}}
              </br>
            @endforeach
            @else
              <style>.bordeimagen{ {{$bordeverde}} }</style>
          @endif
        @endif
      </span>
    </li>

    <li>
      <label for="imagen2">Cargar la Segunda Imagen</label>
      <input class="bordeimagen2" type="file" name="imagen2">
      <span class="mensajeerrorimagen2">
        @if ($errors->get("imagen2"))
          @if ($errors->get("imagen2"))
            <style>.bordeimagen2{ {{$borderojo ?? '' ?? ''}} }.mensajeerrorimagen2{ {{$errorestilos ?? '' ?? ''}} }</style>
            @foreach ($errors->get("imagen2") as $error)
              {{$error}}
              </br>
            @endforeach
            @else
              <style>.bordeimagen2{ {{$bordeverde}} }</style>
          @endif
        @endif
      </span>
    </li>

    <li>
      <label for="imagen3">Cargar la Tercera Imagen</label>
      <input class="bordeimagen3" type="file" name="imagen3">
      <span class="mensajeerrorimagen3">
        @if ($errors->get("imagen3"))
          @if ($errors->get("imagen3"))
            <style>.bordeimagen3{ {{$borderojo ?? '' ?? ''}} }.mensajeerrorimagen3{ {{$errorestilos ?? '' ?? ''}} }</style>
            @foreach ($errors->get("imagen3") as $error)
              {{$error}}
              </br>
            @endforeach
            @else
              <style>.bordeimagen3{ {{$bordeverde}} }</style>
          @endif
        @endif
      </span>
    </li>

    <li>
      <label for="imagen4">Cargar la Cuarta Imagen</label>
      <input class="bordeimagen4" type="file" name="imagen4">
      <span class="mensajeerrorimagen4">
        @if ($errors->get("imagen4"))
          @if ($errors->get("imagen4"))
            <style>.bordeimagen4{ {{$borderojo ?? '' ?? ''}} }.mensajeerrorimagen4{ {{$errorestilos ?? '' ?? ''}} }</style>
            @foreach ($errors->get("imagen4") as $error)
              {{$error}}
              </br>
            @endforeach
            @else
              <style>.bordeimagen4{ {{$bordeverde}} }</style>
          @endif
        @endif
      </span>
    </li>

    <li>
      <label for="imagen5">Cargar la Quinta Imagen</label>
      <input class="bordeimagen5" type="file" name="imagen5">
      <span class="mensajeerrorimagen5">
        @if ($errors->get("imagen5"))
          @if ($errors->get("imagen5"))
            <style>.bordeimagen5{ {{$borderojo ?? '' ?? ''}} }.mensajeerrorimagen5{ {{$errorestilos ?? '' ?? ''}} }</style>
            @foreach ($errors->get("imagen5") as $error)
              {{$error}}
              </br>
            @endforeach
            @else
              <style>.bordeimagen5{ {{$bordeverde}} }</style>
          @endif
        @endif
      </span>
    </li>

    <button type="submit" name="submit">Publicar Producto</button>
  </ul>
 </form>
</div>
@endsection
