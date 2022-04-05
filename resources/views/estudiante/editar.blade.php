@extends('plantilla')

@section('seccion')
<section>
    <h1 class="m-4 text-center">Editar datos de estudiante</h1>
    <table class="table text-center m-auto">
        <thead class="table-light">
            <tr class="table-success">
                <th>Documento de identidad</th>
                <th>Nombre</th>
                <th>Apellido</th>
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
            <tr class="align-middle">
                <form action="{{ url('/estudiante/'.$estudiante->id) }}" method="POST">
                    {{ method_field('PATCH') }}
                    @csrf
                    <td><input class="form-control" type="text" name="Documento" id="Documento" value="{{$estudiante->Documento}}" required></td>
                    <td><input class="form-control" type="text" name="Nombre" id="Nombre" value="{{$estudiante->Nombre}}" required></td>
                    <td><input class="form-control" type="text" name="Apellido" id="Apellido" value="{{$estudiante->Apellido}}" required></td>
                    <td><input class="form-control" type="text" name="Genero" id="Genero" value="{{$estudiante->Genero}}" required></td>
                    <td><input class="form-control" type="date" name="FechaIngreso" id="FechaIngreso" value="{{$estudiante->FechaIngreso}}" required></td>
                    <td><input class="form-control" type="date" name="FechaNacimiento" id="FechaNacimiento" value="{{$estudiante->FechaNacimiento}}" required></td>
                    <td><input class="form-control" type="text" name="DireccionResidencia" id="DireccionResidencia" value="{{$estudiante->DireccionResidencia}}" required></td>
                    <td><input class="form-control" type="text" name="NombrePadre" id="NombrePadre" value="{{$estudiante->NombrePadre}}" required></td>
                    <td><input class="form-control" type="text" name="NombreMadre" id="NombreMadre" value="{{$estudiante->NombreMadre}}" required></td>
                    <td>
                        <input class="btn btn-primary" type="submit" value="Guardar"></input>
                    </td>
                </form>
            </tr>
        </tbody>
    </table>
</section>
@endsection