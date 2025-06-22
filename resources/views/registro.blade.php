<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Shakti</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="auth-body">
    <header class="navbar">
        <img src="https://source.unsplash.com/random/40x40?logo" alt="Logo" class="logo">
        <nav class="nav">
            <a href="index.html">Inicio</a>
            <a href="#">Nosotros</a>
            <a href="#">Servicios</a>
            <a href="#">Contacto</a>
        </nav>
        <a href="login.html" class="login-icon">👤</a>
    </header>
    <div class="auth-container">
        <div class="auth-header">
            <img src="https://source.unsplash.com/random/80x80?logo" alt="Logo" />
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
            <label>Subir documento PDF (para confirmar identidad)</label>
            <input type="file" accept="application/pdf" required />
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