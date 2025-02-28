@extends('master')

@section('title', 'Pokedex')

@section('header', 'Objetos')

@section('content')

@section('main_title', 'Lista de Objetos')
<table class="table table-striped table-secondary align-center">
    <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th colspan="2">Opciones</th>
    </tr>
    @foreach ($listaObjetos as $objeto)
        <tr>
            <td>{{ $objeto->nombre }}</td>
            <td>{{ $objeto->descripcion }}</td>
            <td><a class="btn btn-primary" href="{{ route('objetos.edit', $objeto->id) }}">Editar</a></td>
            <td>
                <form action="{{ route('objetos.destroy', $objeto->id) }}">
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
        {{ $listaObjetos->links() }} <!-- Paginación -->
    </div>
    <a class="btn btn-success" href="{{ route('objetos.create') }}">Añadir Objeto</a>
    <form action="{{ route('main') }}">
        <input class="btn btn-info" type="submit" value="MAIN">
    </form>
</div>
@endsection

