@extends('plantilla')

@section('titulo')
  Alizon.com El Comercio Que Siempre Buscaste
@endsection

@section('descripcion')
  Encontrá Los Mejores Productos De Las Mejores Marcas Solo En Alizon.Com. Comprá en 12 y 18 Cuotas s/Interés. Ahora 12. Entrega Inmediata. Los Mejores Descuentos. Envíos a Todo el Pais...
@endsection

@section('slider')
  <div class="slider">
    <ul>
      @foreach ($sliderprincipal as $slider)
        <li>
          <img src="storage/sliderprincipal/{{$slider->imagen}}" alt="">
        </li>
      @endforeach
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

@section('1')
  <div class="menudepagos">
    <ul>
      <li>
        <div class="tarjetas">
          <i class="fab fa-cc-visa"></i>
          <i class="fab fa-cc-mastercard"></i>
          <i class="fab fa-cc-amex"></i>
          <i class="fab fa-cc-paypal"></i>
        </div>
        <h2>Pagá con crédito y débito</h2>
        <p><a href="#">Ver promociones</a></p>
      </li>


      <li>
        <div class="sucursales">
          <i class="fas fa-store"></i>
        </div>
        <h2>Retirá gratis en más de </h2>
        <p><a href="#">150 sucursales</a></p>
      </li>


      <li>
        <div class="envio">
          <i class="fas fa-shipping-fast"></i>
        </div>
        <h2>El envío más rápido a todo el país</h2>
      </li>

      <li class="oculto">
        <div class="avion">
          <i class="fas fa-plane-departure"></i>
        </div>
        <h2>Sumá Millas Aerolíneas Plus</h2>
        <p><a href="#">Ver mas</a></p>
      </li>

      <li class="oculto beneficios">
        <h2>Comprá en Alizon.com</h2>
        <p><a href="#">Ver beneficios</a></p>
      </li>
    </ul>
  </div>
@endsection

@section('2')
  <div class="banner">
    <img src="upload/banner.webp" alt="">
  </div>
@endsection

@section('3')
  <div class="slider7contenedor">
  <div class="ofertas5">
    <h1>Envío Gratis a C.A.B.A y G.B.A</h1>
    <p class="botonvermas5"><a href="/productos">VER MAS</a></p>
  </div>
  <div class="slider7">
    <ul>
      @foreach ($sliderultimosproductos as $slider7)
        <li>
          <a href="/producto/{{$slider7->id}}">
          <h1>{{$slider7->titulo}}</h1>
          <img src="/storage/productos/{{$slider7->imagen}}" alt="">
          <h2>{{$slider7->cuota}} CUOTAS SIN INTERÉS</h2>
          <p>${{$slider7->precio}}</p>
          </a>
        </li>
      @endforeach
    </ul>

    <div class="flechaisquierda7">
      <i class="left7 fal fa-chevron-double-left"></i>
    </div>

    <div class="flechaderecha7">
      <i class="right7 fal fa-chevron-double-right"></i>
    </div>
  </div>
  </div>
@endsection

@section('4')
  <div class="slider2contenedor">
  <div class="ofertas">
    <h1>OFERTAS</h1>
    <h3>Destacadas</h3>
    <p>22:13:17</p>
    <p class="botonvermas"><a href="ofertas.php">VER TODAS</a></p>
  </div>
  <div class="slider2">
    <ul>
      <li>
        <a href="#">
        <h1>Smart TV Philips 43</h1>
        <img src="upload/slider2/slider2-01.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$22.999</p>
        </a>
      </li>

      <li>
        <a href="#">
        <h1>Samsung Galaxy A10</h1>
        <img src="upload/slider2/slider2-02.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$10.999</p>
        </a>
      </li>

      <li>
        <a href="#">
        <h1>Heladera con Freezer</h1>
        <img src="upload/slider2/slider2-03.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$21.999</p>
        </a>
      </li>

      <li>
        <a href="#">
        <h1>Lavarropas Automático</h1>
        <img src="upload/slider2/slider2-04.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$22.499</p>
        </a>
      </li>

      <li>
        <a href="#">
        <h1>Smart TV HITACHI 32</h1>
        <img src="upload/slider2/slider2-05.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$14.999</p>
        </a>
      </li>

      <li>
        <a href="#">
        <h1>Cafetera Oster</h1>
        <img src="upload/slider2/slider2-06.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$3.299</p>
        </a>
      </li>

      <li>
        <a href="#">
        <h1>Aspiradora Samsung</h1>
        <img src="upload/slider2/slider2-07.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$8.299</p>
        </a>
      </li>

      <li>
        <a href="#">
        <h1>Silla de Plástico</h1>
        <img src="upload/slider2/slider2-08.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$5.999</p>
        </a>
      </li>
    </ul>

    <div class="flechaisquierda2">
      <i class="left2 fal fa-chevron-double-left"></i>
    </div>

    <div class="flechaderecha2">
      <i class="right2 fal fa-chevron-double-right"></i>
    </div>
  </div>
  </div>
