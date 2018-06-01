<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exames extends Model
{
  public function hemograma(){
    return $this->hasMany(Hemograma::class);
  }

  public function user(){ //$hemograma->exame->user
    return $this->belongsTo(User::class);
  }

  public function addHemograma($hemograma){
    $this->hemograma()->create(compact('hemograma'))
  }
  
}
