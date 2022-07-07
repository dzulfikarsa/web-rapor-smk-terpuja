<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use App\Models\Rapor;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LihatRaporController extends Controller
{
    public function index()
    {
        $siswa = Siswa::where('nis','=',Auth::user()->nis_siswa)->firstOrFail();
        $rapor = Rapor::all()->where('nis_siswa', '=' ,Auth::user()->nis_siswa);
        return view('user.rapor', compact('siswa', 'rapor'));
    }
}
