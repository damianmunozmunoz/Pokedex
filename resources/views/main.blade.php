@extends('master')

@section('title', 'Pokedex')

@section('header', 'Pokedex')

@section('content')
<div class="d-grid gap-3 ">
    <form class="d-grid gap-3" action="{{ route('pokemons.index') }}" method="GET">
<<<<<<< HEAD
        <input class="btn btn-primary btn-lg" type="submit" value="Pokemon">
=======
        <input class="btn btn-primary btn-lg text-center" type="submit" value="Pokemon">
>>>>>>> master
    </form>
    <form class="d-grid gap-3" action="{{ route('objetos.index') }}" method="GET">
        <input class="btn btn-primary btn-lg" type="submit" value="Objetos">
    </form>
<<<<<<< HEAD
    <form class="d-grid gap-3" action="{{ route('tipos.index') }}" method="GET">
        <input class="btn btn-primary btn-lg" type="submit" value="Tipos">
    </form>
    
        
=======
    
        <input class="btn btn-primary btn-lg" type="submit" value="Tipos">
>>>>>>> master
        <input class="btn btn-primary btn-lg" type="submit" value="Generaciones">
        <input class="btn btn-primary btn-lg" type="submit" value="Entrenadores">
        <input class="btn btn-primary btn-lg" type="submit" value="Equipos">
</div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> master
