<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{

    public function index(){
        return view('auth.login');
    }


    public function login(Request $request)
    {
        // Validar los datos
        $users = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        // dd($request);
        // Intentar iniciar sesión
        if (Auth::attempt($users)) {
            // Regenerar sesión
            $request->session()->regenerate();

            // Redireccionar al dashboard u otra página
            return redirect()->route('principal');
        }

        // Si falla, volver a la página de inicio de sesión con error
        return back()->withErrors([
            'name' => 'Las credenciales no coinciden.',
        ]);
    }
}
