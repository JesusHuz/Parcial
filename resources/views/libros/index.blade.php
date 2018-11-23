@extends('layouts.app')

@section('content')
    
    <h1>{{ $title }}</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>editorial</th>
                <th>ano</th>
                <th>ubicacion</th>
                <th>autor</th>
                <th>tipo</th>
                <th>area</th>
                <th>prestamo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
            <tr>             
                    <td>{{ $libro->nombre }}</td>
                    <td>{{ $libro->editorial }}</td>
                    <td>{{ $libro->ano }}</td>
                    <td>{{ $libro->ubicacion }}</td>
                    <td>{{ $libro->autor }}</td>
                    <td>{{ $libro->tipo }}</td>
                    <td>{{ $libro->area }}</td>
                    <td>{{ $libro->prestamo }}</td>
                <td>
                    <a href="{{ route ('libros.show',$libro) }}">
                        Detalles
                    </a>
                </td>
                <td>
                    <a href="{{ route ('libros.edit',$libro) }}">
                        Editar
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection