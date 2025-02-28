@extends('master')

@section('title', 'Pokedex')

<<<<<<< HEAD
@section('header', 'Pokémon')
=======
@section('header', 'Pokemon')
>>>>>>> master

@section('content')

@section('main_title', 'Lista de Pokemon')
<table class="table table-striped table-secondary align-center">
    <tr>
        <th>Nombre</th>
        <th>Peso</th>
        <th>Altura</th>
        <th>Genero</th>
<<<<<<< HEAD
        <th colspan="2">Opciones</th>
=======
>>>>>>> master
    </tr>
    @foreach ($listaPokemons as $pokemon)
        <tr>
            <td>{{ $pokemon->nombre }}</td>
            <td>{{ $pokemon->peso }}</td>
            <td>{{ $pokemon->altura }}</td>
            <td>{{ $pokemon->genero }}</td>
            <td><a class="btn btn-primary" href="{{ route('pokemons.edit', $pokemon->id) }}">Editar</a></td>
            <td>
                <form action="{{ route('pokemons.destroy', $pokemon->id) }}">
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

