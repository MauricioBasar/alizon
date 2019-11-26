<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    public $guarded = [];

    public function favoritos(){
      return $this->hasMany('App\favorito', 'usuario_id');
    }
}
