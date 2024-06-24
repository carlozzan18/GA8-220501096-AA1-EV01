<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interprete extends Model
{
    use HasFactory;
    protected $fillable=['nombre_genero','apellido_interprete','pais_interprete ','seudonimo_interprete'];
}
