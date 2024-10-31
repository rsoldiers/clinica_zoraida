<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/icono.png" type="image/png">
    <title>Servicios</title>
    <link rel="stylesheet" href="../css/stylesServicios.css">
    <link rel="stylesheet" href="{{ asset('stylesServicios.css') }}">
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

    <!-- Servicios -->
    <section class="hero-img">
        <img src="../img/servicios.png" alt="Servicios">
    </section>
    <section class="hero">
        <div class="hero-bg"></div>
        <div class="hero-text">
            <h1>Nuestros Servicios</h1>
        </div>
    </section>

    <!-- Sección de contenido principal -->
    <!-- Especialidades Médicas -->
    <div class="especialidades-container">
        <div class="especialidades-cuadro">
            <h2>Especialidades Médicas</h2>
            <div class="especialidades-items">
                <a href="{{ route('obstetricia') }}" class="especialidad-link">
                    <div class="especialidad-item">
                        <img src="../img/especialidad1.png" alt="Especialidad 1" class="item-imagen">
                        <h3>OBSTETRICIA</h3>
                        <p>Nos encargamos del embarazo, el parto y el puerperio, incluyendo las situaciones de riesgo
                            que requieran de una intervención quirúrgica.</p>
                    </div>
                </a>
                <a href="../views/SubServicios/Pediatria.html" class="especialidad-link">
                    <div class="especialidad-item">
                        <img src="../img/especialidad2.png" alt="Especialidad 2" class="item-imagen">
                        <h3>PEDIATRÍA</h3>
                        <p>Brindamos atención médica a bebés, niños y adolescentes hasta los 16 años de edad.</p>
                    </div>
                </a>
                <a href="../views/SubServicios/GinecoObstetricia.html" class="especialidad-link">
                    <div class="especialidad-item">
                        <img src="../img/especialidad3.png" alt="Especialidad 3" class="item-imagen">
                        <h3>GINECO - OBSTETRICIA</h3>
                        <p>Brindamos atención a todas las patologías relacionadas con los órganos femeninos como el
                            útero, la vagina y los ovarios, y también de la prevención de enfermedades futuras.</p>
                    </div>
                </a>
                <a href="../views/SubServicios/Cardiologia.html" class="especialidad-link">
                    <div class="especialidad-item">
                        <img src="../img/especialidad4.png" alt="Especialidad 4" class="item-imagen">
                        <h3>CARDIOLOGÍA</h3>
                        <p>Brindamos estudio, diagnóstico y tratamiento de las afecciones del corazón y el aparato
                            circulatorio.</p>
                    </div>
                </a>
                <a href="../views/SubServicios/CirugiaGeneral.html" class="especialidad-link">
                    <div class="especialidad-item">
                        <img src="../img/especialidad5.png" alt="Especialidad 5" class="item-imagen">
                        <h3>CIRUGÍA GENERAL</h3>
                        <p>Brindamos atención a todas aquellas patologías del aparato digestivo, sistema endocrino,
                            órganos intraabdominales y pared abdominal que requieren de una intervención quirúrgica.</p>
                    </div>
                </a>
                <a href="../views/SubServicios/MedicinaGeneral.html" class="especialidad-link">
                    <div class="especialidad-item">
                        <img src="../img/especialidad6.png" alt="Especialidad 6" class="item-imagen">
                        <h3>MEDICINA GENERAL</h3>
                        <p>Brindamos el primer nivel de atención médica y es imprescindible para la prevención,
                            detección, tratamiento y seguimiento de las enfermedades crónicas.</p>
                    </div>
                </a>
                <a href="../views/SubServicios/Endocrinologia.html" class="especialidad-link">
                    <div class="especialidad-item">
                        <img src="../img/especialidad7.png" alt="Especialidad 7" class="item-imagen">
                        <h3>ENDOCRINOLOGÍA</h3>
                        <p>Brindamos atención al sistema endocrino y las enfermedades provocadas por un funcionamiento
                            inadecuado del mismo.</p>
                    </div>
                </a>
                <a href="../views/SubServicios/Neumologia.html" class="especialidad-link">
                    <div class="especialidad-item">
                        <img src="../img/especialidad8.jpg" alt="Especialidad 8" class="item-imagen">
                        <h3>NEUMOLOGÍA</h3>
                        <p>Brindamos un servicio que contribuye a la prevención, el diagnóstico y tratamiento de las
                            enfermedades que afectan al sistema respiratorio.</p>
                    </div>
                </a>
                <a href="../views/SubServicios/Otorrinolaringologia.html" class="especialidad-link">
                    <div class="especialidad-item">
                        <img src="../img/especialidad9.jpg" alt="Especialidad 9" class="item-imagen">
                        <h3>OTORRINOLARINGOLOGÍA</h3>
                        <p>Brindamos el manejo y tratamiento, tanto médico como quirúrgico, de pacientes con
                            enfermedades y alteraciones del oído, nariz, garganta y estructuras relacionadas de la
                            cabeza y del cuello.</p>
                    </div>
                </a>
                <a href="../views/SubServicios/Odontologia.html" class="especialidad-link">
                    <div class="especialidad-item">
                        <img src="../img/especialidad10.png" alt="Especialidad 10" class="item-imagen">
                        <h3>ODONTOLOGÍA</h3>
                        <p>Brindamos el servicio de la prevención, el diagnóstico y tratamiento de las enfermedades que
                            afectan a cualquier parte de la estructura mandibular: Dientes. Encías.</p>
                    </div>
                </a>
                <a href="../views/SubServicios/Psicoprofilaxis.html" class="especialidad-link">
                    <div class="especialidad-item">
                        <img src="../img/especialidad11.jpg" alt="Especialidad 11" class="item-imagen">
                        <h3>PSICOPROFILAXIS OBSTÉTRICA</h3>
                        <p>Brindamos un programa de preparación integral físico, teórico y Psicoafectivo que se brinda
                            durante la gestación, parto y post parto.</p>
                    </div>
                </a>
                <a href="../views/SubServicios/MedicinaFisica.html" class="especialidad-link">
                    <div class="especialidad-item">
                        <img src="../img/especialidad12.png" alt="Especialidad 12" class="item-imagen">
                        <h3>MEDICINA FÍSICA Y REHABILITACIÓN</h3>
                        <p>Brindamos el diagnóstico, prevención y tratamiento de los pacientes con limitaciones
                            funcionales agudas o crónicas, que se presentan como resultado de enfermedades o lesiones.
                        </p>
                    </div>
                </a>
                <a href="../views/SubServicios/Psicologia.html" class="especialidad-link">
                    <div class="especialidad-item">
                        <img src="../img/especialidad13.png" alt="Especialidad 13" class="item-imagen">
                        <h3>PSICOLOGÍA</h3>
                        <p>Brindamos el servicio de analizar los procesos mentales y del comportamiento de los seres
                            humanos y sus interacciones con el ambiente físico y social.</p>
                    </div>
                </a>
                <a href="../views/SubServicios/Oftalmologia.html" class="especialidad-link">
                    <div class="especialidad-item">
                        <img src="../img/especialidad14.png" alt="Especialidad 14" class="item-imagen">
                        <h3>OFTALMOLOGÍA</h3>
                        <p>Brindamos el diagnostico, tratamiento y prevención de las enfermedades oculares, empleando
                            para ello medicamentos, cristales graduados, intervenciones quirúrgicas, Láser, y todos los
                            demás instrumentos de que dispone la medicina actual.</p>
                    </div>
                </a>
                <a href="../views/SubServicios/Traumatologia.html" class="especialidad-link">
                    <div class="especialidad-item">
                        <img src="../img/especialidad15.png" alt="Especialidad 15" class="item-imagen">
                        <h3>TRAUMATOLOGÍA</h3>
                        <p>Brindamos el servicio de prevención, diagnóstico y tratamiento de las enfermedades y lesiones
                            que afectan al sistema músculo esquelético, es decir, a huesos, músculos y tendones.</p>
                    </div>
                </a>
                <a href="../views/SubServicios/Podologia.html" class="especialidad-link">
                    <div class="especialidad-item">
                        <img src="../img/especialidad16.png" alt="Especialidad 16" class="item-imagen">
                        <h3>PODOLOGÍA</h3>
                        <p>Brindamos la prevención, al diagnóstico y tratamiento de las afecciones y deformidades de los
                            pies, mediante procedimientos terapéuticos podológicos.</p>
                    </div>
                </a>
                <a href="../views/SubServicios/Urologia.html" class="especialidad-link">
                    <div class="especialidad-item">
                        <img src="../img/especialidad17.png" alt="Especialidad 17" class="item-imagen">
                        <h3>UROLOGÍA</h3>
                        <p>Brindamos el estudio, diagnóstico y tratamiento de las patologías que afectan al aparato
                            urinario, glándulas suprarrenales y retroperitoneo de ambos sexos, así como el aparato
                            reproductor masculino.</p>
                    </div>
                </a>
                <a href="../views/SubServicios/Neurologia.html" class="especialidad-link">
                    <div class="especialidad-item">
                        <img src="../img/especialidad18.jpg" alt="Especialidad 18" class="item-imagen">
                        <h3>NEUROLOGÍA</h3>
                        <p>Brindamos tratamientos a los trastornos del sistema nervioso (cerebro, médula espinal y
                            nervios periféricos), trastornos musculares, y dolor, especialmente dolor de cabeza.</p>
                    </div>
                </a>
                <a href="../views/SubServicios/Gastroenterologia.html" class="especialidad-link">
                    <div class="especialidad-item">
                        <img src="../img/especialidad19.jpg" alt="Especialidad 19" class="item-imagen">
                        <h3>GASTROENTEROLOGÍA</h3>
                        <p>Brindamos la prevención, al diagnóstico y tratamiento de las enfermedades del aparato
                            digestivo y órganos asociados, conformado por: esófago, estómago, hígado y vías biliares,
                            intestino delgado (duodeno, yeyuno, íleon), colon y recto.</p>
                    </div>
                </a>
                <a href="../views/SubServicios/Dermatologia.html" class="especialidad-link">
                    <div class="especialidad-item">
                        <img src="../img/especialidad20.jpg" alt="Especialidad 20" class="item-imagen">
                        <h3>DERMATOLOGÍA</h3>
                        <p>Brindamos diagnóstico y tratamiento de todas aquellas patologías o afecciones de la piel, el
                            órgano más extenso del cuerpo.</p>
                    </div>
                </a>
                <a href="../views/SubServicios/Neurocirugia.html" class="especialidad-link">
                    <div class="especialidad-item">
                        <img src="../img/especialidad21.jpg" alt="Especialidad 21" class="item-imagen">
                        <h3>NEUROCIRUGÍA</h3>
                        <p>Brindamos el estudio, diagnóstico y tratamiento de las enfermedades que afectan al sistema
                            nervioso que requieren o pueden requerir un tratamiento quirúrgico en algún momento de su
                            evolución.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Apoyo al Diagnóstico -->
    <div class="seccion-contenedor">
        <div class="cuadro-contenido">
            <h2>Apoyo al Diagnóstico</h2>
            <div class="contenedor-items">
                <div class="item">
                    <a href="../views/SubServicios/Ecografia.html" class="especialidad-link">
                        <img src="../img/diagnostico1.png" alt="Diagnóstico 1" class="item-imagen">
                        <h3>ECOGRAFÍA</h3>
                        <p>Brindamos el servicio de diagnóstico por imagen que utiliza ondas sonoras (ultrasonido) para
                            crear imágenes de órganos, tejidos y estructuras del interior del cuerpo. A diferencia de
                            las
                            radiografías, la ecografía no utiliza radiación.</p>
                    </a>
                </div>
                <div class="item">
                    <a href="../views/SubServicios/Laboratorio.html" class="especialidad-link">
                        <img src="../img/diagnostico2.jpg" alt="Diagnóstico 2" class="item-imagen">
                        <h3>LABORATORIO</h3>
                        <p>Brindamos con un servicio equipado con diversos instrumentos y elementos de medida o equipo,
                            en
                            orden a satisfacer las demandas y necesidades de la salud.</p>
                    </a>
                </div>
                <div class="item">
                    <a href="../views/SubServicios/RayosX.html" class="especialidad-link">
                        <img src="../img/diagnostico3.png" alt="Diagnóstico 3" class="item-imagen">
                        <h3>RAYOS X</h3>
                        <p>Brindamos con el servicio de rayos X que utilizan ondas electromagnéticas para mostrar el
                            interior de su cuerpo. Se utilizan para ver fracturas, entre otros usos.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Servicios Auxiliares -->
    <div class="serviciosauxiliares">
        <div class="cuadro-servicios">
            <h2>Servicios Auxiliares</h2>
            <div class="servicios-container">
                <div class="servicio-item">
                    <img src="../img/servicio1.jpg" alt="Servicio 1" class="servicio-imagen">
                    <h3>FARMACIA</h3>
                    <p>Brindamos el servicio de farmacia en el cual se venden diferentes tipos de productos
                        relacionados
                        con la salud, especialmente medicamentos.</p>
                </div>
                <div class="servicio-item">
                    <img src="../img/servicio2.png" alt="Servicio 2" class="servicio-imagen">
                    <h3>TÓPICO DE EMERGENCIAS</h3>
                    <p>El tópico de enfermería tiene como función brindar una atención de calidad e inmediata a los
                        pacientes y personal que requiera sus servicios.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Somos la Clínica Madre Zoraida -->
    <div class="equipovideo">
        <div class="equipovideo-bg"></div>
        <div class="equipovideo-overlay"></div>
        <div class="equipovideo-text">
            <h1>Somos la Clínica Madre Zoraida</h1>
        </div>
        <div class="equipovideo-img">
            <video autoplay muted loop>
                <source src="../img/servicios.mp4" type="video/mp4">
            </video>
        </div>
    </div>


    <!-- Pie de página -->
    <footer>
        <div class="footer-content">
            <img src="../img/logo.png" alt="Logo Clínica Madre Zoraida">
            <p>Somos la Clínica con los mejores especialistas en Chosica. Contamos con más de 20 especialidades
                médicas
                disponibles.</p>
            <p>Jr. Chosica Nº316 esquina Trujillo Sur - Chosica 15466 Chosica, Perú</p>
            <p>(01) 360-3345 | info@clinicamadrezoraida.com.pe</p>
            <p>Lunes a sábado de 8:00 a.m. a 8:00 p.m. - Domingos: Cerrado</p>
        </div>
    </footer>
</body>

</html>
