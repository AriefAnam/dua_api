<?php

namespace App\Http\Controllers;

use App\Models\DataServis;
use Illuminate\Http\Request;

class DataServisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DataServis::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $servis = new DataServis();
        $servis->nama = $request->nama;
        $servis->type = $request->type;
        $servis->kerusakan = $request->kerusakan;
        $servis->harga = $request->harga;
        $servis->save();

        return "Data berhasil dibuat";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataServis  $dataServis
     * @return \Illuminate\Http\Response
     */
    public function show(DataServis $dataServis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataServis  $dataServis
     * @return \Illuminate\Http\Response
     */
    public function edit(DataServis $dataServis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataServis  $dataServis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id= $request->id;
        $nama = $request->nama;
        $type = $request->type;
        $kerusakan = $request->kerusakan;
        $harga = $request->harga;

        $servis = DataServis::find($id);
        $servis->nama = $nama;
        $servis->type = $type;
        $servis->kerusakan = $kerusakan;
        $servis->harga = $harga;
        $servis->save();

        return "Data telah diubah";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataServis  $dataServis
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->id;
        $servis = DataServis::find($id);
        $servis->delete();

        return "Data telah dihapus";
    }
}
