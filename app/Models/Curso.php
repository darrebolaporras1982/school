<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Alumno;
use App\Models\Profesor;
class Curso extends Model
{
    use HasFactory;
    protected $table='cursos';
    protected $primarykey='id';
    protected $fillable=[
        'nombre',
        'nivel',
        'horas_academicas'
    ];
    protected $hidden = [//aqui ponemos los campos que no queremos que se vean
        'id'
    ];
    public function profesor(){
        return $this->belongsTo(Profesor::class);
    }
    public function alumnos(){
        return $this->belongsToMany(Alumno::class);
    }

}
