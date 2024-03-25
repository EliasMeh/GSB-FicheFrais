<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FicheFrais extends Model
{
    use HasFactory;

    public $timestamps = false; // Disable automatic timestamps

    protected $table = 'FicheFrais'; // Change 'visiteur' to match your actual table name

    public $incrementing = false;
    
    protected $fillable = [
        'idVisiteur',
        'moisannee',
        'nbJustificatifs',
        'montantValide',
        'dateModif',
        'idEtat'
    ];
    public function etat()
    {
        return $this->belongsTo(Etat::class, 'idEtat');
    }
}