<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Curso;
class Alumno extends Model
{
    use HasFactory;
    protected $table='alumnos';//este es el nombre de la tabla
    protected $primarykey='id';
    protected $fillable = [//aqui ponemos los campos que se puedan ver cuando los mandamos
        'nom_ape',
        'edad',
        'telefono',
        'direccion'
    ];
    protected $hidden = [//aqui ponemos los campos que no queremos que se vean
        'id'
    ];
    public function cursos(){
        return $this->belongsToMAny(Curso::class);
    }
}
