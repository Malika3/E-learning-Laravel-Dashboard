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
        return $this->hasMany(enseignant::class);
    }


    public function seancesGroupes()
    {
        return $this->hasMany(groupe::class, 'groupe_id', 'id');
    }
    public function Groupes()
    {
        return $this->hasMany(groupe::class);
    }

    public function seancesModules()
    {
        return $this->hasMany(module::class, 'module_id', 'id');
    }
    public function Modules()
    {
        return $this->hasMany(module::class);
    }


}
