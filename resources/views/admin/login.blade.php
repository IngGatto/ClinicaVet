<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador Login</title>
    <link rel="stylesheet" href="/css/style.css"> <!-- Hacemos referencia a la hoja de estilos -->
</head>
<body>

    <div class="login-container">
        <h2>Acceso Administrador</h2>
        <form method="POST" action="{{ route('admin.authenticate') }}">
            @csrf
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit" class="btn">Ingresar</button>
        </form>
    </div>

</body>
</html>