<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\Rapor;

class RaporController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        $mapel = Mapel::all();
        return view('admin.rapor', compact('siswa', 'mapel'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rapor = new Rapor();

        $data_rapor = Rapor::where([['nis_siswa', $request->nis], ['id_mapel', $request->id_matpel],])->first();
        if ($data_rapor) {
            return back();
        }
        $rapor->nis_siswa = $request->nis;
        $rapor->id_mapel = $request->id_mapel;
        $rapor->nilai = $request->nilai;
        $rapor->huruf = $request->huruf;

        switch ($rapor->nilai) {
            case $rapor->nilai >= 90 && $rapor->nilai <=100:
                $hasil = "Amat Baik";
                break;

            case $rapor->nilai >= 80 && $rapor->nilai <90:
                $hasil = "Baik";
                break;

            default:
                $hasil = "Cukup";
                break;
        }
        $rapor->predikat = $hasil;
        $rapor->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sw = Siswa::findorfail($id);
        return view('rapor-siswa', compact('sw'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
