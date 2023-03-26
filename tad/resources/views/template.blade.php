<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>

<body class="bg-primary bg-opacity-10">
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="{{ route('mostrarTrabajadores') }}">agargon2</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('crearEmpleados') }}">Crear empleado</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('crearGerentes') }}">Crear gerente</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row g-0">
        <div class="col-2"></div>
        <div class="col-8 p-4">
            <p class="h2 my-4">@yield('title')</p>
            @yield('content')
        </div>
        <div class="col-2"></div>
    </div>
    <footer class="fixed-bottom bg-primary d-flex justify-content-center text-white p-3">
        <div>
            <span>&copy; agargon2 | Alberto Garc&iacute;a Gonz&aacute;lez | TAD - 2023</span>
        </div>
    </footer>
</body>

</html>