@endsection

@section('5')
  <div class="slider3">
    <ul>
      <li>
        <a href="#">
        <img src="upload/slider3/slider3-01.webp" alt="">
        <h1>Televisores</h1>
        <h2>Hasta 25% OFF</h2>
        </a>
      </li>

      <li>
        <a href="#">
        <img src="upload/slider3/slider3-02.webp" alt="">
        <h1>Aires y Calefacción</h1>
        <h2>Hasta 20% OFF</h2>
        </a>
      </li>

      <li>
        <a href="#">
        <img src="upload/slider3/slider3-03.webp" alt="">
        <h1>Heladeras y Freezers</h1>
        <h2>Hasta 33% OFF</h2>
        </a>
      </li>

      <li>
        <a href="#">
        <img src="upload/slider3/slider3-04.webp" alt="">
        <h1>Lavado</h1>
        <h2>Hasta 33% OFF</h2>
        </a>
      </li>

      <li>
        <a href="#">
        <img src="upload/slider3/slider3-05.webp" alt="">
        <h1>Celulares</h1>
        <h2>Hasta 25% OFF</h2>
        </a>
      </li>

      <li>
        <a href="#">
        <img src="upload/slider3/slider3-06.webp" alt="">
        <h1>Pequeños Electro</h1>
        <h2>Hasta 33% OFF</h2>
        </a>
      </li>

      <li>
        <a href="#">
        <img src="upload/slider3/slider3-01.webp" alt="">
        <h1>Televisores</h1>
        <h2>Hasta 25% OFF</h2>
        </a>
      </li>

      <li>
        <a href="#">
        <img src="upload/slider3/slider3-02.webp" alt="">
        <h1>Aires y Calefacción</h1>
        <h2>Hasta 20% OFF</h2>
        </a>
      </li>

      <li>
        <a href="#">
        <img src="upload/slider3/slider3-03.webp" alt="">
        <h1>Heladeras y Freezers</h1>
        <h2>Hasta 33% OFF</h2>
        </a>
      </li>

      <li>
        <a href="#">
        <img src="upload/slider3/slider3-04.webp" alt="">
        <h1>Lavado</h1>
        <h2>Hasta 33% OFF</h2>
        </a>
      </li>

      <li>
        <a href="#">
        <img src="upload/slider3/slider3-05.webp" alt="">
        <h1>Celulares</h1>
        <h2>Hasta 25% OFF</h2>
        </a>
      </li>

      <li>
        <a href="#">
        <img src="upload/slider3/slider3-06.webp" alt="">
        <h1>Pequeños Electro</h1>
        <h2>Hasta 33% OFF</h2>
        </a>
      </li>
    </ul>

      <div class="flechaisquierda3">
        <div class="fondoflecha3">
        <i class="left3 fal fa-chevron-double-left"></i>
        </div>
      </div>

      <div class="flechaderecha3">
        <div class="fondoflecha3">
        <i class="right3 fal fa-chevron-double-right"></i>
        </div>
      </div>

  </div>
@endsection

@section('6')
  <div class="seccioncontenedor3">
  <h1>Más ofertas para vos</h1>

  <ul>
    <li>
      <a href="#">
      <img src="upload/seccion3/seccion3-01.webp" alt="">
      <h2>Cuidado Personal</h2>
      <p>Hasta 46% OFF</p>
      </a>
    </li>

    <li>
      <a href="#">
      <img src="upload/seccion3/seccion3-02.webp" alt="">
      <h2>Herramientas</h2>
      <p>Hasta 46% OFF</p>
      </a>
    </li>

    <li>
      <a href="#">
      <img src="upload/seccion3/seccion3-03.webp" alt="">
      <h2>Accesorios</h2>
      <p>Hasta 46% OFF</p>
      </a>
    </li>

    <li>
      <a href="#">
      <img src="upload/seccion3/seccion3-04.webp" alt="">
      <h2>Limpieza</h2>
      <p>Hasta 50% OFF</p>
      </a>
    </li>
  </ul>
  </div>
@endsection

