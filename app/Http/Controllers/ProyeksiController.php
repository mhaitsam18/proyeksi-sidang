<?php

namespace App\Http\Controllers;

use App\Models\ProyeksiSidang;
use Illuminate\Http\Request;

class ProyeksiController extends Controller
{
    public function index()
    {
        return view('dashboard.proyeksiSidang.proyeksi', [
            'title' => 'Dashboard | Proyeksi Sidang',
            'datas' => ProyeksiSidang::filter(request(['search']))
                ->paginate(20)->withQueryString()
        ]);
    }

    public function edit(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            ProyeksiSidang::where(['id' => $id])->update(['proyeksi_sidang' => $data['proyeksi_sidang']]);
        }

        return redirect()->back();
    }
}
