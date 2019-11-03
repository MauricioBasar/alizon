@extends('plantilla')

@section('titulo')
  Alizon.com El Comercio Que Siempre Buscaste
@endsection

@section('slider')
  <div class="slider">
    <ul>
      <li>
        <img src="upload/slider/slider01.webp" alt="">
      </li>

      <li>
        <img src="upload/slider/slider02.webp" alt="">
      </li>

      <li>
        <img src="upload/slider/slider03.webp" alt="">
      </li>

      <li>
        <img src="upload/slider/slider04.webp" alt="">
      </li>
    </ul>
    <ol>

    </ol>

    <div class="flechaisquierda">
      <i class="left fas fa-caret-left"></i>
    </div>

    <div class="flechaderecha">
      <i class="right fas fa-caret-right"></i>
    </div>
  </div>
@endsection