@section('7')
  <div class="slider4contenedor">
  <div class="ofertas2">
    <h1>OFERTAS</h1>
    <p>DE</p>
    <h3>TELEVISORES</h3>
    <p class="botonvermas2"><a href="#">VER MAS</a></p>
  </div>
  <div class="slider4">
    <ul>
      <li>
        <a href="#">
        <h1>Smart TV Philips 43</h1>
        <img src="upload/slider4/slider4-01.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$22.999</p>
        </a>
      </li>

      <li>
        <a href="#">
        <h1>Samsung Galaxy A10</h1>
        <img src="upload/slider4/slider4-02.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$10.999</p>
        </a>
      </li>

      <li>
        <a href="#">
        <h1>Heladera con Freezer</h1>
        <img src="upload/slider4/slider4-03.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$21.999</p>
        </a>
      </li>

      <li>
        <a href="#">
        <h1>Lavarropas Automático</h1>
        <img src="upload/slider4/slider4-04.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$22.499</p>
        </a>
      </li>

      <li>
        <a href="#">
        <h1>Smart TV HITACHI 32</h1>
        <img src="upload/slider4/slider4-05.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$14.999</p>
        </a>
      </li>

      <li>
        <a href="#">
        <h1>Cafetera Oster</h1>
        <img src="upload/slider4/slider4-06.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$3.299</p>
        </a>
      </li>

      <li>
        <a href="#">
        <h1>Aspiradora Samsung</h1>
        <img src="upload/slider4/slider4-07.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$8.299</p>
        </a>
      </li>

      <li>
        <a href="#">
        <h1>Silla de Plástico</h1>
        <img src="upload/slider4/slider4-08.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$5.999</p>
        </a>
      </li>
    </ul>

    <div class="flechaisquierda4">
      <i class="left4 fal fa-chevron-double-left"></i>
    </div>

    <div class="flechaderecha4">
      <i class="right4 fal fa-chevron-double-right"></i>
    </div>
  </div>
  </div>
@endsection

@section('8')
  <div class="seccioncontenedor">

  <div class="seccionisquierda">
    <ul>
      <li>
        <a href="#">
          <img src="upload/seccion/seccion01.webp" alt="">
          <h1>Calefacción eléctrica</h1>
          <p>20% OFF</p>
        </a>
      </li>
      <div class="espacio"></div>
      <li>
        <a href="#">
          <img src="upload/seccion/seccion02.webp" alt="">
          <h1>Estufas a gas</h1>
          <p>5% OFF</p>
        </a>
      </li>
    </ul>
  </div>

  <div class="seccioncentro">
    <a href="#">
      <img src="upload/seccion/seccion05.webp" alt="">
      <h1>Abriga tu hogar</h1>
      <h3>Aprobecha la liquidacion en Calefacción</h3>
      <a class="vermas" href="#">VER MAS</a>
    </a>
  </div>

  <div class="seccionderecha">
    <ul>
      <li>
        <a href="#">
          <img src="upload/seccion/seccion03.webp" alt="">
          <h1>Termotanques</h1>
          <p>10% OFF</p>
        </a>
      </li>
      <div class="espacio"></div>
      <li>
        <a href="#">
          <img src="upload/seccion/seccion04.webp" alt="">
          <h1>Aires</h1>
          <p>10% OFF</p>
        </a>
      </li>
    </ul>
  </div>

  </div>
@endsection

@section('9')
  <div class="slider5contenedor">
  <div class="ofertas3">
    <h1>OFERTAS</h1>
    <p>DE</p>
    <h3>CELULARES</h3>
    <p class="botonvermas3"><a href="#">VER MAS</a></p>
  </div>
  <div class="slider5">
    <ul>
      <li>
        <a href="#">
        <h1>Smart TV Philips 43</h1>
        <img src="upload/slider5/slider5-01.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$22.999</p>
        </a>
      </li>

      <li>
        <a href="#">
        <h1>Samsung Galaxy A10</h1>
        <img src="upload/slider5/slider5-02.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$10.999</p>
        </a>
      </li>

      <li>
        <a href="#">
        <h1>Heladera con Freezer</h1>
        <img src="upload/slider5/slider5-03.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$21.999</p>
        </a>
      </li>

      <li>
        <a href="#">
        <h1>Lavarropas Automático</h1>
        <img src="upload/slider5/slider5-04.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$22.499</p>
        </a>
      </li>

      <li>
        <a href="#">
        <h1>Smart TV HITACHI 32</h1>
        <img src="upload/slider5/slider5-05.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$14.999</p>
        </a>
      </li>

      <li>
        <a href="#">
        <h1>Cafetera Oster</h1>
        <img src="upload/slider5/slider5-06.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$3.299</p>
        </a>
      </li>

      <li>
        <a href="#">
        <h1>Aspiradora Samsung</h1>
        <img src="upload/slider5/slider5-07.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$8.299</p>
        </a>
      </li>

      <li>
        <a href="#">
        <h1>Silla de Plástico</h1>
        <img src="upload/slider5/slider5-08.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$5.999</p>
        </a>
      </li>
    </ul>

    <div class="flechaisquierda5">
      <i class="left5 fal fa-chevron-double-left"></i>
    </div>

    <div class="flechaderecha5">
      <i class="right5 fal fa-chevron-double-right"></i>
    </div>
  </div>
  </div>
