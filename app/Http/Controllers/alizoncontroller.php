<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\usuario;

class alizoncontroller extends Controller
{


    public function index(){
      return view("index");
    }

    public function indexpost(request $post){

      $reglas = [
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

      $this->validate($post, $reglas, $mensajes);

      $contrasenahasheada = password_hash($post["contrasena"], PASSWORD_DEFAULT);

      $usuario = new usuario();

      $usuario->nombre = $post["nombre"];
      $usuario->apellido = $post["apellido"];
      $usuario->email = $post["email"];
      $usuario->contrasena = $contrasenahasheada;
      $usuario->foto = "foto.jpg";
      $usuario->tipodeusuario = "normal";

      $usuario->save();


      return view("index");
    }







}
