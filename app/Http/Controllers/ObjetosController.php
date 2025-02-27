<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Objeto;
class ObjetosController extends Controller
{
    public function index()
    {
        $listaObjetos = Objeto::all();
        return view('objetos/all', ['listaObjetos' => $listaObjetos]);
    }
    /* public function show() {
    } */
    public function crear()
    {
        return view('objetos/form');
    }
    public function almacenar(Request $r)
    {
        $p = new Objeto();
        $p->nombre = $r->nombre;
        $p->descripcion = $r->descripcion;
        $p->save();
        return redirect()->route('objetos.index');
    }
    public function editar($id)
    {
        $objeto = Objeto::find($id);
        return view('objetos/form', ['objeto' => $objeto]);
    }
    public function modificar($id,Request $r){
        $p = Objeto::find($id);
        $p->nombre = $r->nombre;
        $p->descripcion = $r->descripcion;
        $p->save();
        return redirect()->route('objetos.index');
    }
    public function eliminar($id){
        $p=Objeto::find($id);
        $p->delete();
        return redirect()->route('objetos.index');
    }
}
