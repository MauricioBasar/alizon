<div class="menuizquierdofixed">
  <aside>
    <div class="bienvenidofixed">
      <div class="iconomenufixedcerrar"><i class="fal fa-window-close"></i></div>
      @if (session()->has("nombre"))
        <style>
          .bienvenidofixed img{
            width: 50%;
            display: block;
            border-radius: 30% 3%;
            box-shadow: 1px 1px 5px white;
          }
          .bienvenidofixed h1{
            text-align: center;
            font-size: 2em;
            color: #fff;
            text-shadow: 1px 1px 1px #000;
            margin: 2% 0;
            text-transform: capitalize;
          }

          .opciones{
            width: 80%;
            display: block;
            text-align: center;
            border: 1px solid #000;
            border-radius: 3px;
            background: white;
            font-size: 1.5em;
          }

          .opciones summary{
            padding: 2% 0;
            font-size: 1.2em;
            font-weight: bold;
            background: blue;
            color: white;
            text-shadow: 1px 1px 1px #000;
            box-shadow: 1px 1px 5px #fff;
          }

          .opciones ul{
            padding: 5% 0;
            font-weight: bold;
            background: #4665d6e6;
            color: white;
            text-shadow: 1px 1px 1px #000;
            box-shadow: 1px 1px 5px #fff;
          }

          .opciones a{
            color: white;
          }

          .opciones ul li{
            padding: 3% 0;
            box-shadow: inset 1px 1px 5px #fff;
            margin: 2% 0;
            background: #1c1c75;
          }

          .opciones ul li a:hover{
            font-size: 0.98em;
            color: #eab53ecc;
            text-shadow: 1px 1px 1px #000;
            transition: all 0.3s;
          }
        </style>
        <img src="/storage/fotos/{{session()->get("foto")}}" alt="Foto de perfil">
        <h1>Hola, {{session()->get("nombre"). " " .session()->get("apellido")}}</h1>

      <details class="opciones">
        <summary>Opciones</summary>
        <ul>
          <li><h4>Mi Cuenta</h4></li>
          <li><h4>Compras</h4></li>
          <li><h4>Datos</h4></li>
          <li><h4>Historial</h4></li>
          <li><h4><a href="/cerrarsesion">Cerrar Sesion</a></h4></li>
        </ul>
      </details>
      @else
        <span class="icononopersona"><i class="fal fa-user-circle"></i></span>
        <hgroup>
          <h3>Bienvenido</h3>
          <h6>Ingresá a tu cuenta para ver tus compras, favoritos, y más.</h6>
        </hgroup>

        <span class="registrooiniciofixed"><p>REGISTRATE O INICIA SESION</p></span>
      @endif
    </div>

    <div class="categoriasfixed">
      <ul>
        <li><a href="/"><span><i class="fal fa-user-circle"></i></span>Inicio</a></li>
        <li><a href="#"><span><i class="fal fa-user-circle"></i></span>Categorias</a></li>
        <li><a href="#"><span><i class="fal fa-user-circle"></i></span>Carrito de compras</a></li>
        <li><a href="#"><span><i class="fal fa-user-circle"></i></span>Mis compras</a></li>
        <li><a href="#"><span><i class="fal fa-user-circle"></i></span>Favoritos</a></li>
        <li><a href="/centrodeayuda"><span><i class="fal fa-user-circle"></i></span>Centro de ayuda</a></li>
        <li><a href="#"><span><i class="fal fa-user-circle"></i></span>Sucursales</a></li>
        <li><a href="#"><span><i class="fal fa-user-circle"></i></span>Venta telefonica</a></li>
        <li><a href="#"><span><i class="fal fa-user-circle"></i></span>Venta a empresas</a></li>
        <li><a href="#"><span><i class="fal fa-user-circle"></i></span>Creditos y tarjetas</a></li>
        <li><a href="#"><span><i class="fal fa-user-circle"></i></span>Seguros</a></li>
        <li><a href="#"><span><i class="fal fa-user-circle"></i></span>Listas de Regalos</a></li>
        <li><a href="#"><span><i class="fal fa-user-circle"></i></span>Soluciones Logisticas</a></li>
        <li><a href="#"><span><i class="fal fa-user-circle"></i></span>Viajes</a></li>
      </ul>
    </div>

  </aside>
</div>
