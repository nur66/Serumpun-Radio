<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    public function show()
    {
        if (Auth::user()){
            $data = [];
            $data = Berita::all();

            return view('admin.berita.masterShow')->with('berita', $data);
        }else{
            return redirect('/');
        }
    }

    public function add()
    {
        if (Auth::user()){

            return view('admin.berita.masterAdd');
        }else{
            return redirect('/');
        }
    }

    public function addStore(Request $request)
    {
        if (Auth::user()){

            Berita::create([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'image' => $request->gambar,
                'tipe_id' => $request->tipe,
                'kategori_id' => $request->kategori
            ]);

            return redirect('/berita/show');
        }else{
            return redirect('/');
        }
    }

    public function edit(Request $request)
    {
        if (Auth::user()){
            $id = $request->id;

            $result = Berita::where('id', $id)->get();

            return view('admin.berita.masterEdit', [
                'berita' => $result
            ]);
            // return redirect('/berita/show');
        }else{
            return redirect('/');
        }
    }

    public function editStore(Request $request)
    {
        if (Auth::user()){
            $now = Carbon::now()->format('d-m-Y');
            Berita::where('id', $request->id)->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'image' => $request->gambar,
                'tipe_id' => $request->tipe,
                'kategori_id' => $request->kategori
            ]);
            return redirect('/berita/show');
        }else{
            return redirect('/');
        }
    }

    public function delete(Request $request)
    {
        if (Auth::user()){
            $id = $request->id;
            Berita::where('id', $id)->delete();

            return redirect('/berita/show');
        }else{
            return redirect('/');
        }
    }
}
