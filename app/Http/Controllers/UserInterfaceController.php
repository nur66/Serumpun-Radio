<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class UserInterfaceController extends Controller
{
    public function home(Request $request)
    {
        $berita = Berita::all();
        return view('ui.landing-page')->with('berita', $berita);
    }

    public function berita(Request $request)
    {
        return view('ui.berita');
    }

    public function kontak()
    {
        return view('ui.kontak');
    }

    public function info()
    {
        return view('ui.info');
    }

    public function musik()
    {
        return view('ui.musik');
    }
}
