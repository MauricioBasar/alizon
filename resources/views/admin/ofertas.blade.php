@extends('plantillagestor')

@section('titulo')
  Alizon.com Gestor de Ofertas
@endsection

@section('descripcion')
  Gestor de contenidos de Ofertas
@endsection

@section('secciongestor')
<div class="secciongestor">
<form action="/gestor/ofertas" method="post" enctype="multipart/form-data">
  @csrf
  <h1 class="titulo">Carga los tipos de ofertas</h1>
 <ul>
    <li>
      <input class="bordeofertas" type="text" name="ofertas">
      <span class="mensajeerrorofertas">
        @if ($errors->get("ofertas"))
          @if ($errors->get("ofertas"))
            <style>.bordeofertas{ {{$borderojo ?? ''}} }.mensajeerrorofertas{ {{$errorestilos ?? ''}} }</style>
            @foreach ($errors->get("ofertas") as $error)
              {{$error}}
              </br>
            @endforeach
            @else
              <style>.bordeofertas{ {{$bordeverde}} }</style>
          @endif
        @endif
      </span>
    </li>

    <button type="submit" name="submit">Publicar Oferta</button>
  </ul>
 </form>
</div>
@endsection
