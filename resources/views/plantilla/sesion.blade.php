<div class="sesion">
    <main>
      <section>
        <div class="iconosesioncerrar"><i class="fal fa-window-close"></i></div>
        <h1>Iniciar Sesion</h1>
        <form class="sesion2" action="/sesion" method="post">
          @csrf
          <ul>

            <li>
              <input type="text" name="emaillogin" placeholder="Ingrese Su Correo" value="@isset($_COOKIE["emaillogin"]){{$_COOKIE["emaillogin"]}}@endisset">
            </li>

            <li>
              <input type="password" name="contrasenalogin" placeholder="Contraseña" value="@isset($_COOKIE["contrasenalogin"]){{$_COOKIE["contrasenalogin"]}}@endisset">
            </li>

            <li>
              @if ($metodoparatraerlogin)
                <style>.mensajeerrorlogin{ {{$errorestiloslogin}} }</style>
                @if ($errors->get("emaillogin"))
                  <span class="mensajeerrorlogin">
                    @foreach ($errors->get("emaillogin") as $error)
                      {{$error}}
                      </br>
                    @endforeach
                  </span>
                @elseif ($errors->get("contrasenalogin"))
                  <span class="mensajeerrorlogin">
                    @foreach ($errors->get("contrasenalogin") as $error)
                      {{$error}}
                      </br>
                    @endforeach
                  </span>
                @endif
              @endif
              </span>
              <button class="enviar" type="submit" name="enviar">Entrar</button>
            </li>

            <li>
              <p><input class="recordar" type="checkbox" name="recordarusuario" value="recordar"><span>Recordar Usuario</span></p>
            </li>
          </ul>
          </form>
          <h2 class="iconoregistroensesion">Registrate</h2>
        </section>
       </main>
  </div>
