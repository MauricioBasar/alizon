@extends('plantilla')

@section('titulo')
  Alizon.com Las Mejores Ofertas del Mes
@endsection

@section('descripcion')
  Las Mejores Ofertas del Mes De Las Mejores Marcas Solo En Alizon.Com. Comprá en 12 y 18 Cuotas s/Interés. Entrega Inmediata. Envíos a Todo el Pais...
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
  <div class="articulosymenuizquierdo">
  <div class="menuizquierdo">
    <aside>
      <div class="categorias">
        <h3>Categorías</h3>
        <ul>
          <li><a href="#">TV LED y Smart TV</a></li>
          <li><a href="#">Celulares Libres</a></li>
          <li><a href="#">Tablets</a></li>
          <li><a href="#">Auriculares para Celulares</a></li>
          <li><a href="#">Aires Acondicionados Split</a></li>
          <li><a href="#">Calefacción Eléctrica </a></li>
          <li><a href="#">Pavas Eléctricas</a></li>
          <li><a href="#">Procesadoras</a></li>
          <li><a href="#">Batidoras</a></li>
          <li><a href="#">Lavarropas</a></li>
          <li><a href="#">Cocinas</a></li>
          <li><a href="#">Microondas</a></li>
          <li><a href="#">Purificadores</a></li>
          <li><a href="#">Heladeras con Freezer</a></li>
          <li><a href="#">Corta Barbas</a></li>
          <li><a href="#">Depiladoras</a></li>
          <li><a href="#">Secadores de cabellos</a></li>
          <li><a href="#">Masajeadores</a></li>
          <li><a href="#">Despenseros</a></li>
          <li><a href="#">Sillas y Banquetas</a></li>
          <li><a href="#">Bibliotecas</a></li>
          <li><a href="#">Sillas para Living</a></li>
          <li><a href="#">Bibliotecas</a></li>
          <li><a href="#">Cajoneras y Chifonniers</a></li>
          <li><a href="#">Respaldos de Cama</a></li>
          <li><a href="#">Colchones</a></li>
          <li><a href="#">Colchones + Sommiers</a></li>
          <li><a href="#">Despenseros</a></li>
          <li><a href="#">Escurridores</a></li>
          <li><a href="#">Corta Barbas</a></li>
          <li><a href="#">Depiladoras</a></li>
          <li><a href="#">Secadores</a></li>
          <li><a href="#">Masajeadores</a></li>
          <li><a href="#">Bicicletas Fijas y Spinning</a></li>
        </ul>
      </div>

      <div class="filtrarcategorias">
        <h3>Filtrar por:</h3>
        <h4>Marca</h4>
        <ul>
          <li><input type="checkbox" name="" value=""><a href="#">Philips</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">Centro Estant</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">Samsung</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">Conventry</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">Drean</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">Arco Iris</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">Bellissima</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">LG</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">Motorola</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">Athletic</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">Atma</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">Axel</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">BGH Quick Chef</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">Caliber</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">EXO</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">Gafa</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">Garden Life</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">Liv Home</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">Luxman</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">Solana</a></li>
        </ul>
      </div>

      <div class="filtrarportarjetas">
        <h3>Cuotas sin Interes</h3>
        <ul>
          <li><input type="checkbox" name="" value=""><a href="#">Mastercard 6 cuotas</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">Visa 6 cuotas</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">Mastercard 3 cuotas</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">Visa 3 cuotas</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">Mastercard 12 cuotas</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">Visa 12 cuotas</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">Mastercard 18 cuotas</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">Visa 18 cuotas</a></li>
        </ul>
      </div>


      <div class="filtrarporpromociones">
        <h3>Promociones</h3>
        <ul>
          <li><input type="checkbox" name="" value=""><a href="#">Envio Gratis</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">Cupon - COD:SUPER10</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">Bonificacion</a></li>
        </ul>
      </div>

      <div class="filtrarpordescuentos">
        <h3>Descuento</h3>
        <ul>
          <li><input type="checkbox" name="" value=""><a href="#">Desde 10% off</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">Desde 20% off</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">Desde 30% off</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">Desde 40% off</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">Desde 50% off</a></li>
        </ul>
      </div>

      <div class="precio">
        <h3>Precio</h3>
        <ul>
          <li><input type="range" name="precio" min="749" max="59999" step="1" value="100"></li>

          <li>
           <ul>
            <li>
              <p>Desde $</p>
              <input type="text" name="preciodesde" value="" placeholder="749">
            </li>

            <li>
              <p>Hasta $</p>
              <input type="text" name="preciohasta" value="" placeholder="59999">
            </li>

            <li>
              <button type="button" name="button">></button>
            </li>
           </ul>
          </li>

        </ul>
      </div>

      <div class="calificaciones">
        <h3>Calificaciones</h3>
        <ul>
          <li><input type="checkbox" name="" value=""><a href="#">★★★★★ 5</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">★★★★ 4 o más</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">★★★ 3 o más</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">★★ 2 o más</a></li>
          <li><input type="checkbox" name="" value=""><a href="#">★ 1 o más</a></li>
        </ul>
      </div>

    </aside>
  </div>

  <div class="articulos">
    <section>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider2/slider2-01.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider2/slider2-02.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider2/slider2-03.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider2/slider2-04.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider2/slider2-05.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider2/slider2-06.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider2/slider2-07.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider2/slider2-08.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider7/slider7-01.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider7/slider7-02.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider7/slider7-03.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider7/slider7-04.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider7/slider7-05.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider7/slider7-06.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider7/slider7-07.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider7/slider7-08.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider7/slider7-09.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider7/slider7-10.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider7/slider7-11.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider7/slider7-12.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider7/slider7-13.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider7/slider7-14.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider7/slider7-15.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider7/slider7-16.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider7/slider7-17.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider7/slider7-18.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider7/slider7-19.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider5/slider5-01.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider5/slider5-02.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider5/slider5-03.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider5/slider5-04.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider5/slider5-05.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider5/slider5-06.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider5/slider5-07.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider5/slider5-08.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>

      <article class="articulo">
        <a href="#">
        <div class="cuotayimagen">
        <h2>12 CUOTAS SIN INTERÉS</h2>
        <img src="upload/slider6/slider6-01.webp" alt="">
        </div>
        <div class="tituloyprecio">
        <h1>Smart TV Philips 43</h1>
        <p>$22.999</p>
        </div>
        </a>
      </article>


    </section>
  </div>
  </div>
@endsection

@section('4')
  <div class="banner2">
    <img src="upload/banner2.webp" alt="">
  </div>
@endsection
