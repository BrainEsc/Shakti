<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Shakti</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="auth-body">
    @include('complements.usuaria.nav')
    <div class="auth-container">
        <div class="auth-header">
            <img src="{{ asset('img/LOGO SHAKTI.png') }}" alt="Logo" />
            <h1>Crear cuenta</h1>
        </div>
        <form class="auth-form" enctype="multipart/form-data">
            <label>Nombre</label>
            <input type="text" placeholder="Ingrese su(s) nombre(s)" required />
            <label>Apellidos</label>
            <input type="text" placeholder="Ingrese sus apellidos" required />
            <label>Nombre de usuario</label>
            <input type="text" placeholder="Ingrese su nombre de usuario" required />
            <label>Correo electrónico</label>
            <input type="email" placeholder="Ingrese su correo electrónico" required />
            <label>Contraseña</label>
            <input type="password" placeholder="Ingrese su contraseña" required />
            <label>Confirmar contraseña</label>
            <input type="password" placeholder="Ingrese nuevamente su contraseña" required />
            <label>Fecha de nacimiento</label>
            <input type="date" required />
            <button type="submit">Enviar</button>
        </form>
        <div class="auth-footer">
            <a href="login.html">¿Ya tienes una cuenta? Inicia sesión</a>
        </div>
    </div>
</body>

</html>
