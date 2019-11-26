<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class favorito extends Model
{
    public $guarded = [];

    public function producto(){
      return $this->belongsTo('App\producto', 'producto_id');
    }

    public function usuario(){
      return $this->belongsTo('App\usuario', 'usuario_id');
    }
}
