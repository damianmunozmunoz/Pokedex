<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use Illuminate\Http\Request;

class TiposController extends Controller
{
    public function index()
    {
        $listaTipos = Tipo::paginate(10);
        return view('tipos/all', ['listaTipos' => $listaTipos]);
    }
    /*
    public function show($id) {
        $p = Tipo::find($id);
        $data['tipo'] = $p;
        return view('tipos.show', $data);
    }
    */
    public function create()
    {
        return view('tipos/form');
    }
    public function store(Request $r)
    {
        $p = new Tipo();
        $p->nombre = $r->nombre;
        $p->id_generacion = $r->id_generacion;
        $p->save();
        return redirect()->route('tipos.index');
    }
    public function edit($id){
        $tipo = Tipo::find($id);
        return view('tipos/form', ['tipo' => $tipo]);
    }
    public function update($id, Request $r){
        $p = Tipo::find($id);
        $p->nombre = $r->nombre;
        $p->id_generacion = $r->id_generacion;
        $p->save();
        return redirect()->route('tipos.index');
    }
    public function destroy($id){
        $p = Tipo::find($id);
        $p->delete();
        return redirect()->route('tipos.index');
    }

}
