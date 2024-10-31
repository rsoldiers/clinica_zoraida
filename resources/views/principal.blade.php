<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/icono.png" type="image/png">
    <title>Clínica Madre Zoraida</title>
    {{-- <link rel="stylesheet" href="../css/stylesLaClinica.css"> --}}
    <link rel="stylesheet" href="{{ asset('stylesLaClinica.css') }}">
    <link rel="stylesheet" href="{{ asset('/img/icono.png') }}">
</head>

<body>
    <!-- Barra de contacto superior -->
    <div class="top-bar">
        <div class="container">
            <span>Teléfono: (01) 360-3345</span>
            <span>Lunes - Sábado (8am - 8pm)</span>
            <span>info@clinicamadrezoraida.com.pe</span>
            <span>Webmail</span>
            <span><a href="#">Ingresar</a></span>
            <span><a href="{{ route('logout.google') }}" onclick="logoutGoogle()">Cerrar sesión de Google</a>
            </span>
        </div>
    </div>

    <!-- Encabezado principal con logo y menú -->
    <header class="main-header">
        <div class="container header-content">
            <div class="logo">
                <img src="../img/logo.png" alt="Logo Clínica Madre Zoraida">
            </div>
            <nav class="main-nav">
                <a href="#">Home</a>
                <a href="{{ route('principal') }}">La Clínica</a>
                <a href="{{ route('servicios') }}">Servicios</a>
                <a href="#">Staff Médico</a>
                <a href="#">Contacto</a>
            </nav>
        </div>
    </header>

    <!-- Imagen de equipo médico -->
    <section class="hero-img">
        <img src="../img/medical-team.jpg" alt="Equipo Médico">
    </section>
    <section class="hero">
        <div class="hero-bg"></div>
        <div class="hero-text">
            <h1>Clínica Madre Zoraida</h1>
        </div>
    </section>

    <!-- Sección de contenido principal -->
    <section class="content">
        <div class="container">
            <div class="intro">
                <!-- Sección del vídeo -->
                <video autoplay muted loop>
                    <source src="../img/servicios.mp4" alt="Doctor y paciente" controls width="100%">
                </video>
                <div class="intro-text">
                    <h2>Clínica Madre<br>
                        Zoraida</h2>
                    <p>Somos la Clínica con los mejores especialistas en Chosica. Contamos con más de 20 especialidades
                        médicas disponibles.</p>
                </div>
            </div>

            <h2>Historia de la Clínica Madre<br>
                Zoraida</h2>

            <div class="mission-vision">
                <div class="mission">
                    <img src="../img/mision.png" alt="Imagen de Misión">
                    <div class="text-container">
                        <h3>Misión</h3>
                        <p>Brindar servicio de calidad y humanizado, con el mejor talento humano comprometido, para
                            satisfacer a los pacientes y sus familias.</p>
                    </div>
                </div>
                <div class="vision">
                    <img src="../img/vision.png" alt="Imagen de Visión">
                    <div class="text-container">
                        <h3>Visión</h3>
                        <p>Queremos ser reconocidos como una clínica de referencia por la calidad de nuestras
                            prestaciones y por la excelencia de nuestro personal.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pie de página -->
    <footer>
        <div class="footer-content">
            <img src="../img/logo.png" alt="Logo Clínica Madre Zoraida">
            <p>Somos la Clínica con los mejores especialistas en Chosica. Contamos con más de 20 especialidades médicas
                disponibles.</p>
            <p>Jr. Chosica Nº316 esquina Trujillo Sur - Chosica 15466 Chosica, Perú</p>
            <p>(01) 360-3345 | info@clinicamadrezoraida.com.pe</p>
            <p>Lunes a sábado de 8:00 a.m. a 8:00 p.m. - Domingos: Cerrado</p>
        </div>
    </footer>
</body>

</html>

<script src="https://apis.google.com/js/platform.js" async defer></script>
<script>
    function logoutGoogle() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
            console.log('User signed out.');
        });
    }
</script>
