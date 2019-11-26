<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class calificacion extends Model
{
  public $table = "calificaciones";
  public $guarded = [];

  public function productos(){
    return $this->hasMany('App\producto', 'calificacion_id');
  }
}
