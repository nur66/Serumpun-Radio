<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [];

        $data = $politik = $musik = $olahraga = $ekonomi = $kesehatan = $headline = $populer = $lates = [];
        $politik = Berita::where('kategori_id', 1)->get();
        $musik = Berita::where('kategori_id', 2)->orderBy('created_at', 'ASC')->get();
        $olahraga = Berita::where('kategori_id', 5)->get();
        $ekonomi = Berita::where('kategori_id', 4)->get();
        $kesehatan = Berita::where('kategori_id', 3)->get();

        $headline = Berita::where('tipe', 'Headline News')->orderBy('created_at', 'DESC')->limit(5)->get();
        $populer = Berita::where('tipe', 'Popular News')->orderBy('created_at', 'DESC')->get();
        $lates = Berita::where('tipe', 'Lates News')->orderBy('created_at', 'DESC')->limit(5)->get();

        $arrBerita = [];
        $berita = Berita::all();
        foreach($berita as $row)
        {
            $kategori = Kategori::where('id', $row->kategori_id)->first('nama_kategori');
            $arrBerita = $row;
            $arrBerita['kategori'] = $kategori->nama_kategori;
        }
        // dd($arrBerita);

        $data = [
            'politik' => count($politik),
            'olahraga' => count($olahraga),
            'ekonomi' => count($ekonomi),
            'kesehatan' => count($kesehatan),
            'musik' => count($musik),
            'berita' => $berita
        ];

        return view('layouts.master')->with('data', $data);
    }

    public function tesRadio()
    {

        return view('radio');
    }
}
