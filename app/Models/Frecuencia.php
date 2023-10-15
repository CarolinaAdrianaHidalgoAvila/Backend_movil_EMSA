<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frecuencia extends Model
{
    use HasFactory;

    protected $table = "frecuencia";

    protected $fillable = [
      'dia',
      'estado',
      'idDetalleRuta'
    ];
 
}
