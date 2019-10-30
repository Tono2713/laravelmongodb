<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Users;
use App\Room;

class CursoController extends Controller
{
    public function create()
    { 
        $users =  Users::all();
        $rooms =  Room::all();
        return view('curso.create',compact('users','rooms'));
    }

    public function store(Request $request)
    {
        $curso = new Curso();
        $curso->nombre = $request->get('nombre');
        $curso->nrc = $request->get('nrc');
        $curso->hora = $request->get('hora');
        $curso->profesor = $request->get('profesor');
        $curso->aula = $request->get('aula');
        $curso->save();
        return redirect('/cursos/')->with('success', 'curso has been successfully added');
    }

    public function index()
    {
        $cursos=Curso::all();
        $users =  Users::all();
        $rooms =  Room::all();
        return view('curso.index',compact('cursos','users','rooms'));
    }

    public function edit($id)
    {
        $curso = Curso::find($id);
        $users =  Users::all();
        $rooms =  Room::all();
        return view('curso.edit',compact('curso','id','users','rooms'));
    }

    public function update(Request $request, $id)
    {
        $curso= Curso::find($id);
        $curso->nombre = $request->get('nombre');
        $curso->nrc = $request->get('nrc');
        $curso->hora = $request->get('hora');
        $curso->profesor = $request->get('profesor');
        $curso->aula = $request->get('aula');   
        $curso->save();
        return redirect('/cursos/')->with('success', 'curso has been successfully update');
    }

    public function destroy($id)
    {
        $curso = Curso::find($id);
        $curso->delete();
        return redirect('/cursos/')->with('success','curso has been  deleted');
    }
}
