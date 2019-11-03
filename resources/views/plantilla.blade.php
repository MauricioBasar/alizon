@php
  session_start();
  $traer = "";
  $metodoparatraerregistro = old("nombre") || old("apellido") || old("email") || old("contrasena") || old("contrasena2");
  $metodoparatraerlogin = null;
  $borderojo = "border: solid 2px red;";
  $bordeverde = "border: solid 2px green;";
  $errorestilos = "text-align: center;font-weight: bold;color: #dcc300;text-shadow: 1px 2px 0px #000;font-size: 0.9em;background: repeating-linear-gradient(45deg, #ad0011, #ffdada00 119px);padding: 3% 1%;border-radius: 4px;display:block;";

  if ($metodoparatraerregistro) {
    $traer = "<style>.registro{top: 12%;}</style>";
  }

@endphp
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo')</title>
    <meta name="content" content="Encontrá Los Mejores Productos De Las Mejores Marcas Solo En Alizon.Com. Comprá en 12 y 18 Cuotas s/Interés. Ahora 12. Entrega Inmediata. Los Mejores Descuentos. Envíos a Todo el Pais...">
    <meta name="author" content="GrupoHouse">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/estilos.css">
    <?=$traer?>
  </head>
  <body>
    @include('plantilla/sesion')
    @include('plantilla/registro')
    @include('plantilla/header')
    @yield('slider')

    <div class="contenedor">
      @yield('menudepagos')
      @yield('banner')
      @yield('slider7')
      @yield('slider2')
      @yield('slider3')
      @yield('seccion3')
      @yield('slider4')
      @yield('seccion')
      @yield('slider5')
      @yield('seccion2')
      @yield('slider6')
      @yield('seccion4')
      @yield('banner2')
      @yield('slider8')
      @include('plantilla/footer')
    </div>

    <script src="/js/jquery-3.4.1.min.js" charset="utf-8"></script>
    <script src="/js/javascript.js" charset="utf-8"></script>
    <script src="/js/all.min.js" charset="utf-8"></script>
  </body>
</html>
