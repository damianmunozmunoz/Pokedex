<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquiposController extends Controller
{
    public function index()
    {
        $listaEquipos = Equipo::paginate(10);
        return view('equipos/all', ['listaEquipos' => $listaEquipos]);
    }
    /*
    public function show($id) {
        $p = Equipo::find($id);
        $data['equipo'] = $p;
        return view('equipos.show', $data);
    }
    */
    public function create()
    {
        return view('equipos/form');
    }
    public function store(Request $r)
    {
        $p = new Equipo();
        $p->id_entrenador=$r->id_entrenador;
        $p->save();
        return redirect()->route('equipos.index');
    }
    public function edit($id){
        $equipo = Equipo::find($id);
        return view('equipos/form', ['equipo' => $equipo]);
    }
    public function update($id, Request $r){
        $p = Equipo::find($id);
        $p->id_entrenador = $r->id_entrenador;
        $p->save();
        return redirect()->route('equipos.index');
    }
    public function destroy($id){
        $p = Equipo::find($id);
        $p->delete();
        return redirect()->route('equipos.index');
    }
}
