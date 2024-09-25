<<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClinicaVet - Página de Inicio</title>
    <!-- Vincular la hoja de estilos CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="container">
        <!-- Banner principal con fondo de color o imagen -->
        <div class="banner">
            <h1>Bienvenidos a ClinicaVet</h1>
            <p>Cuidado y atención para tus mascotas</p>
        </div>

        <!-- Opciones de ingreso -->
        <div class="options">
            <div class="option">
                <h2>Ingresar como Administrador</h2>
                <a href="/admin/login" class="btn">Login Administrador</a>
            </div>
            <div class="option">
                <h2>Ver Servicios</h2>
                <a href="/servicios" class="btn">Ver Servicios</a>
            </div>
        </div>
    </div>

</body>
</html>