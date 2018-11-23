
@extends('layouts.app')

@section('content')

    <h1>Detalles del Wmpleado {{ $empleado->id }}</h1>

    <table class="table table-bordered">
        <tr>
            <th>nombre</th>
            <td>{{ $empleado->nombre }}</td>
        </tr>

    </table>

@endsection