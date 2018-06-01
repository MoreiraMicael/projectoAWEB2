<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hemograma extends Model
{
    public function exames(){
      return $this->belongsTo(Exames::class);
    }

    public function user(){ //$hemograma->user->name
      return $this->belongsTo(User::class);
    }
}
