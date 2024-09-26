<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register'); // Asegúrate de que este archivo de vista exista
    }

    public function store(Request $request)
    {
        // Validación
        $this->validate($request, [
            'name' => 'required|max:30',
            'email' => 'required|unique:users|email|max:60',
            'dni'=>'required|max:10',
            'username' => 'required|unique:users|max:60',
            'password' => 'required|confirmed|min:6'
        ]);

        // Crear el usuario
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'dni' => $request->dni,
            'username' => $request-> username,
            'password' => Hash::make($request->password)
        ]);

        // Autenticación del usuario
        Auth::login($user); // Cambié a Auth::login para autenticar al usuario creado

        // Redireccionar
        return redirect()->route('login');
    }
}
