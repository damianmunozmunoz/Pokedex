<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquiposController extends Controller
{
    public function index()
    {
        $listaEquipos = Equipo::all();
        return view('equipos/all', ['listaEquipos' => $listaEquipos]);
    }
    /*
    public function show($id) {
        $p = Equipo::find($id);
        $data['equipo'] = $p;
        return view('equipos.show', $data);
    }
    */
    public function crear()
    {
        return view('equipos/form');
    }
    public function almacenar(Request $r)
    {
        $p = new Equipo();
        $p->id_entrenador=$r->id_entrenador;
        $p->save();
        return redirect()->route('equipos.index');
    }
    public function editar($id){
        $equipo = Equipo::find($id);
        return view('equipos/form', ['equipo' => $equipo]);
    }
    public function modificar($id, Request $r){
        $p = Equipo::find($id);
        $p = new Equipo();
        $p->id_entrenador = $r->id_entrenador;
        $p->save();
        return redirect()->route('equipos.index');
    }
    public function borrar($id){
        $p = Equipo::find($id);
        $p->delete();
        return redirect()->route('equipos.index');
    }
}
