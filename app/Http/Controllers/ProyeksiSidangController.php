<?php

namespace App\Http\Controllers;

use App\Models\ProyeksiSidang;
use App\Http\Requests\StoreProyeksiSidangRequest;
use App\Http\Requests\UpdateProyeksiSidangRequest;
use Illuminate\Support\Facades\Auth;

class ProyeksiSidangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.proyeksiSidang.proyeksi', [
            'title' => 'Dashboard | Proyeksi Sidang',
            'datas' => ProyeksiSidang::join('prediksi_sidangs', 'prediksi_sidangs.id', '=', 'proyeksi_sidangs.prediksi_sidang_id')
                ->filter(request(['search']))
                ->orderBy('nama', 'asc')->paginate(20)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProyeksiSidangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProyeksiSidangRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProyeksiSidang  $proyeksiSidang
     * @return \Illuminate\Http\Response
     */
    public function show(ProyeksiSidang $proyeksiSidang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProyeksiSidang  $proyeksiSidang
     * @return \Illuminate\Http\Response
     */
    public function edit(ProyeksiSidang $proyeksiSidang)
    {
        // return view('dashboard.proyeksiSidang.form', [
        //     'proyeksisidang' => $proyeksiSidang,
        //     'proyeksi' => ProyeksiSidang::all()
        // ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProyeksiSidangRequest  $request
     * @param  \App\Models\ProyeksiSidang  $proyeksiSidang
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProyeksiSidangRequest $request, ProyeksiSidang $proyeksiSidang)
    {
        $validatedData = $request->validate([
            'proyeksi_sidang' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;


        ProyeksiSidang::where('id', $proyeksiSidang->id)
            ->update($validatedData);

        return redirect('/dashboard/proyeksi')->with('success', 'Proyeksi has ben updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProyeksiSidang  $proyeksiSidang
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProyeksiSidang $proyeksiSidang)
    {
        //
    }
}
