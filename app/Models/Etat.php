<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etat extends Model
{
    use HasFactory;
    protected $table = 'Etat'; // Change 'visiteur' to match your actual table name
    public $incrementing = false;

    
}
