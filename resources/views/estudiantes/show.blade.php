
@extends('layouts.app')

@section('content')

    <h1>Detalles del Estudiantes {{ $estudiante->id }}</h1>

    <table class="table table-bordered">
        <tr>
            <th>nombre</th>
            <td>{{ $estudiante->nombre }}</td>
        </tr>

    </table>

@endsection