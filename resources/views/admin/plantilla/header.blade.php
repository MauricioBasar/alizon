<div class="gestorheader">
<header>
 <nav>
  <ul>
    <li><a href="/gestor">Gestor Inicio</a></li>
    <li><a href="/">Pagina Principal</a></li>
    <li>
      <details>
        <summary class="mayuscula">Bienvenido, <strong>{{session()->get("nombre"). " " .session()->get("apellido")}}</strong></summary>
        <ul>
          <li class="usuariologinfoto"><img  src="/storage/fotos/{{session()->get("foto")}}" alt="Foto de perfil"></li>
          <li><h3><a href="/cerrarsesion">Cerrar Sesion</a></h3></li>
        </ul>
      </details>
    </li>
  </ul>
 </nav>
</header>
</div>
