@extends('master')

@section('title', 'Pokedex')

@section('header', 'Generaciones')

@section('content')

@section('main_title', 'Lista de Generaciones')
<table class="table table-striped table-secondary align-center">
    <tr>
        <th>Nombre</th>
        <th>Cantidad</th>
        <th>Fecha Añadido</th>
        <th colspan="2">Opciones</th>
    </tr>
    @foreach ($listaGeneraciones as $generacion)
        <tr>
            <td>{{ $generacion->nombre }}</td>
            <td>{{ $generacion->cantidad }}</td>
            <td>{{ $pokemon->fecha_añadido }}</td>
            <td><a class="btn btn-primary" href="{{ route('pokemons.edit', $pokemon->id) }}">Editar</a></td>
            <td>
                <form action="{{ route('generaciones.destroy', $pokemon->id) }}">
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
        {{ $listaPokemons->links() }} <!-- Paginación -->
    </div>
    <a class="btn btn-success" href="{{ route('pokemons.create') }}">Nuevo Pokemon</a>
    <form action="{{ route('main') }}">
        <input class="btn btn-info" type="submit" value="MAIN">
    </form>
</div>
@endsection

