<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Generacion;
class GeneracionesController extends Controller
{
   public function index(){
    $listaGeneraciones=Generacion::all();
   } 
   /* public function show($id){

   } */
    public function crear(){
        return view('generaciones/form');
    }
    public function almacenar(Request $r){
        $p = new Generacion();
        $p->nombre=$r->nombre;
        $p->cantidad=$r->cantidad;
        $p->fecha_añadido=$r->fecha_añadido;
        $p->save();
        return redirect()->route(('generaciones.index'));
    }
    public function editar($id){
        $generacion = Generacion::find($id);
        return view('generaciones/form',['generacion' => $generacion]);
    }
    public function actualizar($id, Request $r){
        $p = Generacion::find($id);
        $p->nombre=$r->nombre;
        $p->cantidad=$r->cantidad;
        $p->fecha_añadido=$r->fecha_añadido;
        $p->save();
        return redirect()->route(('generaciones.index'));
    }
    public function eliminar($id){
        $p = Generacion::find($id);
        $p->delete();
        return redirect()->route('generaciones.index');
    }

}
