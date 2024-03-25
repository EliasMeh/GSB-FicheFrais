<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneFraisForfait extends Model
{
    use HasFactory;
    protected $table = 'LigneFraisForfait'; // Change 'visiteur' to match your actual table name
    public $incrementing = false;
    
    protected $fillable = [
        'idVisiteur',
        'moisannee',
        'idFraisForfait',
        'quantite'
    ];

    public $timestamps = false;

    public function fraisForfait()
    {   
    return $this->hasOne(FraisForfait::class, 'id', 'idFraisForfait');
    }
}
