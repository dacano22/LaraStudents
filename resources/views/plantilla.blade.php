<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de estudiantes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery-3.6.0.js') }}"></script>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid d-flex justify-content-between">
            <a class="navbar-brand" href="#">Daniel Cano</a>
            <div class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar" id="buscar">
                <button class="btn btn-outline-success" onclick="buscarGoogle()">Buscar</button>
            </div>
        </div>
    </nav>

    @yield('seccion')
</body>

<script>
    function buscarGoogle() {
        var text = $('#buscar').val();
        
        window.open('http://google.com/search?q=' + text);
    }
</script>

</html>