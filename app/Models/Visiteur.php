<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visiteur extends Model
{
    use HasFactory;

    protected $table = 'Visiteur'; // Change 'visiteur' to match your actual table name

    public $incrementing = false;
}
