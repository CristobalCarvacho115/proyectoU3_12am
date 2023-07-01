<?php

namespace App\Http\Controllers;

use App\Models\Cuenta;
use App\Models\Perfil;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CuentasRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Gate;

class CuentasController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['autenticar','logout']);
    }

    public function index(){
        $cuentas = Cuenta::all();
        return view('cuentas.index', compact('cuentas'));
    }

    public function autenticar(Request $request)
    {
        $user = $request->user;
        $password = $request->password;

        if(Auth::attempt(['user'=>$user,'password'=>$password])){
            return redirect()->route('home.index');
        }

        return back()->withErrors([
            'user' => 'Credenciales Incorrectas',
        ])->onlyInput('user');
    }
}
