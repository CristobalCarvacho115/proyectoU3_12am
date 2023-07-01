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
    public function store(UsuariosRequest $request){

        $cuenta = new Cuenta();

        $cuenta->user = $request->user;
        $cuenta->password = Hash::make($request->password);
        $cuenta->nombre = $request->nombre;
        $cuenta->apellido = $request->apellido;
        $cuenta->perfil_id = $request->perfil_id;
        $cuenta->save();
        return redirect()->route('cuentas.index');
    }


    public function show(Cuenta $cuenta)
    {
        return redirect()->route('cuentas.index');
    }


    public function edit(Cuenta $cuenta)
    {
        return redirect()->route('cuentas.index');
    }


    public function update(UsuariosRequest $request, Cuenta $cuenta)
    {
        $cuenta->user      = $request->user;
        $cuenta->password  = Hash::make($request->password);
        $cuenta->nombre    = $request->nombre;
        $cuenta->apellido  = $request->apellido;
        $cuenta->perfil_id = $request->perfil_id;
        $cuenta->save();
        return redirect()->route('cuentas.index');
    }


    public function destroy(Cuenta $cuenta)
    {
        if($cuenta!=Auth::user() and $cuenta->perfil_id!=1){
            $cuenta->delete();
        }

        return redirect()->route('cuentas.index');
    }


    public function create()
    {
        return redirect()->route('cuentas.index');
    }


    public function index(){
        if(Gate::denies('cuentas-listar')){
            return redirect()->route('home.index');
        }

        $perfiles = Perfil::orderBy('nombre')->get();
        $cuentas = Cuenta::orderBy('nombre')->get();
        return view('cuentas.index',compact(['cuentas','perfiles']));
    }


    public function __construct(){
        $this->middleware('auth')->except(['autenticar','logout']);
    }


    public function autenticar(Request $request)
    {
        $user = $request->user;
        $password = $request->password;

        if(Auth::attempt(['user'=>$user,'password'=>$password])){
            return redirect()->route('home.index');
        }

        return back()->withErrors([
            'user' => 'Los datos de la cuenta son erroneos',
        ])->onlyInput('user');
    }


    public function logout(){
        Auth::logout();
        return redirect()->route('home.login');
    }

}
