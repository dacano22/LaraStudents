<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use PDF;

class PdfController extends Controller
{
    public function imprimirEstudiantes(Request $request) {
        $estudiantes = Estudiante::orderBy('id', 'ASC') -> get();
        $pdf = \PDF::loadView('estudiante.estudiantesPDF', ['estudiantes => $estudiantes']);
        $pdf->setPaper('carta', 'A4');

        return $pdf->stream();
    }
}
