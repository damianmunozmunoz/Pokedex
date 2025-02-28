<?php

namespace App\Http\Controllers;

use App\Models\Entrenador;
use Illuminate\Http\Request;

class EntrenadoresController extends Controller
{
    public function index()
    {
        $listaEntrenadores=Entrenador::paginate(10);
        return view('entrenadores/all', ['listaEntrenadores' => $listaEntrenadores]);
    }
    /*
    public function show($id) {
        $p = Entrenador::find($id);
        $data['entrenador'] = $p;
        return view('entrenadores.show', $data);
    }
    */
    public function create()
    {
        return view('entrenadores/form');
    }
    public function store(Request $r)
    {
        $p = new Entrenador();
        $p->correo=$r->correo;
        $p->nombre=$r->nombre;
        $p->password=$r->password;
        $p->nacimiento=$r->nacimiento;
        $p->save();
        return redirect()->route('entrenadores.index');
    }
    public function edit($id){
        $entrenador = Entrenador::find($id);
        return view('entrenadores/form', ['entrenador' => $entrenador]);
    }
    public function update($id, Request $r){
        $p = Entrenador::find($id);
        $p = new Entrenador();
        $p->correo=$r->correo;
        $p->nombre=$r->nombre;
        $p->password=$r->password;
        $p->nacimiento=$r->nacimiento;
        $p->save();
        return redirect()->route('entrenadores.index');
    }
    public function destroy($id){
        $p=Entrenador::find($id);
        $p->delete();
        return redirect()->route('entrenadores.index');
    }
}
