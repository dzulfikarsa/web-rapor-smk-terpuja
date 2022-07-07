<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Mapel;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()

    {
        $siswa = Siswa::where('nis','=',Auth::user()->nis_siswa)->firstOrFail();
        $jumlah_siswa = Siswa::count();
        $mapel = Mapel::count();
        return view('admin\dashboard', compact('siswa', 'mapel', 'jumlah_siswa'));
    }
}
