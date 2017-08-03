<?php

namespace sistema\Http\Controllers;

use Illuminate\Http\Request;
use sistema\Http\Requests;
use sistema\Mensaje;
use Illuminate\Support\Facades\Redirect;
use sistema\Http\Requests\MensajeFormRequest;
use DB;

class Mensajes extends Controller
{

    public function index(Request $request)
    {
    	if($request)
    	{
    		$query=trim($request->get('searchText'));
    		$mensajes=DB::table('mensaje')->where('MAIL','like','%'.$query.'%')
    		->orderBy('MAIL','asc')
    		->paginate(8);
    		return view('sistema.mensaje.index',["mensajes"=>$mensajes,"searchText"=>$query]);
    	}
    }

    public function store(MensajeFormRequest $request)
    {
        $mensajes = new Mensaje;
        $mensajes->mail = $request->mail;
        $mensajes->descripcion = $request->descripcion;
        $mensajes->contacto = $request->contacto;
        $mensajes->fecha = $request->fecha;
        $mensajes->save();
        return response()->json($mensajes,201);
    }

    public function show(Request $request)
    {
        $mensajes=DB::table('mensaje')->where('MAIL','like','%a%')
    		->orderBy('IDMENSAJE','asc')
    		->paginate(8);
    		return $mensajes;

    }

   public function destroy($_id)
    {
        $mensajes = Mensaje::find($_id);
        $mensajes->delete();
        return back()->with('info','Eliminado');
    }
}