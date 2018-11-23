@extends('layouts.app')

@section('content')
    
    <h1>Empleados Nuevo</h1>

    {!! Form::model(
        $empleado = new \App\Empleado,
        [
            'route' => 'empleados.store',
        ]
    )!!}

    @include('empleados.form') 


    {!! Form::close() !!}

@endsection