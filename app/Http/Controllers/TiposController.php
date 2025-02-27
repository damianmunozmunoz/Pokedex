<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use Illuminate\Http\Request;

class TiposController extends Controller
{
    public function index()
    {
        $listaTipos = Tipo::all();
        return view('tipos/all', ['listaTipos' => $listaTipos]);
    }
    /*
    public function show($id) {
        $p = Tipo::find($id);
        $data['tipo'] = $p;
        return view('tipos.show', $data);
    }
    */
    public function crear()
    {
        return view('tipos/form');
    }
    public function almacenar(Request $r)
    {
        $p = new Tipo();
        $p->nombre = $r->nombre;
        $p->id_generacion = $r->id_generacion;
        $p->save();
        return redirect()->route('tipos.index');
    }
    public function editar($id){
        $tipo = Tipo::find($id);
        return view('tipos/form', ['tipo' => $tipo]);
    }
    public function modificar($id, Request $r){
        $p = Tipo::find($id);
        $p = new Tipo();
        $p->nombre = $r->nombre;
        $p->id_generacion = $r->id_generacion;
        $p->save();
        return redirect()->route('tipos.index');
    }
    public function borrar($id){
        $p = Tipo::find($id);
        $p->delete();
        return redirect()->route('tipos.index');
    }

}
