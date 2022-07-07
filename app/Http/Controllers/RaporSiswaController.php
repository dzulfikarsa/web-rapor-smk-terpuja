<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Rapor;
use App\Models\Mapel;
use App\Models\Nilai;
use Illuminate\Support\Facades\Auth;

class RaporSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->id;
        $sw = Siswa::where('nis','=',Auth::user()->nis_siswa)->firstOrFail();
        $siswa = Siswa::where('nis','=',$id)->firstOrFail();
        $rapor = Rapor::all()->where('nis_siswa', '=' ,$id);
        $mapel = Mapel::all();

        return view('admin.rapor-siswa', compact('sw', 'siswa', 'rapor', 'mapel'));
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_mapel, $nis)
    {
        $rapor = new Rapor();
        $rapor->nilai = $request->nilai;

        switch ($rapor->nilai) {

            case $rapor->nilai === 0:
                $hasil = "Tidak Cukup";
                break;

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
        $rapor = Rapor::where('id_mapel','=', $id_mapel)->where('nis_siswa', '=', $nis)->update(array('nilai' => $request->nilai, 'huruf' => $request->huruf, 'predikat' => $hasil));
        return back()->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_mapel, $nis)
    {
        $rapor = Rapor::where('id_mapel','=',$id_mapel)->where('nis_siswa', '=', $nis)->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
}
