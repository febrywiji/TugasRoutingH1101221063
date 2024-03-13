<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Proses autentikasi disini,koder dapat menambahkan logika autentikasi sesuai kebutuhan proyek koder
        // Untuk contoh,  hanya akan mengarahkan pengguna kembali ke halaman utama setelah login
        return redirect('/');
    }
}
