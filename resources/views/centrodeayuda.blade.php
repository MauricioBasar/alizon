@extends('plantilla')

@section('titulo')
  Alizon.com Centro de Atención al Cliente
@endsection

@section('descripcion')
  Centro de Atención al Cliente Encontrá Los Mejores Productos De Las Mejores Marcas Solo En Alizon.Com. Envíos a Todo el Pais...
@endsection

@section('1')
  <div class="centrodeayudacontenedor">

    <hgroup>
      <h1>Bienvenido al Centro de Atención al cliente</h1>
      <h2>Lo más consultado</h2>
    </hgroup>

    <div class="lomasconsultado">
    <ul>
      <li><a href="#">Consultar donde se encuentra mi pedido</a></li>
      <li><a href="#">Servicios técnicos oficiales</a></li>
      <li><a href="#">Consultar si ya puedo retirar en sucursal</a></li>
    </ul>
    </div>

    <h2>¿Cómo podemos ayudarte?</h2>

    <div class="centrodeayuda">
     <ul>

        <li>
         <div class="compras">

           <div class="comprasicono">
            <i class="fas fa-shopping-bag"></i>
           </div>

          <h1>COMPRAS</h1>
          <ul>
          <li><a href="#">Tengo un cupón de descuento</a></li>
          <li><a href="#">Conocé los costos de envío</a></li>
          <li><a href="#">¿Mi compra está registrada?</a></li>
          <li><a href="#">¿Cómo comprar en garbarino.com?</a></li>
          <li><a href="#">Promociones y medios de pago</a></li>
          <li><a href="#">Retiro en Sucursal</a></li>
          <li><a href="#">Compré una licencia digital</a></li>
          </ul>
          <a class="masinfo" href="#">MÁS INFORMACIÓN</a>
         </div>
        </li>

        <li>
         <div class="pagos">

           <div class="pagosicono">
            <i class="fas fa-file-invoice-dollar"></i>
           </div>

          <h1>PAGOS Y FACTURACIÓN</h1>
          <ul>
          <li><a href="#">Informar un error en el cobro de mi compra</a></li>
          <li><a href="#">Millas Aerolíneas Plus</a></li>
          <li><a href="#">Solicitar una copia de mi factura</a></li>
          <li><a href="#">Envío de facturas en productos de Garbarino Market</a></li>
          <li><a href="#">Devoluciones en tarjetas de crédito y débito</a></li>
          <li><a href="#">Solicitar una factura A</a></li>
          </ul>
          <a class="masinfo" href="#">MÁS INFORMACIÓN</a>
         </div>
        </li>

        <li>
         <div class="entregas">

           <div class="entregasicono">
            <i class="fas fa-truck-container"></i>
           </div>

          <h1>ENTREGAS</h1>
          <ul>
          <li><a href="#">Autorizar a una persona para recibir envío</a></li>
          <li><a href="#">Plazo para retiro en sucursal</a></li>
          <li><a href="#">Consultar donde se encuentra mi pedido</a></li>
          <li><a href="#">Consultar si ya puedo retirar en sucursal</a></li>
          <li><a href="#">Modificar la fecha de un envío a domicilio</a></li>
          </ul>
          <a class="masinfo" href="#">MÁS INFORMACIÓN</a>
         </div>
        </li>

        <li>
         <div class="sucursales">

           <div class="sucursalesicono">
            <i class="fas fa-store-alt"></i>
           </div>

          <h1>SUCURSALES</h1>
          <ul>
          <li><a href="#">Listados de Sucursales: Días y horarios</a></li>
          </ul>
          <a class="masinfo" href="#">MÁS INFORMACIÓN</a>
         </div>
        </li>

        <li>
         <div class="garantias">

           <div class="garantiasicono">
            <i class="fas fa-cogs"></i>
           </div>

          <h1>GARANTÍAS, SERVICIO TÉCNICO E INSTALACIONES</h1>
          <ul>
          <li><a href="#">Informar demora en la instalación</a></li>
          <li><a href="#">¿Qué es la garantía de reparación?</a></li>
          <li><a href="#">Contratar la instalación de un aire acondicionado</a></li>
          <li><a href="#">¿Qué es Compra segura?</a></li>
          <li><a href="#">Requisitos necesarios para un reclamo de service</a></li>
          <li><a href="#">Servicios técnicos oficiales</a></li>
          </ul>
          <a class="masinfo" href="#">MÁS INFORMACIÓN</a>
         </div>
        </li>

        <li>
         <div class="cambios">

           <div class="cambiosicono">
            <i class="fas fa-exchange-alt"></i>
           </div>

          <h1>CAMBIOS Y DEVOLUCIONES</h1>
          <ul>
          <li><a href="#">Solicitar un cambio de producto</a></li>
          <li><a href="#">¿Tiene algún costo adicional?</a></li>
          <li><a href="#">Políticas y condiciones generales</a></li>
          <li><a href="#">¿Existe un tiempo máximo para solicitar un cambio o devolución?</a></li>
          </ul>
          <a class="masinfo" href="#">MÁS INFORMACIÓN</a>
         </div>
        </li>

      </ul>
      </div>


      <div class="preguntasfrecuentes">

        <div class="preguntas">

          <h1>Preguntas frecuentes</h1>

          <ul>
            <li><a href="#">Compras</a></li>
            <li><a href="#">Pagos y Facturación</a></li>
            <li><a href="#">Retiro y Envío</a></li>
            <li><a href="#">Sucursales</a></li>
            <li><a href="#">Garantía, Servicio Técnico e Instalaciones</a></li>
            <li><a href="#">Crédito Garbarino</a></li>
            <li><a href="#">Garbarino Agente de Seguros</a></li>
            <li><a href="#">Cambios y Devoluciones</a></li>
          </ul>
        </div>

        <div class="preguntasresultado">

          <h1>Pagos y Facturación</h1>

          <details>
            <summary>Quiero cambiar Factura B por A</summary>
            <p>Para solicitar un cambio de factura completá el siguiente formulario.</p>
          </details>

          <details>
            <summary>Informar un error en el cobro de mi compra</summary>
            <p>Para informar un error en el cobro de tu compra completá el siguiente formulario y te estaremos contactando para ayudarte.</p>
          </details>

          <details>
            <summary>Millas Aerolíneas Plus</summary>
            <p>Si tuviste un problema en la acreditación de las millas y querés realizar un reclamo, completá el siguiente formulario. Recordá completar tu número de socio Aerolíneas Plus en el campo “Consulta”.</p>
          </details>

          <details>
            <summary>Envío de facturas en productos de Garbarino Market</summary>
            <p>Si compraste un producto de Garbarino Market, recibirás un e-mail con la factura una vez que la empresa la genere.</p>
          </details>

          <details>
            <summary>Devoluciones en tarjetas de crédito y débito</summary>
            <p>Los tiempos de acreditación pueden demorar entre 72 hs hábiles hasta 10 días corridos, dependiendo la tarjeta que hayas utilizado y contemplando el cierre de tú resumen de cuenta.</p>
          </details>

          <details>
            <summary>Solicitar una factura A</summary>
            <p>Ahora ya podés comprar en Garbarino.com y elegir en el paso 3 de la página de pago que tipo de factura querés, consumidor final o responsable inscripto (factura A).</p>
          </details>
        </div>


      </div>

      <div class="banner3">
      <img src="upload/banner3.webp" alt="">
      </div>



      <div class="contacteconnosotros">

        <hgroup>
          <h1>Contactate con nosotros</h1>
          <h3>Seleccioná una opción</h3>
        </hgroup>

        <ul>


          <li>
            <div class="consultasicono">
              <i class="far fa-binoculars"></i>
            </div>
            <h2>Consultas</h2>
          </li>

          <li>
            <div class="reclamosicono">
              <i class="far fa-comment-exclamation"></i>
            </div>
            <h2>Reclamos</h2>
          </li>

          <li>
            <div class="sugerenciasicono">
              <i class="far fa-mailbox"></i>
            </div>
            <h2>Sugerencias</h2>
          </li>


        </ul>

      </div>


  </div>
@endsection
