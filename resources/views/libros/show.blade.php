@extends('layouts.app')

@section('content')

    <h1>Detalles del libro {{ $libro->id }}</h1>

    <table class="table table-bordered">
        <tr>
            <th>nombre</th>
            <td>{{ $libro->nombre }}</td>
        </tr>
        <tr>
            <th>editorial</th>
            <td>{{ $libro->editorial }}</td>
        </tr>
        <tr>
            <th>ano</th>
            <td>{{ $libro->ano }}</td>
        </tr>
        <tr>
            <th>ubicacion</th>
            <td>{{ $libro->ubicacion }}</td>
        </tr>
        <tr>
            <th>autor</th>
            <td>{{ $libro->autor }}</td>
        </tr>
        <tr>
            <th>area</th>
            <td>{{ $libro->area }}</td>
        </tr>
        <tr>
            <th>prestamo</th>
            <td>{{ $libro->prestamo }}</td>
        </tr>

        <tr>
            <th>tipo</th>
            <td>{{ $libro->tipo }}</td>
        </tr>
    </table>

@endsection