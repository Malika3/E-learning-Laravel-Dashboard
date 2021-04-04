<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empt extends Model
{
    public function niveaux()
    {
        return $this->hasMany('App\Niveau');
    }

    public function seances()
    {
        return $this->hasMany('App\Seance');
    }

    public function ens()
    {
        return $this->hasMany('App\Enseignant');
    }
    public function modules()
    {
        return $this->hasMany('App\Module');
    }

    public function groupes()
    {
        return $this->hasMany('App\Groupe');
    }

    public function salles()
    {
        return $this->hasMany('App\Salle');
    }
}
