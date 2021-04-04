<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public function empt()
  {
      return $this->belongsTo('App\Empt');
  }
}
