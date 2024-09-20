<?php

use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\RegisterController;
use App\Models\UserGoogle;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Ruta para mostrar el formulario de registro
Route::get('/register', [RegisterController::class, 'index'])->name('register');

// Ruta para procesar el formulario de registro
Route::post('/register', [RegisterController::class, 'store']);

// Ruta para la página de inicio de sesión
Route::get('/', function () {
    return view('auth.login');
})->name('login');

// Ruta para la página principal
Route::get('/principal', [PrincipalController::class, 'index'])->name('principal');


 Route::get('/login', function () {
     return view('auth.login');
 });

 Route::post('/login-google', function () {
     return Socialite::driver('google')->redirect();
 })->name('login-google');

 Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();

    // Verifica si el usuario ya existe en la base de datos
    $existingUser = UserGoogle::where('google_id', $user->id)->first();

    if ($existingUser) {
        // Usuario ya registrado, puedes autenticarlo o actualizar los datos si es necesario
        // Aquí podrías usar Auth::login() si deseas iniciar sesión automáticamente
    } else {
        // Crea un nuevo registro en la tabla `users_google`
        UserGoogle::create([
            'name' => $user->name,
            'email' => $user->email,
            'avatar' => $user->avatar,
            'google_id' => $user->id,
        ]);
    }

    // Puedes redirigir al usuario a la página principal o a donde necesites
    return redirect()->route('principal');
})->name('google-callback');