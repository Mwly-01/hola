<?php

namespace App\Domain\Models;
use Illuminate\Database\Eloquent\Model;



class Camper extends Model
{
    protected $table = 'campers';//Nombre de la tabla 
    protected $primaryKey = 'id';//Llave primaria
    public $timetamps = true;//Habili
    protected $fillable = ['nombre', 'edad','documento','tipo_documento','nivel_ingles','nivel_programacion'];//columnas necesarias 
}