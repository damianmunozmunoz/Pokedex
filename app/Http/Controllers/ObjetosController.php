<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Objeto;
class ObjetosController extends Controller
{
    public function index()
    {
        $listaObjetos = Objeto::paginate(15);
        return view('objetos/all', ['listaObjetos' => $listaObjetos]);
    }
    /* public function show() {
    } */
    public function create()
    {
        return view('objetos/form');
    }
    public function store(Request $r)
    {
        $p = new Objeto();
        $p->nombre = $r->nombre;
        $p->descripcion = $r->descripcion;
        $p->save();
        return redirect()->route('objetos.index');
    }
    public function edit($id)
    {
        $objeto = Objeto::find($id);
        return view('objetos/form', ['objeto' => $objeto]);
    }
    public function update($id,Request $r){
        $p = Objeto::find($id);
        $p->nombre = $r->nombre;
        $p->descripcion = $r->descripcion;
        $p->save();
        return redirect()->route('objetos.index');
    }
    public function destroy($id){
        $p=Objeto::find($id);
        $p->delete();
        return redirect()->route('objetos.index');
    }
}
