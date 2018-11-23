<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libros';

    protected $fillable = [
        'nombre',
        'editorial',
        'ano',
        'ubicacion',
        'autor',
        'tipo',
        'area',
        'prestamos'
    ];



    public function pestramo()
    {
        return $this->belongsTo(Prestamo::class);
    }
}