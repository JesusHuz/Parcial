@extends('layouts.app')

@section('content')

    <h1>Edicion de Estudiantes {{ $estudiante->id }}</h1>

    {!! Form::model(
        $estudiante,
        [
            'route' => ['estudiantes.update', $estudiante],

            'method' => 'PUT' //y metodo put crea un campo oculto apra el put pero seta post
        ]
    ) !!}

        @include('estudiantes.form')

    {!! Form::close() !!}

    

@endsection