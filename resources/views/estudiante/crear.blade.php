@extends('plantilla')

@section('seccion')
<section>
    <h1 class="m-4 text-center">Añadir un estudiante</h1>
    <div class="w-50 m-auto border rounded">
        <form action="{{ url('/estudiante') }}" method="POST">
            @csrf
            <div class="my-3 d-flex justify-content-center">
                <div class="w-25 me-3">
                    <label for="Documento" class="form-label">Documento de identidad</label>
                    <input type="text" class="form-control" name="Documento" id="Documento" autocomplete="off" required>
                </div>
                <div class="w-25 me-3">
                    <label for="Nombre" class="form-label">Nombre del estudiante</label>
                    <input type="text" class="form-control" name="Nombre" id="Nombre" autocomplete="off" required>
                </div>
                <div class="w-25">
                    <label for="Apellido" class="form-label">Apellido del estudiante</label>
                    <input type="text" class="form-control" name="Apellido" id="Apellido" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3 d-flex justify-content-center">
                <div class="w-25 me-3">
                    <label for="Genero" class="form-label">Género</label>
                    <select class="form-select" name="Genero" id="Genero">
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                    </select>
                </div>
                <div class="w-25 me-3">
                    <label for="FechaNacimiento" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="FechaNacimiento" id="FechaNacimiento" required>
                </div>
                <div class="w-25">
                    <label for="DireccionResidencia" class="form-label">Dirección de residencia</label>
                    <input type="text" class="form-control" name="DireccionResidencia" id="DireccionResidencia" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3 d-flex justify-content-center">
                <div class="w-25 me-3">
                    <label for="NombrePadre" class="form-label">Nombre completo del padre</label>
                    <input type="text" class="form-control" name="NombrePadre" id="NombrePadre" autocomplete="off" required>
                </div>
                <div class="w-25 me-3">
                    <label for="NombreMadre" class="form-label">Nombre completo de la madre</label>
                    <input type="text" class="form-control" name="NombreMadre" id="NombreMadre" autocomplete="off" required>
                </div>
                <div class="w-25">
                    <label for="FechaIngreso" class="form-label">Fecha de ingreso</label>
                    <input type="date" class="form-control" name="FechaIngreso" id="FechaIngreso" required>
                </div>
            </div>
            <div class="mb-3 d-flex justify-content-center">
                <input type="submit" class="btn btn-success me-3" value="Crear estudiante">
                <button class="btn btn-danger">Limpiar formulario</button>
            </div>
        </form>
    </div>
</section>
@endsection