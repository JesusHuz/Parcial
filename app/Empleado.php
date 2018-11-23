<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'estudiantes';

    protected $fillable = [
        'nombre',

    ];
}
