<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    public $guarded = [];

    public function productos(){
      return $this->hasMany('App\producto', 'categoria_id');
    }

    public function subcategorias(){
      return $this->hasMany('App\subcategoria', 'categoria_id');
    }
}
