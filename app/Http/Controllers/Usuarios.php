<?php

namespace sistema\Http\Controllers;

use Illuminate\Http\Request;
use sistema\Http\Requests;
use sistema\Usuario;
use Illuminate\Support\Facades\Redirect;
use sistema\Http\Requests\UsuarioFormRequest;
use DB;

class Usuarios extends Controller
{

    public function index(Request $request)
    {
    	if($request)
    	{
    		$query=trim($request->get('searchText'));
    		$usuarios=DB::table('users')->where('name','like','%'.$query.'%')
    		->orderBy('name','asc')
    		->paginate(4);
    		return view('sistema.usuario.index',["usuarios"=>$usuarios,"searchText"=>$query]);
    	}
    }

    public function store(UsuarioFormRequest $request)
    {
        $usuarios = new Usuario;
        $usuarios->name = $request->name;
        $usuarios->email = $request->email;
        $usuarios->password = $request->password;
        $usuarios->save();
        return response()->json($usuarios,201);
    }

    public function show(Request $request)
    {
        $usuarios=DB::table('users')->where('name','like','%a%')
    		->orderBy('id','asc')
    		->paginate(4);
    		return $usuarios;

    }

   public function destroy($_id)
    {
        $usuarios = Usuario::find($_id);
        $usuarios->delete();
        return back()->with('info','Eliminado');
    }
}