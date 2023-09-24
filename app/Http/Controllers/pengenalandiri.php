<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengenalandiri extends Controller
{
    public function Dashboard()
    {
        return view('dashboard');
    }

    public function profilePembuat()
    {
        return view('profile');
    }

    public function informasiKampus()
    {
        return view('informasi');
    }
}
