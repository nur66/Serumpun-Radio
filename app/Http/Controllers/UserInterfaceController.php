<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserInterfaceController extends Controller
{
    public function home(Request $request)
    {
        return view('landing-page');
    }

    public function berita(Request $request)
    {
        return view('berita');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function info()
    {
        return view('info');
    }

    public function musik()
    {
        return view('musik');
    }
}
