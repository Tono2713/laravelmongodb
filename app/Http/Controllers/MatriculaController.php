<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matricula;
use App\Users;
use App\Curso;

class MatriculaController extends Controller
{
    public function create()
    { 
        $users =  Users::all();
        $cursos =  Curso::all();
        return view('matricula.create',compact('users','cursos'));
    }

    public function store(Request $request)
    {
        $matricula = new Matricula();
        $matricula->curso = $request->get('curso');
        $matricula->estudiante = $request->get('estudiante');
        $matricula->save();
        return redirect('/matricula/')->with('success', 'matricula has been successfully added');
    }

    public function index()
    {
        $matriculas=Matricula::all();
        $users =  Users::all();
        $cursos =  Curso::all();
        return view('matricula.index',compact('matriculas','users','cursos'));
    }

    public function edit($id)
    {
        $matricula = Matricula::find($id);
        $users =  Users::all();
        $cursos =  Curso::all();
        return view('matricula.edit',compact('matricula','id','users','cursos'));
    }

    public function update(Request $request, $id)
    {
        $matricula= Matricula::find($id);
        $matricula->curso = $request->get('curso');
        $matricula->estudiante = $request->get('estudiante');
        $matricula->save();
        return redirect('/matricula/')->with('success', 'matricula has been successfully update');
    }

    public function destroy($id)
    {
        $matricula = Matricula::find($id);
        $matricula->delete();
        return redirect('/matricula/')->with('success','matricula has been  deleted');
    }
}
