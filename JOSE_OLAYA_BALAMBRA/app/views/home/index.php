<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        Sistema de Asistencia
    </title>

    <link rel="stylesheet"
          href="<?= BASE_URL ?>/public/css/style.css">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

    <!-- NAVBAR -->
    <header class="navbar-home">

        <div class="logo-home">

            I.E.64693 JOSE OLAYA BALANDRA

        </div>

        <nav>

            <a href="#">Inicio</a>

            <a href="#">Servicios</a>

            <a href="#">Docentes</a>

            <a href="#">Contacto</a>

        </nav>

    </header>

    <!-- HERO -->
    <section class="hero">

        <div class="hero-text">

            <h1>
                SISTEMA DE <br>
                ASISTENCIA DOCENTE
            </h1>

            <p>
                Plataforma de registro y control
                de asistencia para docentes
                de la Institución Educativa
                Jose Olaya Balandra.
            </p>

            <a href="<?= BASE_URL ?>/login"
               class="btn-home">

                INGRESAR 

            </a>

        </div>

        <div class="hero-image">

            <img src="<?= BASE_URL ?>/public/img/insignia.png"
                 alt="Escuela">

        </div>

    </section>

    <!-- CARDS -->
    <section class="cards-home">

        <div class="card-home">

            <i class="fa-solid fa-user-check"></i>

            <h3>
                Registro Rápido
            </h3>

            <p>
                Los docentes registran
                asistencia mediante DNI.
            </p>

        </div>

        <div class="card-home">

            <i class="fa-solid fa-chart-column"></i>

            <h3>
                Reportes
            </h3>

            <p>
                Visualiza asistencias
                registradas diariamente.
            </p>

        </div>

        <div class="card-home">

            <i class="fa-solid fa-school"></i>

            <h3>
                Gestión Escolar
            </h3>

            <p>
                Plataforma moderna para
                mejorar el control institucional.
            </p>

        </div>

    </section>

</body>

</html>