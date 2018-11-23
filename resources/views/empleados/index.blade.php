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
            @foreach ($empleados as $empleado)
            <tr>             
                    <td>{{ $empleado->nombre }}</td>

                <td>
                    <a href="{{ route ('empleados.show',$empleado) }}">
                        Detalles
                    </a>
                </td>
                <td>
                    <a href="{{ route ('empleados.edit',$empleado) }}">
                        Editar
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection