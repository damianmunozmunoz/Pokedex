@extends('master')

@section('title', 'Pokedex')

@section('header', 'Objetos')

@section('content')

@section('main_title', content: 'Lista de Objetos')
<table class="table table-striped table-secondary align-center">
    <tr>
        <th>Nombre</th>
        <th colspan="2">Opciones</th>
    </tr>
    @foreach ($listaTipos as $tipo)
        <tr>
            <td>{{ $tipo->nombre }}</td>
            <td><a class="btn btn-primary" href="{{ route('tipos.edit', $tipo->id) }}">Editar</a></td>
            <td>
                <form action="{{ route('tipos.destroy', $tipo->id) }}">
                    @csrf
                    @method("DELETE")
                    <input class="btn btn-danger"  type="submit" value="Eliminar">
                </form>
            </td>
        </tr>
    @endforeach
</table><br>
<div class="d-flex justify-content-around h-auto">
    <div>
        {{ $listaTipos->links() }} <!-- Paginación -->
    </div>
    <a class="btn btn-success" href="{{ route('tipos.create') }}">Añadir Tipo</a>
    <form action="{{ route('main') }}">
        <input class="btn btn-info" type="submit" value="MAIN">
    </form>
</div>
@endsection

