<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function index()
    {
        return view('formularios.index');
    }

    public function estudiantes()
    {
        return view('formularios.estudiantes');
    }

    public function funcionarios()
    {
        return view('formularios.funcionarios');
    }

    public function visitantes()
    {
        return view('formularios.visitantes');
    }
}
