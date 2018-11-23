@extends('layouts.app')

@section('content')
    
    <h1>Estudiantes Nuevo</h1>

    {!! Form::model(
        $estudiante = new \App\Estudiante,
        [
            'route' => 'estudiantes.store',
        ]
    )!!}

    @include('estudiantes.form') 


    {!! Form::close() !!}

@endsection