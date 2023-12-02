<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $table='cursos';
    protected $fillable=[
        'nombre',
        'nivel',
        'horas_academicas'
    ];
    protected $hidden = [//aqui ponemos los campos que no queremos que se vean
        'id'
    ];
}
