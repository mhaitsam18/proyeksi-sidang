<?php

namespace App\Http\Controllers;

use App\Models\PrediksiSidang;
use App\Http\Requests\StorePrediksiSidangRequest;
use App\Http\Requests\UpdatePrediksiSidangRequest;

class PrediksiSidangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.prediksiSidang.prediksi', [
            'title' => 'Dashboard | Prediksi Sidang',
            'datas' => PrediksiSidang::filter(request(['search']))->paginate(20)
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
     * @param  \App\Http\Requests\StorePrediksiSidangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePrediksiSidangRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PrediksiSidang  $prediksiSidang
     * @return \Illuminate\Http\Response
     */
    public function show(PrediksiSidang $prediksiSidang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PrediksiSidang  $prediksiSidang
     * @return \Illuminate\Http\Response
     */
    public function edit(PrediksiSidang $prediksiSidang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePrediksiSidangRequest  $request
     * @param  \App\Models\PrediksiSidang  $prediksiSidang
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePrediksiSidangRequest $request, PrediksiSidang $prediksiSidang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PrediksiSidang  $prediksiSidang
     * @return \Illuminate\Http\Response
     */
    public function destroy(PrediksiSidang $prediksiSidang)
    {
        //
    }
}
