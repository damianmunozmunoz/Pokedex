<?php

namespace App\Http\Controllers;

use App\Models\Entrenador;
use Illuminate\Http\Request;

class EntrenadoresController extends Controller
{
    public function index()
    {
        $listaEntrenadores=Entrenador::all();
        return view('entrenadores/all', ['listaEntrenadores' => $listaEntrenadores]);
    }
    /*
    public function show($id) {
        $p = Entrenador::find($id);
        $data['entrenador'] = $p;
        return view('entrenadores.show', $data);
    }
    */
    public function crear()
    {
        return view('entrenadores/form');
    }
    public function almacenar(Request $r)
    {
        $p = new Entrenador();
        $p->correo=$r->correo;
        $p->nombre=$r->nombre;
        $p->password=$r->password;
        $p->nacimiento=$r->nacimiento;
        $p->save();
        return redirect()->route('entrenadores.index');
    }
    public function editar($id){
        $entrenador = Entrenador::find($id);
        return view('entrenadores/form', ['entrenador' => $entrenador]);
    }
    public function modificar($id, Request $r){
        $p = Entrenador::find($id);
        $p = new Entrenador();
        $p->correo=$r->correo;
        $p->nombre=$r->nombre;
        $p->password=$r->password;
        $p->nacimiento=$r->nacimiento;
        $p->save();
        return redirect()->route('entrenadores.index');
    }
    public function borrar($id){
        $p=Entrenador::find($id);
        $p->delete();
        return redirect()->route('entrenadores.index');
    }
}
