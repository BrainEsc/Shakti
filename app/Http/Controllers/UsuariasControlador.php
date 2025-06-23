<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariasControlador extends Controller
{
    public function index()
    {
        return view('registro');
    }
}
