@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('mensaje'))
{{ session::get('mensaje') }}
@endif

    <a href="{{ url('empleado/create') }}" class="btn btn-primary mt-2">Registrar nuevo empleado</a>

    <table class="table table-light mt-4">
        <thead class="thead-light">
            <tr>
                <th>id</th>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach( $empleados as $empleado )
            <tr>
                <td>{{ $empleado->id }}</td>
                <td>{{ $empleado->Cedula }}</td>
                <td>{{ $empleado->Nombre }}</td>
                <td>{{ $empleado->Apellido }}</td>
                <td>{{ $empleado->Correo }}</td>
                <td>
                
                <a href="{{ url('/empleado/'.$empleado->id.'/edit') }} " class="btn btn-warning">Editar </a>

                <form action="{{ url('/empleado/'.$empleado->id) }} " class="d-inline" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" class="btn btn-danger" onclick="return confirm('¿Realmente quieres eliminar este registro?')" value="Borrar"></form>


                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>
@endsection