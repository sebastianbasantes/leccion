<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 
        'integrantes', 
        'fecha_creacion', 
        'lider'
    ];

    protected $primaryKey = 'id_equipo';
}
