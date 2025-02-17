<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pokemon;
class PokemonsController extends Controller
{
    public function index()
    {
        $listaPokemons = Pokemon::all();
        return view('pokemons/all', ['listaPokemons' => $listaPokemons]);
    }
    /*
    public function show($id) {
        $p = Pokemon::find($id);
        $data['pokemon'] = $p;
        return view('pokemon.show', $data);
    }
    */
    public function crear()
    {
        return view('pokemon/form');
    }
    public function almacenar(Request $r)
    {
        $p = new Pokemon();
        $p->nombre = $r->nombre;
        $p->peso = $r->peso;
        $p->altura = $r->altura;
        $p->genero = $r->genero;
        $p->tipo = $r->tipo;
        $p->id_generacion = $r->id_generacion;
        $p->id_objeto = $r->id_objeto;
        $p->id_equipo = $r->id_equipo;
        $p->save();
        return redirect()->route('pokemon.index');
    }
    public function editar($id){
        $pokemon = Pokemon::find($id);
        return view('pokemon/form', ['pokemon' => $pokemon]);
    }
    public function modificar($id, Request $r){
        $p = Pokemon::find($id);
        $p = new Pokemon();
        $p->nombre = $r->nombre;
        $p->peso = $r->peso;
        $p->altura = $r->altura;
        $p->genero = $r->genero;
        $p->tipo = $r->tipo;
        $p->id_generacion = $r->id_generacion;
        $p->id_objeto = $r->id_objeto;
        $p->id_equipo = $r->id_equipo;
        $p->save();
        return redirect()->route('pokemon.index');
    }
    public function borrar($id){
        $p = Pokemon::find($id);
        $p->delete();
        return redirect()->route('pokemon.index');
    }
}
