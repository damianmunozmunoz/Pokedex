<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Generacion;
class GeneracionesController extends Controller
{
   public function index(){
    $listaGeneraciones=Generacion::paginate(10);
    return view('generaciones/all', ['listaGeneraciones' => $listaGeneraciones]);
   } 
   /* public function show($id){

   } */
    public function create(){
        return view('generaciones/form');
    }
    public function store(Request $r){
        $p = new Generacion();
        $p->nombre=$r->nombre;
        $p->cantidad=$r->cantidad;
        $p->fecha_añadido=$r->fecha_añadido;
        $p->save();
        return redirect()->route(('generaciones.index'));
    }
    public function edit($id){
        $generacion = Generacion::find($id);
        return view('generaciones/form',['generacion' => $generacion]);
    }
    public function update($id, Request $r){
        $p = Generacion::find($id);
        $p->nombre=$r->nombre;
        $p->cantidad=$r->cantidad;
        $p->fecha_añadido=$r->fecha_añadido;
        $p->save();
        return redirect()->route(('generaciones.index'));
    }
    public function destroy($id){
        $p = Generacion::find($id);
        $p->delete();
        return redirect()->route('generaciones.index');
    }
}
