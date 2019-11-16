@php
  $metodoparatraerregistro = $errors->get("nombre") || $errors->get("apellido") || $errors->get("email") || $errors->get("contrasena") || $errors->get("contrasena2") || $errors->get("foto");
  $metodoparatraerlogin = $errors->get("emaillogin") || $errors->get("contrasenalogin");
  $borderojo = "border: solid 2px red;";
  $bordeverde = "border: solid 2px green;";
  $errorestilos = "text-align: center;font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;";
  $errorestiloslogin = "text-align: center;font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 1.3em;background: repeating-linear-gradient(45deg, #8800ad, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;text-align:center;margin-bottom:2%;";

  if ($metodoparatraerregistro) {
    $traer = "<style>.registro{top: 12%;}</style>";
  }

  if ($metodoparatraerlogin) {
    $traer = "<style>.sesion{top: 12%;}</style>";
  }
@endphp
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo')</title>
    <meta name="content" content="@yield('descripcion')">
    <meta name="author" content="GrupoHouse">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/estilos.css">
    @isset($traer)
    <?=$traer?>
    @endisset
  </head>
  <body>
    @include('plantilla/sesion')
    @include('plantilla/registro')
    @include('plantilla/header')
    @yield('slider')

    <div class="contenedor">
      @yield('1')
      @yield('2')
      @yield('3')
      @yield('4')
      @yield('5')
      @yield('6')
      @yield('7')
      @yield('8')
      @yield('9')
      @yield('10')
      @yield('11')
      @yield('12')
      @yield('13')
      @yield('14')
      @include('plantilla/footer')
    </div>

    <script src="/js/jquery-3.4.1.min.js" charset="utf-8"></script>
    <script src="/js/javascript.js" charset="utf-8"></script>
    <script src="/js/all.min.js" charset="utf-8"></script>
  </body>
</html>
