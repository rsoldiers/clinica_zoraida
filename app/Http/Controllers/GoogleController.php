<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Auth;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
      public function logout(Request $request)
    {
        // Cerrar sesión en la aplicación
        Auth::logout();

        // Redirigir a la página deseada después de cerrar sesión
        return redirect('/')->with('message', 'Has cerrado sesión correctamente.');
    }
}

