<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public function empt()
  {
      return $this->belongsTo('App\Empt');
  }

  public function ens()
  {
      return $this->hasMany('App\Enseignant');
  }
}
