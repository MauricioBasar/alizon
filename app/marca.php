<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class marca extends Model
{
    public $guarded = [];

    public function productos(){
      return $this->hasMany('App\producto', 'marca_id');
    }
}
