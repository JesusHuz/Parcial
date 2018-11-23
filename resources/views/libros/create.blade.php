@extends('layouts.app')

@section('content')
    
    <h1>Libro Nuevo</h1>

    {!! Form::model(
        $libro = new \App\Libro,
        [
            'route' => 'libros.store',
        ]
    )!!}

    @include('libros.form') 


    {!! Form::close() !!}

@endsection