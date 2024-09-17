<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() 
    {
        return redirect('principal');
    }

    public function store(Request $request)
    {
        // dd($request); 
        //  dd($request->get('email'));

        // Modificar el Request
        // $request->request->add(['name' => Str::slug($request->name)]);

        // Validacion
        $this->validate($request, [
            'name' => 'required|max:30',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:6'
        ]);


        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make( $request->password )
        ]);

        // Redireccionar
        return redirect()->route('principal', auth()->user() );
    }

}
