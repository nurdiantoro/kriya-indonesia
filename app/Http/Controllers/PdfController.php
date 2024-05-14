<?php

namespace App\Http\Controllers;

use App\Models\Exhibitor;
use App\Models\Exhibitor_form_a;
use Barryvdh\DomPDF\Facade\Pdf;
// use Spatie\LaravelPdf\Facades\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{

    public function index($id)
    {
        $data = Exhibitor_form_a::find($id);
        $nama_exhibitor = $data->perusahaan;
        $pdf = Pdf::loadView('form_a_pdf', ['exhibitor' => $data]);
        return $pdf->download('Form A - ' . $nama_exhibitor . '.pdf');
    }

    public function view()
    {
        $data = Exhibitor_form_a::find(1);
        return view('test_pdf', ['exhibitor' => $data]);
    }
}
