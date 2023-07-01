<?php

namespace App\Http\Controllers;
use App\Models\Cuenta;
use App\Models\Imagenes;

use Illuminate\Http\Request;

class ImagenesController extends Controller
{

    public function index(){

        $perfiles = Perfil::orderBy('id')->get();
        return view('home.index',compact(['imagenes']));
    }

    public function store(Request $request, Cuenta $cuenta){

        $imagen = new Imagen();

        $imagen->titulo = $request->titulo;
        $imagen->archivo = $request->archivo;
        $imagen->cuenta_user = Auth::user();
        $cuenta->save();
        return redirect()->route('cuentas.index');
    }


}
