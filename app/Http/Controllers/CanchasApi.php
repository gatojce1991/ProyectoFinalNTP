<?php

namespace sistema\Http\Controllers;

use Illuminate\Http\Request;
use sistema\Http\Requests;
use sistema\Cancha;
use Illuminate\Support\Facades\Redirect;
use sistema\Http\Requests\CanchaFormRequest;
use DB;

class Canchas extends Controller
{

    public function index(Request $request)
    {
    	if($request)
    	{
    		$query=trim($request->get('searchText'));
    		$canchas=DB::table('cancha')->where('nombre','like','%'.$query.'%')
    		->orderBy('nombre','asc')
    		->paginate(8);
    		return view('sistema.cancha.index',["canchas"=>$canchas,"searchText"=>$query]);
    	}
    }

    public function store(CanchaFormRequest $request)
    {
        $canchas = new Cancha;
        $canchas->nombre = $request->nombre;
        $canchas->precio = $request->precio;
        $canchas->horario_inicio = $request->horario_inicio;
        $canchas->horario_fin = $request->horario_fin;
        $canchas->ubicacion = $request->ubicacion;
		$canchas->cubierta = $request->cubierta;
		$canchas->superficie = $request->superficie;
		$canchas->red = $request->red;
		$canchas->rating = $request->rating;
        $canchas->save();
        return response()->json($canchas,201);
    }

    public function show(Request $request)
    {
        $canchas=DB::table('cancha')->where('nombre','like','%a%')
    		->orderBy('idcancha','asc')
    		->paginate(8);
    		return $canchas;

    }

   public function destroy($_id)
    {
        $canchas = Cancha::find($_id);
        $canchas->delete();
        return back()->with('info','Eliminado');
    }

 public function create()
    {
		return view("sistema.cancha.create");
    }

}