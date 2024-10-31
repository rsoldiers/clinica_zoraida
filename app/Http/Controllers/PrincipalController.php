<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index()
    {
        return view('principal');
    }
    public function services()
    {
        return view('servicios');
    }
    public function obstetricia()
    {
        return view('subservices.obstetricia');
    }
}
