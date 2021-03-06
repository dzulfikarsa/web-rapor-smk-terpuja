<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()){

            return redirect()->intended('admin\dashboard');
        }

        return view('login');
    }

    public function proses_login(Request $request)
    {


        $ceklogin = $request->only('username', 'password');
            if (Auth::attempt($ceklogin)){

                $session = User::all()->where('username', $request->username)->first();

                $request->session()->regenerate();
                session([
                    'nama' => $session->username,
                    'id' => $session->id,
                    'role_user'=> $session->role_id,
                ]);


                if ($session->role_id == 1) {
                    return redirect()->intended('admin\dashboard')->with('success', 'Selamat Datang '.$session->username);
                }elseif($session->role_id == 0) {
                    return redirect()->intended('admin\dashboard')->with('success', 'Selamat Datang '.$session->username);
                }
                else{
                    return redirect()->intended('user\dashboard');
                }

            }

        return redirect('login')->with('flash_message_error', 'Username atau Password Anda Salah!');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('login');
    }

    public function username()
    {
        return 'username';
    }
}
