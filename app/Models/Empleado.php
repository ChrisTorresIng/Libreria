<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $tb_empleados = 'empleados';

    protected $fillable = [
        'nombre',
        'correo',
        'cedula',
        'trabajo',
        'clave',
    ];
}
