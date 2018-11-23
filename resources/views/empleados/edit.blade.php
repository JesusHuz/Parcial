@extends('layouts.app')

@section('content')

    <h1>Edicion de Empleados {{ $empleado->id }}</h1>

    {!! Form::model(
        $empleado,
        [
            'route' => ['empleados.update', $empleado],

            'method' => 'PUT' //y metodo put crea un campo oculto apra el put pero seta post
        ]
    ) !!}

        @include('empleados.form')

    {!! Form::close() !!}

    

@endsection