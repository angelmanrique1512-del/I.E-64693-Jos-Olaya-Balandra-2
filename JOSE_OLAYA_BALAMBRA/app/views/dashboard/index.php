<?php if(!isset($_SESSION['user'])) header('Location: '.BASE_URL.'/login'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>SISTEMA JOSE OLAYA</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/style.css">
</head>
<body>
    <div class="navbar">
        <h2>I.E. 64693 JOSE OLAYA BALANDRA</h2>
        <div>DIRECTORA: <?= $_SESSION['user'] ?> | <a href="<?= BASE_URL ?>/login/logout" style="color:white;">Cerrar Sesión</a></div>
    </div>
    <div class="sidebar">
        <a href="#" onclick="openModal('lista')">LISTA DE DOCENTES</a>
        <a href="#" onclick="openModal('historial')">HISTORIAL</a>
        <a href="<?= BASE_URL ?>/dashboard">INICIO</a>
    </div>
    <div class="main-content">
        <div class="card-registro">
            <h1 style="color:var(--azul-header)">INGRESA TU NUMERO DE DNI</h1>
            <form action="<?= BASE_URL ?>/dashboard/marcar" method="POST">
                <input type="text" name="dni" class="dni-input" placeholder="00000000" maxlength="8" required>
                <button type="submit" class="btn-submit">REGISTRAR ASISTENCIA</button>
            </form>
        </div>
        <table>
            <thead><tr><th>Nombre</th><th>Fecha</th><th>Estado</th></tr></thead>
            <tbody>
                <tr><td>MIGUEL PONCE</td><td>13/05/26</td><td style="color:green; font-weight:bold;">TEMPRANO</td></tr>
                <tr><td>ROSA MARIEL</td><td>13/05/26</td><td style="color:green; font-weight:bold;">TEMPRANO</td></tr>
                <tr><td>RAUL TORRES</td><td>13/05/26</td><td style="color:orange; font-weight:bold;">TARDE</td></tr>
            </tbody>
        </table>
    </div>

    <div id="modalBox" class="modal">
        <div class="modal-content">
            <h2 id="modalTitle"></h2>
            <div id="modalBody"></div>
            <button onclick="document.getElementById('modalBox').style.display='none'">Cerrar</button>
        </div>
    </div>

    <script>
        function openModal(type) {
            document.getElementById('modalBox').style.display = 'block';
            if(type == 'lista') {
                document.getElementById('modalTitle').innerText = 'Lista de Docentes (MySQL)';
                document.getElementById('modalBody').innerHTML = '<ul><li>MIGUEL PONCE</li><li>ROSA MARIEL</li><li>RAUL TORRES</li><li>ANA LUZ VALDÉS</li><li>...y 6 más</li></ul>';
            } else {
                document.getElementById('modalTitle').innerText = 'Historial General';
                document.getElementById('modalBody').innerHTML = '<p>Cargando registros de la tabla asistencia...</p>';
            }
        }
    </script>
</body>
</html>
