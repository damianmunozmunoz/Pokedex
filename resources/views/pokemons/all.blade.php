@extends("master")

@section("title", "Administración de pokemons")

@section("header", "Administración de Pokemon")

@section("content")
    
@section("main_title", "Listado de pokemons")


    
    <table border='0' class="table table-dark">
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Peso</th>
            <th scope="col">Altura</th>
            <th scope="col">Genero</th>
        </tr>
    @foreach ($listaPokemons as $pokemon) <!-- Si el controlador devuelve una "lista de producto", los datos se insertan en una tabla mostrando el "name", "description" y "price". -->
        <tr>
            <td scope="row">{{$pokemon->nombre}}</td>
            <td>{{$pokemon->peso}}</td>
            <td>{{$pokemon->altura}}</td>
            <td>{{$pokemon->altura}}</td>
            <td class="sinbordes">
                <a href="{{route('pokemons.edit', $pokemon->id)}}">Modificar</a></td>
            <td class="sinbordes">
                <form action = "{{route('pokemons.destroy', $pokemon->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>
            </td>
        </tr>
    
    @endforeach
    </table><br>
    <a href="{{ route('pokemons.create') }}">Nuevo pokemon</a><br><br><br>
    <form class="centrado" action="{{route('main')}}">
        <input class="btn btn-success" type="submit" value="MENÚ PRINCIPAL">
    </form>
@endsection

