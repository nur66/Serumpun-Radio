<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Krew;
use Illuminate\Http\Request;

class UserInterfaceController extends Controller
{
    public function home(Request $request)
    {
        $result = $politik = $musik = $olahraga = $ekonomi = $kesehatan = $headline = $populer = $lates = [];
        $politik = Berita::where('kategori_id', 1)->limit(4)->get();
        $musik = Berita::where('kategori_id', 2)->limit(4)->get();
        $olahraga = Berita::where('kategori_id', 5)->limit(4)->get();
        $ekonomi = Berita::where('kategori_id', 4)->limit(4)->get();
        $kesehatan = Berita::where('kategori_id', 3)->limit(4)->get();
        $hiburan = Berita::where('kategori_id', 6)->limit(4)->get();

        $headline = Berita::where('tipe', 'Headline News')->orderBy('created_at', 'DESC')->limit(4)->get();
        $populer = Berita::where('tipe', 'Popular News')->orderBy('created_at', 'DESC')->limit(4)->get();
        $lates = Berita::where('tipe', 'Lates News')->orderBy('created_at', 'DESC')->limit(4)->get();
        // dd($politik);

        $result = [
            'politik' => $politik,
            'musik' => $musik,
            'olahraga' => $olahraga,
            'ekonomi' => $ekonomi,
            'kesehatan' => $kesehatan,
            'hiburan' => $hiburan,
            'headline' => $headline,
            'populer' => $populer,
            'lates' => $lates
        ];

        return view('ui.landing-page')->with('data', $result);
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
        $data = [];
        $data = Krew::all();
        return view('ui.info')->with('data', $data);
    }

    public function musik()
    {
        $data = $politik = $musik = $olahraga = $ekonomi = $kesehatan = $headline = $populer = $lates = [];
        $politik = Berita::where('kategori_id', 1)->limit(4)->get();
        $musik = Berita::where('kategori_id', 2)->orderBy('created_at', 'ASC')->limit(4)->get();
        $olahraga = Berita::where('kategori_id', 5)->limit(4)->get();
        $ekonomi = Berita::where('kategori_id', 4)->limit(4)->get();
        $kesehatan = Berita::where('kategori_id', 3)->limit(4)->get();

        $headline = Berita::where('tipe', 'Headline News')->orderBy('created_at', 'DESC')->limit(5)->get();
        $populer = Berita::where('tipe', 'Popular News')->orderBy('created_at', 'DESC')->limit(4)->get();
        $lates = Berita::where('tipe', 'Lates News')->orderBy('created_at', 'DESC')->limit(5)->get();

        $data = [
            'politik' => $politik,
            'musik' => $musik,
            'olahraga' => $olahraga,
            'ekonomi' => $ekonomi,
            'kesehatan' => $kesehatan,
            'headline' => $headline,
            'populer' => $populer,
            'lates' => $lates
        ];
        return view('ui.musik')->with('data', $data);
    }



    //_________________________________________Detail__________________________________________//
    public function detailNews(Request $request)
    {
        $id = $request->id;

        $data = [];
        $detail = Berita::where('id', $id)->first();
        // dd($data->judul);
        $headline = Berita::where('tipe', 'Headline News')->orderBy('created_at', 'DESC')->limit(5)->get();
        $populer = Berita::where('tipe', 'Popular News')->orderBy('created_at', 'DESC')->limit(4)->get();
        $lates = Berita::where('tipe', 'Lates News')->orderBy('created_at', 'DESC')->limit(5)->get();

        $data = [
            'detail' => $detail,
            'headline' => $headline,
            'populer' => $populer,
            'lates' => $lates
        ];
        // dd($data['detail']->judul);

        return view('ui.detailNews')->with('data', $data);
        // return view('ui.detailNews');
    }
}
