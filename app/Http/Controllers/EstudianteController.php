<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrera;
use App\Models\Estudiante;
use Illuminate\Support\Facades\DB;
class EstudianteController extends Controller
{
    //
    public function index()
    {
        $estudiante = DB::table('Estudiante')
        ->select('*')
        ->where('State','=','1')
        ->paginate(5);
        return view('Estudiante/index',compact('estudiante'));
    }
    public function create()
    {
        $carrera = Carrera::All();
        return view('Estudiante.create', compact('carrera'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'codigo' =>'required',
            'carrera_id'=> 'required',
        ]);
        $estudiante = new estudiante();
        $estudiante->name = ucwords(strtolower($request->nombre));
        $estudiante->code = ucwords(strtoupper($request->codigo));
        $estudiante->carrera_id = $request->carrera_id;
        $estudiante->save();
        return redirect()->route('estudiante.index', $estudiante);
    }
    public function edit($estudiante_id)
    {
        $estudiante = Estudiante::Where('id', '=', $estudiante_id)->first();
        $carreraActual = Carrera::Where('Id', '=', $estudiante->carrera_id)->first();
        $carrera = Carrera::All();
        return view('Estudiante.edit', compact('estudiante','carrera','carreraActual'));
    }
    public function update(Request $request, $estudiante)
    {
        $request->validate([
            'nombre' => 'required',
            'codigo' =>'required',
            'carrera_id'=> 'required',
        ]);
        DB::table('Estudiante')
        ->where('id',$estudiante)
        ->update(array(
            'code'=> $request->codigo,
            'name'=> $request->nombre,
            'carrera_id'=> $request->carrera_id));            
        return redirect()->route('estudiante.index');
    }
}
