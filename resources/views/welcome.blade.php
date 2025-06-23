<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shakti</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body class="bg-gray-900 text-white">
    <header class="navbar">
        <img src="" alt="Logo" class="logo">
        <nav class="nav">
            <a href="/">Inicio</a>
            <a href="#">Nosotros</a>
            <a href="#">Servicios</a>
            <a href="#">Contacto</a>
        </nav>
        <a href="{{ route('login') }}" class="login-icon">👤</a>

    </header>
    <main class="hero">
        <h1>Bienvenido a Nuestro Sitio Shakti</h1>
        <p>Tu bienestar es primero</p>
        <div class="hero-buttons">
            <a href="#" class="primary-btn">Conocer más</a>
            <a href="#" class="secondary-btn">Contáctanos</a>
        </div>
    </main>
</body>

</html>
