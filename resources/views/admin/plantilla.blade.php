@php

  $borderojo = "border: solid 2px red;";
  $bordeverde2 = "border: solid 2px green;";
  $errorestilos2 = "text-align: center;font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;";

  var_dump($errors->get("imagen"));
@endphp
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo')</title>
    <meta name="content" content="@yield('descripcion')">
    <meta name="author" content="GrupoHouse">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/gestor.css">
  </head>
  <body>
      @include('admin/plantilla/header')
    <div class="contenedor">

      <div class="menuizquierdoysecciongestor">
        @include('admin/plantilla/menuizquierdo')
        @yield('secciongestor')
      </div>

      @include('admin/plantilla/footer')
    </div>
    <script src="/js/jquery-3.4.1.min.js" charset="utf-8"></script>
    <script src="/js/all.min.js" charset="utf-8"></script>
  </body>
</html>
