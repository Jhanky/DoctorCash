<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function perfil()
    {
       /* $usuarios= User::all();
       return $usuarios; */
        return view('user.perfil');
    }


    public function crearUsuario()
    {
        return view('Auth.register');
    }

    public function edit($cliente)
    {

    }

    public function update(Request $request,  $cliente)
    {
        //
    }


    public function destroy( $cliente)
    {
        //
    }
}
