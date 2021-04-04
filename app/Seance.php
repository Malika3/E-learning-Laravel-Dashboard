<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    //use HasFactory;
    public $table = 'seances';

    protected $dates = [
        'created_at',
        'updated_at',
        
    ];
    protected $fillable = [
        'heureD',
        'heureF',
        'jour',
        'enseignant_id',
        'module_id',
        'groupe_id',
        'created_at',
        'updated_at',  
    ];

    public function seancesEnseignants()
    {
        return $this->hasMany(enseignant::class, 'enseignant_id', 'id');
    }
    public function Enseignants()
    {
        return $this->hasMany('App\Enseignant');
    }

    public function Modules()
    {
        return $this->hasMany('App\Module');
    }
   
    public function Groupes()
    {
        return $this->hasMany('App\Groupe');
    }

    public function Salles()
    {
        return $this->hasMany('App\Salle');
    }
    
    public function niveau()
    {
        return $this->belongsTo('App\Niveau');
    }

    public function empt()
    {
        return $this->belongsTo('App\Empt');
    }
}
