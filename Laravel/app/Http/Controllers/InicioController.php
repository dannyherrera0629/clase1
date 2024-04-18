<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        return view('inicio');
    }

    public function registrar(Request $request)
    {
        // Lógica para registrar al usuario...

        // Redirigir al usuario a la vista de formularios
        return redirect()->route('formularios.index');
    }
}
