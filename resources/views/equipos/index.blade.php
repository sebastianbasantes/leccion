@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Equipos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('equipos.create') }}"> Crear Nuevo Equipo</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered mt-3">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Integrantes</th>
            <th>Fecha de Creación</th>
            <th>Líder</th>
            <th width="280px">Acciones</th>
        </tr>
        @foreach ($equipos as $equipo)
        <tr>
            <td>{{ $equipo->id_equipo }}</td>
            <td>{{ $equipo->nombre }}</td>
            <td>{{ $equipo->integrantes }}</td>
            <td>{{ $equipo->fecha_creacion }}</td>
            <td>{{ $equipo->lider }}</td>
            <td>
                <form action="{{ route('equipos.destroy', $equipo->id_equipo) }}" method="POST">
                   
                    <a class="btn btn-primary" href="{{ route('equipos.edit', $equipo->id_equipo) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
