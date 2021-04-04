<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    public function empt()
{
    return $this->belongsTo('App\Empt');
}

public function groupes()
{
    return $this->hasMany('App\Groupe');
}

public function seances()
{
    return $this->hasMany('App\Seance');
}
}
