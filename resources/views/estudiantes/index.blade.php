@extends('layouts.app')

@section('content')
    
    <h1>{{ $title }}</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $estudiante)
            <tr>             
                    <td>{{ $estudiante->nombre }}</td>

                <td>
                    <a href="{{ route ('estudiantes.show',$estudiante) }}">
                        Detalles
                    </a>
                </td>
                <td>
                    <a href="{{ route ('estudiantes.edit',$estudiante) }}">
                        Editar
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection