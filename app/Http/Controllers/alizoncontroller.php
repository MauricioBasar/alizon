<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\usuario;
use App\producto;
use App\sliderprincipal;
use App\calificacion;
use App\categoria;
use App\subcategoria;
use App\oferta;
use App\marca;
use App\favorito;
use Session;
use DB;

class alizoncontroller extends Controller
{


    public function index(){
      $sliderprincipal = sliderprincipal::all();
      $contador = $sliderprincipal->count() - 3;
      $sliderprincipal = $sliderprincipal->random($contador);

      $categorias = categoria::select('*')->orderBy('id', 'desc')->get();

      $sliderultimosproductos = DB::table('productos')->orderBy('id', 'desc')->take(24)->get();

      $variablesacompartir = compact("sliderprincipal", "sliderultimosproductos", "categorias");
      return view("index", $variablesacompartir);
    }

    public function productos(){
      $sliderprincipal = sliderprincipal::all();
      $contador = $sliderprincipal->count() - 4;
      $sliderprincipal = $sliderprincipal->random($contador);

      $categorias = categoria::select('*')->orderBy('id', 'desc')->get();

      $productos = producto::select('*')->orderBy('id', 'desc')->paginate(12);
      $subcategorias = subcategoria::select('*')->orderBy('id', 'desc')->get();
      $marcas = marca::select('*')->orderBy('id', 'desc')->get();

      $variablesacompartir = compact("sliderprincipal", "productos", "subcategorias", "marcas", "categorias");
      return view("productos", $variablesacompartir);
    }

    public function productoid($id){
      $producto = producto::find("$id");
      $categorias = categoria::select('*')->orderBy('id', 'desc')->get();
      $subcategorias = subcategoria::select('*')->orderBy('id', 'desc')->get();
      $marcas = marca::select('*')->orderBy('id', 'desc')->get();

      $variablesacompartir = compact("producto", "categorias", "subcategorias", "marcas");
      return view("producto", $variablesacompartir);
    }

    public function cerrarsesion(){
      Session::flush();
      return redirect("/");
    }

    public function registro(request $post){

      $consulta = usuario::all();

      $validaciones = [
        "nombre" => "required|min:3|max:45",
        "apellido" => "required|min:3|max:45",
        "email" => "required|email:filter|unique:usuarios,email|max:70",
        "contrasena" => "required|min:8|max:12",
        "contrasena2" => "required|same:contrasena",
        "foto" => "required|image",
      ];

      $mensajes = [
        "required" => "El :attribute se encuentra vacio",
        "contrasena.required" => "Ingresa una contraseña",
        "contrasena.min" => "La contraseña tiene menos de :min caracteres",
        "contrasena.max" => "La contraseña tiene mas de :max caracteres",
        "contrasena2.required" => "Por favor repite la contraseña",
        "min" => "El :attribute tiene menos de :min caracteres",
        "max" => "El :attribute tiene mas de :max caracteres",
        "email" => "El :attribute no tiene el formato correcto",
        "unique" => "El :attribute ya se encuentra registrado",
        "contrasena2.same" => "Las contraseñas no coinciden",
        "foto.required" => "Por favor carga una foto",
        "image" => "La extencion es incorrecta",
      ];

      $this->validate($post, $validaciones, $mensajes);

      $contrasenahasheada = password_hash($post["contrasena"], PASSWORD_DEFAULT);
      $ruta = $post->file('foto')->store('public/fotos');
      $foto = basename($ruta);

      $usuario = new usuario();

      $usuario->nombre = $post["nombre"];
      $usuario->apellido = $post["apellido"];
      $usuario->email = $post["email"];
      $usuario->contrasena = $contrasenahasheada;
      $usuario->foto = $foto;
      if ($consulta->all()) {
        $usuario->tipodeusuario = "normal";
      }else {
        $usuario->tipodeusuario = "administrador";
      }

      $usuario->save();


      return redirect("/");
    }

    public function sesion(request $post){
      $emaillogin = $post["emaillogin"];
      $contrasenalogin = $post["contrasenalogin"];
      $recordarusuario = $post["recordarusuario"];

      $usuariologin = usuario::where("email", "$emaillogin")->get();

      if ($usuariologin->all() == null) {
        return back()->withErrors(['emaillogin' => 'Los datos ingresados no son correctos']);
      }else {
        foreach ($usuariologin as $usuario) {
          if (password_verify($contrasenalogin, $usuario->contrasena) == false) {
            return back()->withErrors(['contrasenalogin' => 'Los datos ingresados no son correctos']);
          }else {
            session()->put("nombre", "$usuario->nombre");
            session()->put("apellido", "$usuario->apellido");
            session()->put("email", "$usuario->email");
            session()->put("foto", "$usuario->foto");
            session()->put("tipodeusuario", "$usuario->tipodeusuario");

            if ($recordarusuario) {
              setcookie("emaillogin",$emaillogin,time()+3600);
              setcookie("contrasenalogin",$contrasenalogin,time()+3600);
            }

            if (session()->get("tipodeusuario") === "administrador") {
              return redirect("/gestor");
            }else {
              return redirect("/");
            }
          }
        }
      }

    }

