<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion-Shakti</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body class="auth-body">

    @include('complements.usuaria.nav')

    <div class="auth-container">
        <div class="auth-header">
            <img src="{{ asset('img/LOGO SHAKTI.png') }}" alt="Logo" />
            <h1>Bienvenido</h1>
        </div>
        <form class="auth-form">
            <label>Correo electrónico</label>
            <input type="email" placeholder="correo@dominio.com" required />
            <label>Contraseña</label>
            <input type="password" placeholder="••••••••" required />
            <label for="recordar_contra">
                <input type="checkbox" name="recordar_contra" id="recordar_contra" />
                Recordar Contraseña
            </label>
            <button type="checkbox">Ingresar</button>
        </form>
        <div class="auth-footer">
            <a href="#">¿Olvidaste tu contraseña?</a>
            <a href="{{ route('registro') }}">¿No tienes una cuenta? Regístrate</a>

        </div>
    </div>
</body>

</html>
