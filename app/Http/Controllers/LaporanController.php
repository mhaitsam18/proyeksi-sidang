<?php

namespace App\Http\Controllers;

use App\Models\PrediksiSidang;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('dashboard.prediksiSidang.laporan', [
            'title' => 'Dashboard | Laporan Sidang',
            'datas' => PrediksiSidang::filter(request(['search']))->orderBy('nama', 'asc')->simplePaginate(20)->withQueryString()
        ]);
    }
}
