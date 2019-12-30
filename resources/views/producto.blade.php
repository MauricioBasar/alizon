@extends('plantilla')

@section('titulo')
  Alizon.com Producto: {{$producto->titulo}}
@endsection

@section('descripcion')
  {{$producto->minidescripcion}}
@endsection

@section('1')
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
      <a href="/marca/{{$producto->marca->id}}" class="marca">Marca: <span>{{$producto->marca->marca}}</span></a>
      <article>
        <h1>{{$producto->titulo}} <span>{{$producto->oferta->oferta}}% OFF</span></h1>
        @if ($producto->calificacion->calificacion == 5)
          <h3>★★★★★</h3>
        @elseif ($producto->calificacion->calificacion == 4)
          <h3>★★★★</h3>
        @elseif ($producto->calificacion->calificacion == 3)
          <h3>★★★</h3>
        @elseif ($producto->calificacion->calificacion == 2)
          <h3>★★</h3>
        @elseif ($producto->calificacion->calificacion == 1)
          <h3>★</h3>
        @endif
        <div class="categoriasubcategoria">
          <a href="/categoria/{{$producto->categoria->id}}"><p>Categoria: <span>{{$producto->categoria->categoria}}</span></p></a>
          <a href="/subcategoria/{{$producto->subcategoria->id}}"><p>Subcategoria: <span>{{$producto->subcategoria->subcategoria}}</span></p></a>
        </div>

        <div class="imagenesyseccioncarrito">
        <div class="imagenes">
          <ul>
            <li class="imagengrande"><img src="/storage/productos/{{$producto->imagen}}" alt="" ></li>
            <li class="miniimagenes">
              <ul>
              <li><img src="/storage/productos/{{$producto->imagen2}}" alt=""></li>
              <li><img src="/storage/productos/{{$producto->imagen3}}" alt=""></li>
             </ul>
             <ul>
               <li><img src="/storage/productos/{{$producto->imagen4}}" alt=""></li>
               <li><img src="/storage/productos/{{$producto->imagen5}}" alt=""></li>
             </ul>
            </li>
          </ul>
        </div>

        <div class="seccioncarrito">
          <ul>
            <li><p>Precio <span>${{$producto->precio}}</span></p></li>
            <li><p>{{$producto->cuota}} Cuotas</p></li>
            <li class="botoncarrito"><a href="/carrito/"><p>Agregar Al Carrito</p></a></li>
          </ul>
        </div>
        </div>

        <div class="descripcioncompleta">
          <p><strong>{{$producto->titulo}}</strong>: {{$producto->descripcion}}</p>
        </div>
      </article>
    </section>
  </div>
  </div>
@endsection
