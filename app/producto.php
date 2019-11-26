<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    public $guarded = [];

    public function categoria(){
      return $this->belongsTo('App\categoria', 'categoria_id');
    }

    public function subcategoria(){
      return $this->belongsTo('App\subcategoria', 'subcategoria_id');
    }

    public function marca(){
      return $this->belongsTo('App\marca', 'marca_id');
    }

    public function oferta(){
      return $this->belongsTo('App\oferta', 'oferta_id');
    }

    public function calificacion(){
      return $this->belongsTo('App\calificacion', 'calificacion_id');
    }

}
