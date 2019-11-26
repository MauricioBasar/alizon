<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcategoria extends Model
{
    public $guarded = [];

    public function productos(){
      return $this->hasMany('App\producto', 'subcategoria_id');
    }

    public function categoria(){
      return $this->belongsTo('App\categoria', 'categoria_id');
    }
}