@endsection

@section('10')
  <div class="seccioncontenedor2">

  <div class="seccionisquierda2">
        <a href="#">
          <img src="upload/seccion2/seccion2-01.webp" alt="">
          <h1>Aliados de la Cocina</h1>
          <h3>Todo Para tus Recetas Favoritas</h3>
        </a>
        <a class="seccion2vermas" href="#">Ver Mas</a>
  </div>

  <div class="seccioncentro2">
    <ul>
      <li>
        <a href="#">
          <img src="upload/seccion2/seccion2-02.webp" alt="">
          <h1>Pequeños Electros</h1>
          <h3>44% OFF</h3>
        </a>
      </li>

      <li>
        <a href="#">
          <img src="upload/seccion2/seccion2-03.webp" alt="">
          <h1>Hornos y Microondas</h1>
          <h3>22% OFF</h3>
        </a>
      </li>

      <li>
        <a href="#">
          <img src="upload/seccion2/seccion2-04.webp" alt="">
          <h1>Muebles de Cocina</h1>
          <h3>59% OFF</h3>
        </a>
      </li>
    </ul>
  </div>

  <div class="seccionderecha2">
    <h1>Ofertas Destacadas</h1>
    <ul>
      <li>
        <a href="#">
          <img src="upload/seccion2/seccion2-05.webp" alt="">
          <h1>Heladera Columbia</h1>
          <p>$2.999</p>
        </a>
      </li>

      <li>
        <a href="#">
          <img src="upload/seccion2/seccion2-06.webp" alt="">
          <h1>Pava Electrica</h1>
          <p>$5.999</p>
        </a>
      </li>

      <li>
        <a href="#">
          <img src="upload/seccion2/seccion2-07.webp" alt="">
          <h1>Microondas Philips</h1>
          <p>$3.999</p>
        </a>
      </li>

      <li>
        <a href="#">
          <img src="upload/seccion2/seccion2-08.webp" alt="">
          <h1>Prosesadora Manual</h1>
          <p>$1.199</p>
        </a>
      </li>
    </ul>
    <a class="seccion2vermas2" href="#">Ver Mas</a>
  </div>

  </div>
@endsection

@section('11')
  <div class="slider6contenedor">
  <div class="ofertas4">
    <h1>OFERTAS</h1>
    <p>DE</p>
    <h3>CAFETERAS</h3>
    <p class="botonvermas4"><a href="#">VER MAS</a></p>
  </div>
  <div class="slider6">
    <ul>
      <li>
        <a href="#">
        <h1>Smart TV Philips 43</h1>
        <img src="upload/slider6/slider6-01.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$22.999</p>
        </a>
      </li>

      <li>
        <a href="#">
        <h1>Samsung Galaxy A10</h1>
        <img src="upload/slider6/slider6-02.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$10.999</p>
        </a>
      </li>

      <li>
        <a href="#">
        <h1>Heladera con Freezer</h1>
        <img src="upload/slider6/slider6-03.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$21.999</p>
        </a>
      </li>

      <li>
        <a href="#">
        <h1>Lavarropas Automático</h1>
        <img src="upload/slider6/slider6-04.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$22.499</p>
        </a>
      </li>

      <li>
        <a href="#">
        <h1>Smart TV HITACHI 32</h1>
        <img src="upload/slider6/slider6-05.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$14.999</p>
        </a>
      </li>

      <li>
        <a href="#">
        <h1>Cafetera Oster</h1>
        <img src="upload/slider6/slider6-06.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$3.299</p>
        </a>
      </li>

      <li>
        <a href="#">
        <h1>Aspiradora Samsung</h1>
        <img src="upload/slider6/slider6-07.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$8.299</p>
        </a>
      </li>

      <li>
        <a href="#">
        <h1>Silla de Plástico</h1>
        <img src="upload/slider6/slider6-08.webp" alt="">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <p>$5.999</p>
        </a>
      </li>
    </ul>

    <div class="flechaisquierda6">
      <i class="left6 fal fa-chevron-double-left"></i>
    </div>

    <div class="flechaderecha6">
      <i class="right6 fal fa-chevron-double-right"></i>
    </div>
  </div>
  </div>