    public function ofertas(){
      $sliderprincipal = sliderprincipal::all();
      $contador = $sliderprincipal->count() - 2;
      $sliderprincipal = $sliderprincipal->random($contador);

      $categorias = categoria::select('*')->orderBy('id', 'desc')->get();

      $productos = producto::select('*')->where("oferta_id", '>', 3)->orderBy('id', 'desc')->paginate(12);
      $subcategorias = subcategoria::select('*')->orderBy('id', 'desc')->get();
      $marcas = marca::select('*')->orderBy('id', 'desc')->get();

      $variablesacompartir = compact("sliderprincipal", "subcategorias", "marcas", "productos", "categorias");
      return view("productos", $variablesacompartir);
    }

    public function centrodeayuda(){
      $categorias = categoria::select('*')->orderBy('id', 'desc')->get();


      $variablesacompartir = compact("categorias");
      return view("centrodeayuda", $variablesacompartir);
    }


    public function gestor(){
      return view("admin/gestor");
    }

    public function gestorofertas(){
      return view("admin/ofertas");
    }

    public function gestorofertaspost(request $post){

      $validaciones = [
        "ofertas" => "required|integer",
      ];

      $mensajes = [
        "required" => "Por favor carga el nombre de la oferta",
        "integer" => "Por favor ingresa un numero entero",
      ];

      $this->validate($post, $validaciones, $mensajes);

      $ofertanueva = new oferta();
      $ofertanueva->oferta = $post["ofertas"];
      $ofertanueva->save();

      return back();
    }

    public function gestormarcas(){
      return view("admin/marcas");
    }

    public function gestormarcaspost(request $post){

      $validaciones = [
        "marcas" => "required|string|max:30",
      ];

      $mensajes = [
        "required" => "Por favor carga el nombre de la marca",
        "string" => "el formato no es un texto",
        "max" => "el nombre de la categoria es muy largo :max",
      ];

      $this->validate($post, $validaciones, $mensajes);

      $marcanueva = new marca();
      $marcanueva->marca = $post["marcas"];
      $marcanueva->save();

      return back();
    }

    public function gestorcategorias(){
      return view("admin/categorias");
    }

    public function gestorcategoriaspost(request $post){

      $validaciones = [
        "categorias" => "required|string|max:35",
      ];

      $mensajes = [
        "required" => "Por favor carga el nombre de la categoria",
        "string" => "el formato no es un texto",
        "max" => "el nombre de la categoria es muy largo :max",
      ];

      $this->validate($post, $validaciones, $mensajes);

      $categorianueva = new categoria();
      $categorianueva->categoria = $post["categorias"];
      $categorianueva->save();

      return back();
    }

    public function gestorsubcategorias(){
      $categorias = categoria::all();

      $variablesacompartir = compact("categorias");

      return view("admin/subcategorias", $variablesacompartir);
    }

    public function gestorsubcategoriaspost(request $post){

      $validaciones = [
        "categorias" => "required",
        "subcategorias" => "required|string|max:35",
      ];

      $mensajes = [
        "required" => "Por favor carga el nombre de la :attribute",
        "string" => "el formato no es un texto",
        "max" => "el nombre de la categoria es muy largo :max",
      ];

      $this->validate($post, $validaciones, $mensajes);

      $subcategorianueva = new subcategoria();
      $subcategorianueva->subcategoria = $post["subcategorias"];
      $subcategorianueva->categoria_id = $post["categorias"];
      $subcategorianueva->save();

      return back();
    }

    public function gestorcalificaciones(){
      return view("admin/calificaciones");
    }

    public function gestorcalificacionespost(request $post){

      $validaciones = [
        "calificaciones" => "required|integer",
      ];

      $mensajes = [
        "required" => "Por favor carga el numero de calificacion",
        "integer" => "Por favor ingresa un numero entero",
      ];

      $this->validate($post, $validaciones, $mensajes);

      $calificacionnueva = new calificacion();
      $calificacionnueva->calificacion = $post["calificaciones"];
      $calificacionnueva->save();

      return back();
    }

    public function gestorproductos(){
      $calificaciones = calificacion::all();
      $categorias = categoria::all();
      $subcategorias = subcategoria::all();
      $marcas = marca::all();
      $ofertas = oferta::all();

      $variablesacompartir = compact("calificaciones", "categorias", "subcategorias", "marcas", "ofertas");
      return view("admin/productos", $variablesacompartir);
    }

