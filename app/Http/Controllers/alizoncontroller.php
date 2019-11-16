<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\usuario;
use App\sliderprincipal;
use Session;

class alizoncontroller extends Controller
{


    public function index(){
      $sliderprincipal = sliderprincipal::all();
      $contador = $sliderprincipal->count() - 3;
      $sliderprincipal = $sliderprincipal->random($contador);

      $variablesacompartir = compact("sliderprincipal");
      return view("index", $variablesacompartir);
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
      return view("ofertas");
    }

    public function centrodeayuda(){
      return view("centrodeayuda");
    }


    public function gestor(){
      return view("admin/gestor");
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
