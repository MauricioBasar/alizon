<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class oferta extends Model
{
    public $guarded = [];

    public function productos(){
      return $this->hasMany('App\producto', 'oferta_id');
    }
}
