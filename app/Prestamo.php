<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    protected $table = 'prestamos';

    protected $fillable = [
        'libro',
        'estudiante',
        'empleado',
        'prestamo',
        'entrega',
        'libro_id'

    ];

    protected $dates1 = ['prestamo'];

    protected $dates2 = ['entrega'];

    public function libro()
    {
        return $this->belongsTo(Libro::class);
    }
}
