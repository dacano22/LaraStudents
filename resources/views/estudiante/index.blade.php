@extends('plantilla')

@section('seccion')
<section>
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
                <td>
                    <form action="{{ url('/estudiante/'.$estudiante->id) }}" method="POST">
                        <a href="{{ url('/estudiante/'.$estudiante->id.'/edit') }}" class="btn btn-primary">Editar</a>
                        @csrf
                        {{ method_field('DELETE') }}
                        <input onclick="return confirm('¿Estás seguro de eliminar el estudiante {{$estudiante -> Nombre}}?')" class="btn btn-danger" type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
            @endforeach
            <tr>
                <td colspan="10">
                    <a href="{{ url('/estudiante/create') }}" class="btn btn-success">Añadir estudiante</a>
                </td>
            </tr>
        </tbody>
    </table>
    {!! $estudiantes->links() !!}
</section>
@endsection