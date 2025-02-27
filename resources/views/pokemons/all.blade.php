@extends("master")

@section("title", "Administración de pokemons")

@section("header", "Administración de pokemons")

@section("content")
    
@section("main_title", "Listado de pokemons")


    
    <table border='0'>
        <tr>
            <th>Nombre</th>
            <th>Peso</th>
            <th>Altura</th>
            <th>Genero</th>
        </tr>
    @foreach ($listaPokemons as $pokemon) <!-- Si el controlador devuelve una "lista de producto", los datos se insertan en una tabla mostrando el "name", "description" y "price". -->
        <tr>
            <td>{{$pokemon->nombre}}</td>
            <td>{{$pokemon->peso}}</td>
            <td>{{$pokemon->altura}}</td>
            <td>{{$pokemon->altura}}</td>
            <td class="sinbordes">
                <a href="{{route('pokemon.editar', $pokemon->id)}}">Modificar</a></td>
            <td class="sinbordes">
                <form action = "{{route('pokemon.borrar', $pokemon->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>
            </td>
        </tr>
    
    @endforeach
    </table><br>
    <a href="{{ route('pokemon.crear') }}">Nuevo pokemon</a><br><br><br>
    <form class="centrado" action="{{route('index')}}">
        <input  type="submit" value="MENÚ PRINCIPAL">
    </form>
@endsection

