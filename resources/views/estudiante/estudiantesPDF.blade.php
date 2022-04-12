<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de estudiantes</title>
    <link rel="stylesheet" href="{{ public_path('css/app.css') }}">
</head>
<body>
<h1 class="m-4 text-center">Tabla de estudiantes</h1>
    <table class="table text-center m-auto mb-3">
        <thead class="table-light">
            <tr class="table-success">
                <th>#</th>
                <th>Documento de identidad</th>
                <th>Nombre completo</th>
                <th>Género</th>
                <th>Fecha de ingreso</th>
                <th>Fecha de nacimiento</th>
                <th>Dirección de residencia</th>
                <th>Nombre de padre</th>
                <th>Nombre de madre</th>
                <th>Comandos</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $estudiante)
            <tr class="align-middle">
                <td>{{$estudiante -> id}}</td>
                <td>{{$estudiante -> Documento}}</td>
                <td>{{$estudiante -> Nombre}} {{$estudiante -> Apellido}}</td>
                <td>{{$estudiante -> Genero}}</td>
                <td>{{$estudiante -> FechaIngreso}}</td>
                <td>{{$estudiante -> FechaNacimiento}}</td>
                <td>{{$estudiante -> DireccionResidencia}}</td>
                <td>{{$estudiante -> NombrePadre}}</td>
                <td>{{$estudiante -> NombreMadre}}</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="10">
                    <a href="{{ url('/estudiante/create') }}" class="btn btn-success">Añadir estudiante</a>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>