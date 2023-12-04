<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Curso;
class Profesor extends Model
{
    use HasFactory;
    protected $table='profesors';
    protected $primarykey='id';
    protected $fillable=[
              'nom_ape',
              'profesion',
              'grado_academico',
              'telefono'
    ];
    protected $hidden = [//aqui ponemos los campos que no queremos que se vean
        'id'
    ];
    public function cursos(){
        return $this->hasMany(Curso::class);
    }
}
