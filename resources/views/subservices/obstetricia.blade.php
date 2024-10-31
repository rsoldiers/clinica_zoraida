<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/icono.png" type="image/png">
    <title>Obstetricia</title>
    <link rel="stylesheet" href="../../css/stylesSubServicios.css">
    <link rel="stylesheet" href="{{ asset('stylesSubServicios.css') }}">
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
        </div>
    </div>

    <!-- Encabezado principal con logo y menú -->
    <header class="main-header">
        <div class="container header-content">
            <div class="logo">
                <img src="../../img/logo.png" alt="Logo Clínica Madre Zoraida">
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

    <!-- SubServicios -->
    <section class="hero-img">
        <img src="../../img/equipovideo.jpg" alt="SubServicios">
    </section>
    <section class="hero">
        <div class="hero-bg"></div>
        <div class="hero-text">
            <h1>Obstetricia</h1>
        </div>
    </section>
    <script src="path/to/carrusel.js"></script>
    <!-- Sección de contenido principal -->
    <!-- Carrusel de imágenes -->
    <section class="carrusel">
        <div class="imagen-grande">
            <img id="imagen-principal" src="../../img/especialidad1.png" alt="Imagen Principal">
        </div>
        <div class="miniaturas">
            <img src="../../img/obs1.jpg" alt="Imagen 2" class="miniatura" onclick="cambiarImagen(this)">
            <img src="../../img/especialidad1.png" alt="Imagen 1" class="miniatura" onclick="cambiarImagen(this)">
            <img src="../../img/obs2.jpg" alt="Imagen 3" class="miniatura" onclick="cambiarImagen(this)">
        </div>
    </section>

    <!-- Servicio y Descripción -->
    <section class="servicio-descripcion">
        <div class="container-servicio">
            <h2>Obstetricia</h2>
            <p>
                Cuando hablamos del embarazo suele venirnos a la mente la figura solo del ginecólogo. Sin embargo,
                muchas veces nos olvidamos de la participación de la obstetra. Su disciplina, <b>la obstetricia, es la
                    encargada de una atención integral durante el período de gestación, parto y puerperio.</b>
            </p>
            </br>
            <p>
                Es una de las especialidades médicas más antiguas. No es solo una carrera encargada de velar por la
                salud de la mujer en su etapa reproductiva, sino también por la prevención de enfermedades, la
                orientación para prevenirlas y tienen la capacidad para tratarlas conjuntamente con el área médica. Los
                obstetras están capacitados para brindar asesoría y orientar en educación sexual y reproductiva, además
                de otros como la estimulación prenatal, realizar exámenes preventivos como el papanicolaou para la
                detección del cáncer de cérvix y la detección de cáncer de mama.
            </p>
        </div>
    </section>

    <!-- Extras -->
    <section class="extras">
        <div class="container-extras">
            <h2>Realizamos las siguientes Consultas:</h2>
            <ul>
                <li>Control de Embarazo</li>
                <li>Embarazo Ectópico</li>
                <li>Endometritis Puerperal</li>
                <li>Ruptura Prematura de Membrana Ovular</li>
                <li>Trastornos Hipertensivos del Embarazo</li>
            </ul>
        </div>
    </section>

    <!-- Pie de página -->
    <footer>
        <div class="footer-content">
            <img src="../../img/logo.png" alt="Logo Clínica Madre Zoraida">
            <p>Somos la Clínica con los mejores especialistas en Chosica. Contamos con más de 20 especialidades
                médicas
                disponibles.</p>
            <p>Jr. Chosica Nº316 esquina Trujillo Sur - Chosica 15466 Chosica, Perú</p>
            <p>(01) 360-3345 | info@clinicamadrezoraida.com.pe</p>
            <p>Lunes a sábado de 8:00 a.m. a 8:00 p.m. - Domingos: Cerrado</p>
        </div>
    </footer>
    <script src="../../js/carrusel.js"></script>
</body>

</html>
