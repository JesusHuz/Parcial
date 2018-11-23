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
        'area',
        'tipo',
        'dias'
    ];//campos para llenar de manera masiba

    //relacion con categoria

    public function pestramo()
    {
        return $this->belongsTo(Prestamo::class);//el movimiento pertenece al usuario ..
    }
}