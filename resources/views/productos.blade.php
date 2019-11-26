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
  <div class="articulosymenuizquierdo">
  <div class="menuizquierdo">
    <aside>
      <div class="categorias">
        <h3>Categorías</h3>
        <ul>
          @foreach ($subcategorias as $subcategoria)
            <li><a href="#">{{$subcategoria->subcategoria}}</a></li>
          @endforeach
        </ul>
      </div>

      <div class="filtrarcategorias">
        <h3>Filtrar por:</h3>
        <h4>Marca</h4>
        <ul>
          @foreach ($marcas as $marca)
            <li><input type="checkbox" name="" value=""><a href="#">{{$marca->marca}}</a></li>
          @endforeach
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
      @foreach ($productos as $producto)
        <article class="articulo">
          <a href="/producto/{{$producto->id}}">
          <div class="cuotayimagen">
          <h2>{{$producto->cuota}} CUOTAS SIN INTERÉS</h2>
          <img src="/storage/productos/{{$producto->imagen}}" alt="">
          </div>
          <div class="tituloyprecio">
          <h1>{{$producto->titulo}}</h1>
          <p>${{$producto->precio}}</p>
          </div>
          </a>
        </article>
      @endforeach
    </section>
  </div>
  </div>
  {{$productos->links()}}
@endsection

@section('4')
  <div class="banner2">
    <img src="upload/banner2.webp" alt="">
  </div>
@endsection