@endsection

@section('12')
  <div class="seccioncontenedor3">
  <h1>Ofertas destacadas y novedades</h1>

  <ul>
    <li>
      <a href="#">
      <img src="upload/seccion4/seccion4-01.webp" alt="">
      <h2>Cuidado Personal</h2>
      <p>Hasta 46% OFF</p>
      </a>
    </li>

    <li>
      <a href="#">
      <img src="upload/seccion4/seccion4-02.webp" alt="">
      <h2>Herramientas</h2>
      <p>Hasta 46% OFF</p>
      </a>
    </li>

    <li>
      <a href="#">
      <img src="upload/seccion4/seccion4-03.webp" alt="">
      <h2>Accesorios</h2>
      <p>Hasta 46% OFF</p>
      </a>
    </li>

    <li>
      <a href="#">
      <img src="upload/seccion4/seccion4-04.webp" alt="">
      <h2>Limpieza</h2>
      <p>Hasta 50% OFF</p>
      </a>
    </li>
  </ul>
  </div>
@endsection

@section('13')
  <div class="banner2">
    <img src="upload/banner2.webp" alt="">
  </div>
@endsection

@section('14')
  <div class="slider8">
    <ul>
      <li>
        <a href="#">
        <img src="upload/slider8/slider8-01.webp" alt="">
        <h1>Televisores</h1>
        <h2>Hasta 25% OFF</h2>
        </a>
      </li>

      <li>
        <a href="#">
        <img src="upload/slider8/slider8-02.webp" alt="">
        <h1>Aires y Calefacción</h1>
        <h2>Hasta 20% OFF</h2>
        </a>
      </li>

      <li>
        <a href="#">
        <img src="upload/slider8/slider8-03.webp" alt="">
        <h1>Heladeras y Freezers</h1>
        <h2>Hasta 33% OFF</h2>
        </a>
      </li>

      <li>
        <a href="#">
        <img src="upload/slider8/slider8-04.webp" alt="">
        <h1>Lavado</h1>
        <h2>Hasta 33% OFF</h2>
        </a>
      </li>

      <li>
        <a href="#">
        <img src="upload/slider8/slider8-05.webp" alt="">
        <h1>Celulares</h1>
        <h2>Hasta 25% OFF</h2>
        </a>
      </li>

      <li>
        <a href="#">
        <img src="upload/slider8/slider8-06.webp" alt="">
        <h1>Pequeños Electro</h1>
        <h2>Hasta 33% OFF</h2>
        </a>
      </li>

      <li>
        <a href="#">
        <img src="upload/slider8/slider8-01.webp" alt="">
        <h1>Televisores</h1>
        <h2>Hasta 25% OFF</h2>
        </a>
      </li>

      <li>
        <a href="#">
        <img src="upload/slider8/slider8-02.webp" alt="">
        <h1>Aires y Calefacción</h1>
        <h2>Hasta 20% OFF</h2>
        </a>
      </li>

      <li>
        <a href="#">
        <img src="upload/slider8/slider8-03.webp" alt="">
        <h1>Heladeras y Freezers</h1>
        <h2>Hasta 33% OFF</h2>
        </a>
      </li>

      <li>
        <a href="#">
        <img src="upload/slider8/slider8-04.webp" alt="">
        <h1>Lavado</h1>
        <h2>Hasta 33% OFF</h2>
        </a>
      </li>

      <li>
        <a href="#">
        <img src="upload/slider8/slider8-05.webp" alt="">
        <h1>Celulares</h1>
        <h2>Hasta 25% OFF</h2>
        </a>
      </li>

      <li>
        <a href="#">
        <img src="upload/slider8/slider8-06.webp" alt="">
        <h1>Pequeños Electro</h1>
        <h2>Hasta 33% OFF</h2>
        </a>
      </li>
    </ul>

      <div class="flechaisquierda8">
        <div class="fondoflecha8">
        <i class="left8 fal fa-chevron-double-left"></i>
        </div>
      </div>

      <div class="flechaderecha8">
        <div class="fondoflecha8">
        <i class="right8 fal fa-chevron-double-right"></i>
        </div>
      </div>

  </div>
@endsection
