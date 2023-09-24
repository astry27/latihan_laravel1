<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengenalandiri extends Controller
{
    public function Dashboard()
    {
        return view('halaman_depan');
    }

    public function profilePembuat()
    {
        return view('profile_pembuat');
    }

    public function informasiKampus()
    {
        return view('informasi_kampus');
    }
}
