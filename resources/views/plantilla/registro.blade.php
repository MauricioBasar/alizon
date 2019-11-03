<div class="registro">

  <div class="registroprimeraparte">
<form action="#" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="iconoregistrocerrar"><i class="fal fa-window-close"></i></div>
  <h1 class="titulo">REGISTRATE</h1>
 <ul>
    <li>
      <label for="nombre">Nombre</label>
      <input class="bordenombre" type="text" name="nombre" value="{{old("nombre")}}">
      <span class="mensajeerrornombre">
        @if ($metodoparatraerregistro)
          @if ($errors->get("nombre"))
            <style>.bordenombre{ {{$borderojo}} }.mensajeerrornombre{ {{$errorestilos}} }</style>
            @foreach ($errors->get("nombre") as $error)
              {{$error}}
              </br>
            @endforeach
            @else
              <style>.bordenombre{ {{$bordeverde}} }</style>
          @endif
        @endif
      </span>
    </li>

    <li>
      <label for="apellido">Apellido</label>
      <input class="bordeapellido" type="text" name="apellido" value="{{old("apellido")}}">
      <span class="mensajeerrorapellido">
        @if ($metodoparatraerregistro)
          @if ($errors->get("apellido"))
            <style>.bordeapellido{ {{$borderojo}} }.mensajeerrorapellido{ {{$errorestilos}} }</style>
            @foreach ($errors->get("apellido") as $error)
              {{$error}}
              </br>
            @endforeach
            @else
              <style>.bordeapellido{ {{$bordeverde}} }</style>
          @endif
        @endif
      </span>
    </li>

    <li>
      <label for="email">Email</label>
      <input class="bordeemail" type="text" name="email" value="{{old("email")}}">
      <span class="mensajeerroremail">
        @if ($metodoparatraerregistro)
          @if ($errors->get("email"))
            <style>.bordeemail{ {{$borderojo}} }.mensajeerroremail{ {{$errorestilos}} }</style>
            @foreach ($errors->get("email") as $error)
              {{$error}}
              </br>
            @endforeach
            @else
              <style>.bordeemail{ {{$bordeverde}} }</style>
          @endif
        @endif
      </span>
    </li>

    <li>
      <label for="contraseña">Contraseña</label>
      <input class="bordecontrasena" type="password" name="contrasena" value="{{old("contrasena")}}">
      <span class="mensajeerrorcontrasena">
        @if ($metodoparatraerregistro)
          @if ($errors->get("contrasena"))
            <style>.bordecontrasena{ {{$borderojo}} }.mensajeerrorcontrasena{ {{$errorestilos}} }</style>
            @foreach ($errors->get("contrasena") as $error)
              {{$error}}
              </br>
            @endforeach
            @else
              <style>.bordecontrasena{ {{$bordeverde}} }</style>
          @endif
        @endif
      </span>
    </li>

    <li>
      <label for="contraseña">Repetir Contraseña</label>
      <input class="bordecontrasena2" type="password" name="contrasena2" value="{{old("contrasena2")}}">
      <span class="mensajeerrorcontrasena2">
        @if ($metodoparatraerregistro)
          @if ($errors->get("contrasena2"))
            <style>.bordecontrasena2{ {{$borderojo}} }.mensajeerrorcontrasena2{ {{$errorestilos}} }</style>
            @foreach ($errors->get("contrasena2") as $error)
              {{$error}}
              </br>
            @endforeach
            @else
              <style>.bordecontrasena2{ {{$bordeverde}} }</style>
          @endif
        @endif
      </span>
    </li>

    <li>
      <label for="foto">Carga una foto de perfil (Obligatorio)</label>
      <input class="bordefoto" type="file" name="foto">
      <span class="mensajeerrorfoto">
        @if ($metodoparatraerregistro)
          @if ($errors->get("foto"))
            <style>.bordefoto{ {{$borderojo}} }.mensajeerrorfoto{ {{$errorestilos}} }</style>
            @foreach ($errors->get("foto") as $error)
              {{$error}}
              </br>
            @endforeach
            @else
              <style>.bordefoto{ {{$bordeverde}} }</style>
          @endif
        @endif
      </span>
    </li>

    <button type="submit" name="submit">CREAR CUENTA</button>
  </ul>
 </form>

<button class="segundo" type="button" name="button">REGISTRATE CON FACEBOOK</button>
</div>

<div class="registrasegundaparte">
 <img src="img/registro.svg" alt="registro.svg">

  <h1>Que podes hacer en tu cuenta?</h1>

      <ul>
        <li>
            <p><span> ✓ </span>Consultar el estado de tus compras.</p>
         </li>

         <li>
            <p> <span> ✓ </span>Administrar tus productos favoritos.</p>
         </li>

         <li>
            <p><span> ✓ </span>Descargar las facturas.</p>
         </li>

         <li>
            <p><span> ✓ </span>Definir tus preferencias e intereses.</p>
         </li>

         <li>
            <p><span> ✓ </span>Retomar tus compras incompletas.</p>
         </li>
       </ul>
     </div>
</div>
