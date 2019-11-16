<div class="header">
<div class="cerrartodo"></div>
<header>
<nav>
<div class="headerparte1">
  <ul>
    <li><a href="#">Creditos y Tarjetas</a></li>
    <li><a href="#">Venta a Empresas</a></li>
    <li><a href="#">Seguros</a></li>
    <li><a href="#">Listas de Regalos</a></li>
    <li><a href="#">Logistica</a></li>
    <li><a href="#">Viajes</a></li>
    <li><a href="#"><span><i class="fal fa-phone-alt"></i></span>Venta Telefonica</a></li>
    <li><a href="#"><span><i class="fal fa-search-location"></i></span>Sucursales</a></li>
    <li><a href="/centrodeayuda"><span><i class="fal fa-question"></i></span>Centro de ayuda</a></li>
  </ul>
</div>

<div class="headerparte2">
  <ul>
    <li><div class="iconomenufixed"><i class="fal fa-bars"></i></div></li>
    <li><div class="logo"><h1><a href="/"><img src="/img/logo.png" alt=""></a></h1></div></li>
    <li><div class="iconobuscador"><i class="fab fa-searchengin"></i></div></li>
    <li><input type="text" name="buscador" value="" placeholder="Busca productos, marcas, categorias..."></li>
    <li><div class="iconocarrito"><i class="fas fa-cart-plus"></i></div></li>
    <li><h3>¡Aprovechá las 18 cuotas sin interés!</h3></li>
    @if (session()->has("tipodeusuario"))
      @if (session()->get("tipodeusuario") === "administrador")
        <li><h4><a href="/gestor">Ir al Gestor</a></h4></li>
      @endif
    @endif
  </ul>
</div>


<div class="headerparte3">
  <ul>


    <li><details>
      <summary>Categorias</summary>
      <ul>
        <li><h4>Tecnologia</h4></li>
        <li><h4>Electrodomesticos</h4></li>
        <li><h4>Casa y jardin</h4></li>
        <li><h4>Salud y Bellesa</h4></li>
        <li><h4>Bebes y Niños</h4></li>
        <li><h4>Deportes y Tiempo Libre</h4></li>
        <li><h4>Herramientas</h4></li>
        <li><h4>Acsesorios para Vehiculos</h4></li>
        <li><h4>Mas Categorias</h4></li>
      </ul>
    </details></li>

    <li><a href="#">Envio Gratis ¡impredible!</a></li>
    <li><a href="#">Beneficio Anses</a></li>
    <li><a href="/ofertas">¡Ofertas BOMBA!</a></li>
    @if (session()->has("nombre"))
      <style>
        .mayuscula{
          text-transform: capitalize;
        }

        .usuariologinfoto img{
          width: 60%;
          margin-left: 17.5%;
          border:  solid 1px green;
          border-radius: 30% 3%;
          box-shadow: 1px 1px 5px white;
        }
      </style>
      <li><details>
        <summary class="mayuscula">Hola, {{session()->get("nombre"). " " .session()->get("apellido")}}</summary>
        <ul>
          <li class="usuariologinfoto"><img  src="/storage/fotos/{{session()->get("foto")}}" alt="Foto de perfil"></li>
          <li><h3>Mi Cuenta</h3></li>
          <li><h4>Compras</h4></li>
          <li><h4>Datos</h4></li>
          <li><h4>Historial</h4></li>
          <li><h3><a href="/cerrarsesion">Cerrar Sesion</a></h3></li>
        </ul>
      </details></li>
      @else
        <li class="iconoregistroheader"><a href="#">Registrate</a></li>
        <li class="iconosesionheader"><a href="#">Inicia Sesion</a></li>
    @endif
    <li class="iconomasgrande" ><a href="#"><span><i class="fas fa-heart"></i></span></a></li>
    <li class="iconomasgrande" ><a href="#"><span><i class="fab fa-whatsapp"></i></span></a></li>


  </ul>
</div>

</nav>
</header>
</div>
@include('plantilla/menuizquierdofixed')
