<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    public function niveau()
    {
        return $this->belongsTo('App\Niveau');
    }

    public function empt()
    {
        return $this->belongsTo('App\Empt');
    }

    public function seance()
    {
        return $this->belongsTo('App\Seance');
    }
    
}
