<?php

namespace App\Http\Controllers;

use App\Models\PrediksiSidang;
use Barryvdh\DomPDF\Facade\Pdf as PdfFacade;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\Session\Session;

class PrediksiController extends Controller
{
    public function index()
    {
        return view('dashboard.prediksiSidang.prediksi', [
            'title' => 'Dashboard | Prediksi Sidang',
            'datas' => PrediksiSidang::filter(request(['search']))->orderBy('nama', 'asc')->paginate(20)->withQueryString()
        ]);
    }


    public function downloadPrediksiPdf()
    {
        $datas = PrediksiSidang::limit(20)->get();
        $pdf = PdfFacade::loadView('dashboard.prediksiSidang.prediksi-pdf', compact('datas'));
        $pdf->setPaper('A4', 'potrait');
        return $pdf->stream('prediksi-sidang.pdf');
    }

    public function upload(Request $request)
    {

        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);


        $r = $request->file('file')->store('dataset');


        return redirect()->back()->with('upload_success', 'file uploaded successfully');;
    }
}
