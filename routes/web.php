<?php

use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\RegisterController;


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

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/principal', [PrincipalController::class, 'index']);


// Route::get('/login', function () {
//     return view('auth.login');
// });

// Route::post('/login-google', function () {
//     return Socialite::driver('google')->redirect();
// })->name('login-google');

// Route::get('/google-callback', function () {
//     if (Session::has('user_data')) {
//         // Si el usuario no está autenticado, redirígelo a la página de inicio de sesión
//         return view('auth.login');
//     }

//     $user = Socialite::driver('google')->user();
    
//     // Almacenar los datos del usuario en la sesión
//     Session::put('user_data', [
//         'name' => $user->name,
//         'avatar' => $user->avatar,
//         'email' => $user->email,
//         'user_id' => $user->id,
//     ]);

//     $userData = [
//         'name' => $user->name,
//         'nickname' => $user->nickname,
//         'password' => $user->token,
//         'avatar' => $user->avatar,
//         'email' => $user->email,
//         'external_id' => "CORRECTO",
//         'external_auth' => 'Google', //autenticación externa fue a través de Google
//     ];

//     // URL del endpoint de tu API en Laravel donde quieres insertar los datos
//     $url = 'https://saludgeoapi.up.railway.app/users/';

//     try {
//         // Realizar la solicitud POST
//         $response = Http::withHeaders([
//             'accept' => 'application/json',
//             'Content-Type' => 'application/json',
//         ])->post($user, $userData);

//         if ($response->successful()) {
//             // Redirigir al usuario a la página de mapas después de la autenticación exitosa
//             return redirect('/principal');
//         } else {
//             $errorMessage = $response->body(); // Obtener el mensaje de error
//             Log::error('Error al conectar con la API: ' . $errorMessage);
//             return redirect('/principal');
//         }
//     } catch (Exception $e) {
//         // Ocurrió un error al hacer la solicitud
//         $errorMessage = $e->getMessage(); // Obtener el mensaje de error
//         Log::error('Error al conectar con la API: ' . $errorMessage);
//         return redirect()->back()->with('error', 'Hubo un problema al conectar con la API. Por favor, inténtelo de nuevo más tarde.');
//     }
// }
// );