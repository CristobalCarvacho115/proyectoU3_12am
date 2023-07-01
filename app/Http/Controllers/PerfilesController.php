<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PerfilesRequest;

class PerfilesController extends Controller
{
    public function index(){
        $perfiles = Perfil::all();
        return view('perfiles.index', compact('perfiles'));
    }



    public function __construct(){
        $this->middleware('auth');
    }

    public function destroy(Usuario $usuario)
    {
        if($cuenta!=Auth::user()){
            $cuenta->delete();
        }

        return redirect()->route('usuarios.index');
    }
}
