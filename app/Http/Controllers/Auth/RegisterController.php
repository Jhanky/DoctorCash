<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

 public function registrarUser(Request $request)
 {
    User::insert([
        'name' => request('name'),
        'USE_PRIMER_NOMBRE' => request('USE_PRIMER_NOMBRE'),
        'USE_SEGUNDO_NOMBRE' => request('USE_SEGUNDO_NOMBRE'),
        'USE_PRIMER_APELLIDO' => request('USE_PRIMER_APELLIDO'),
        'USE_SEGUNDO_APELLIDO' => request('USE_SEGUNDO_APELLIDO'),
        'USE_FECHA_NACIMIENTO' => request('USE_FECHA_NACIMIENTO'),
        'USE_ESTADO_CIVIL' => request('USE_ESTADO_CIVIL'),
        'USE_TIPO_DOCUMENTO' => request('USE_TIPO_DOCUMENTO'),
        'USE_DEPARTAMENTO' => request('USE_DEPARTAMENTO'),
        'USE_GENERO' => request('USE_GENERO'),
        'USE_TIPO_ZONA' => request('USE_TIPO_ZONA'),
        'USE_NUMERO_IDENTIFICACCION' => request('USE_NUMERO_IDENTIFICACCION'),
        'USE_MUNICIPIO' => request('USE_MUNICIPIO'),
        'email' => request('email'),
        'password' => Hash::make(request()->get('password'))
    ]);
    return redirect('/home');
 }

}
