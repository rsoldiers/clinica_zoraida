<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('login.css') }}">
    <title>Citas médicas Online</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <!-- Formulario de inicio de sesión -->
                <form id="loginForm" method="POST" class="sign-in-form">
                    <h2 class="title">Inicia Sesión</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="name" placeholder="Name" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required />
                    </div>
                    <input type="submit" value="Login" class="btn solid" />
                    <p class="social-text">O ingrese con su Cuenta de Google</p>
                </form>
                <div class="social-media">
                    <form method="POST" action="/login-google" novalidate>
                        @csrf
                        <button class="social-icon">
                            <i class="fab fa-google"></i>
                        </button>
                    </form>
                </div>

                <!-- Formulario de registro -->
                <form action="{{ route('register') }}" method="POST" class="sign-up-form" novalidate>
                    @csrf
                    <h2 class="title">Regístrate</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="name" placeholder="Name" id="name" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" id="email" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" id="password" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password_confirmation" placeholder="Confirmar password" id="password_confirmation" required />
                    </div>
                    <input type="submit" class="btn" value="Sign up" />
                    <p class="social-text">O crea tu cuenta con Google</p>
                </form>
                

                <!-- Mensaje de confirmación -->
                {{-- <div id="message" style="display: none; padding: 20px; margin-top: 20px;"></div> --}}
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>¿Eres nuevo?</h3>
                    <p></p>
                    <button class="btn transparent" id="sign-up-btn">
                        Regístrate
                    </button>
                </div>
                <img src="#" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>¿Tienes cuenta?</h3>
                    <p></p>
                    <button class="btn transparent" id="sign-in-btn">
                        Inicia Sesión
                    </button>
                </div>
                <img src="#" class="image" alt="" />
            </div>
        </div>
    </div>
    <!-- Script que trabaja con app para el movimiento de las imágenes -->
    <script src="{{ asset('app.js') }}"></script>
</body>

</html>
