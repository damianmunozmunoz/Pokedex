@extends('master')

@section("title", "Pokemon")

@section("header", "Pokemon")

@section("content") 
    <div class="centrado">
        <form action="{{ route('pokemons.index') }}" method="GET">
            <input type="submit" class="btn btn-primary" value="Pokemon">
        </form>
    </div>


@endsection

