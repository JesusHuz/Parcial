@extends('layouts.app')

@section('content')

    <h1>Edicion de Libros {{ $libro->id }}</h1>

    {!! Form::model(
        $libro,
        [
            'route' => ['libros.update', $libro],

            'method' => 'PUT' //y metodo put crea un campo oculto apra el put pero seta post
        ]
    ) !!}

        @include('libros.form')

    {!! Form::close() !!}

    

@endsection