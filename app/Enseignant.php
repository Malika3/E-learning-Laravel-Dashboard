<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
  public function empt()
  {
      return $this->belongsTo('App\Empt');
  }

  public function module()
  {
      return $this->hasMany('App\Module');
  }
  
  }