    public function gestorproductospost(request $post){

      $validaciones = [
        "cuota" => "required",
        "calificacion" => "required",
        "oferta" => "required",
        "marca" => "required",
        "subcategoria" => "required",
        "categoria" => "required",
        "titulo" => "required|min:3|max:71",
        "precio" => "required|numeric",
        "imagen" => "required|image",
        "imagen2" => "required|image",
        "imagen3" => "required|image",
        "imagen4" => "required|image",
        "imagen5" => "required|image",
        "minidescripcion" => "required|min:3|max:153",
        "descripcion" => "required|min:3|max:500",
      ];

      $mensajes = [
        "cuota.required" => "Por favor selecciona la cantidad de cuotas",
        "calificacion.required" => "Por favor selecciona la calificacion",
        "oferta.required" => "Por favor selecciona una oferta",
        "marca.required" => "Por favor selecciona la marca del producto",
        "categoria.required" => "Por favor selecciona la categoria del producto",
        "subcategoria.required" => "Por favor selecciona la subcategoria a la que pertenece el producto",
        "titulo.required" => "Por favor ingresa un titulo",
        "titulo.min" => "El titulo del producto es muy corto",
        "titulo.max" => "El titulo del producto es muy largo",
        "precio.required" => "Por favor ingresa el precio del producto",
        "numeric" => "El precio tiene que ser en formato decimal",
        "imagen.required" => "Por favor carga la primera imagen",
        "imagen2.required" => "Por favor carga la segunda imagen",
        "imagen3.required" => "Por favor carga la tercera imagen",
        "imagen4.required" => "Por favor carga la cuarta imagen",
        "imagen5.required" => "Por favor carga la quinta imagen",
        "imagen.image" => "La extencion de la primera imagen es incorrecta",
        "imagen2.image" => "La extencion de la segunda imagen es incorrecta",
        "imagen3.image" => "La extencion de la tercera imagen es incorrecta",
        "imagen4.image" => "La extencion de la cuarta imagen es incorrecta",
        "imagen5.image" => "La extencion de la quinta imagen es incorrecta",
        "minidescripcion.required" => "Por favor Ingresa algo en la minidescripcion",
        "minidescripcion.min" => "La minidescripcion es muy corta",
        "minidescripcion.max" => "La minidescripcion es muy larga",
        "descripcion.required" => "Por favor Ingresa algo en la descripcion",
        "descripcion.min" => "La descripcion es muy corta",
        "descripcion.max" => "La descripcion es muy larga",
      ];

      $this->validate($post, $validaciones, $mensajes);

      $ruta = $post->file('imagen')->store('public/productos');
      $imagen = basename($ruta);

      $ruta2 = $post->file('imagen2')->store('public/productos');
      $imagen2 = basename($ruta2);

      $ruta3 = $post->file('imagen3')->store('public/productos');
      $imagen3 = basename($ruta3);

      $ruta4 = $post->file('imagen4')->store('public/productos');
      $imagen4 = basename($ruta4);

      $ruta5 = $post->file('imagen5')->store('public/productos');
      $imagen5 = basename($ruta5);

      $productonuevo = new producto();
      $productonuevo->titulo = $post["titulo"];
      $productonuevo->precio = $post["precio"];
      $productonuevo->cuota = $post["cuota"];
      $productonuevo->imagen = $imagen;
      $productonuevo->imagen2 = $imagen2;
      $productonuevo->imagen3 = $imagen3;
      $productonuevo->imagen4 = $imagen4;
      $productonuevo->imagen5 = $imagen5;
      $productonuevo->minidescripcion = $post["minidescripcion"];
      $productonuevo->descripcion = $post["descripcion"];
      $productonuevo->categoria_id = $post["categoria"];
      $productonuevo->subcategoria_id = $post["subcategoria"];
      $productonuevo->marca_id = $post["marca"];
      $productonuevo->oferta_id = $post["oferta"];
      $productonuevo->Calificacion_id = $post["calificacion"];
      $productonuevo->save();

      return back();
    }

    public function gestorsliderprincipal(){
      return view("admin/sliderprincipal");
    }

    public function gestorsliderprincipalpost(request $post){

      $validaciones = [
        "imagen" => "required|image",
      ];

      $mensajes = [
        "required" => "Por favor carga una imagen",
        "image" => "La extencion es incorrecta",
      ];

      $this->validate($post, $validaciones, $mensajes);

      $ruta = $post->file('imagen')->store('public/sliderprincipal');
      $imagen = basename($ruta);

      $nuevaimagen = new sliderprincipal();
      $nuevaimagen->imagen = $imagen;
      $nuevaimagen->save();

      return back();
    }








}
