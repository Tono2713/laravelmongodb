<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UsersController extends Controller
{
    public function crear()
    { 
        return view('user.create');
    }

    public function store(Request $request)
    {
        $user = new Users();
        $user->nombre = $request->get('nombre');
        $user->dni = $request->get('dni');
        $user->clave = $request->get('clave');
        $user->tipo = $request->get('tipo');  
        $user->save();
        return redirect('/user/')->with('success', 'user has been successfully added');
    }

    public function index()
    {
        $users=Users::all();
        return view('user.index',compact('users'));
    }

    public function edit($id)
    {
        $user = Users::find($id);
        return view('user.edit',compact('user','id'));
    }

    public function update(Request $request, $id)
    {
        $user= Users::find($id);
        $user->nombre = $request->get('nombre');
        $user->dni = $request->get('dni');
        $user->clave = $request->get('clave');
        $user->tipo = $request->get('tipo');    
        $user->save();
        return redirect('/user/')->with('success', 'user has been successfully update');
    }

    public function destroy($id)
    {
        $user = Users::find($id);
        $user->delete();
        return redirect('/user/')->with('success','user has been  deleted');
    }
}
