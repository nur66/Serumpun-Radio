<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
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
            $kategori = Kategori::get();

            return view('admin.berita.masterAdd')->with('kategori', $kategori);
        }else{
            return redirect('/');
        }
    }

    public function addStore(Request $request)
    {
        if (Auth::user()){
            $this->validate($request, [
                'gambar' => 'required | image | mimes:jpg,jpeg,png,svg,gif | max:20000000'
            ]);
            $foto = $request->file('gambar');
            $nama_foto = $foto->getClientOriginalName();
            $simpan_foto = time().$nama_foto;
            $foto->move(('gambar'), $simpan_foto);

            Berita::create([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'image' => $simpan_foto,
                'tipe' => $request->tipe,
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
            $result = [];
            $id = $request->id;
            $kategori = Kategori::all();

            $berita = Berita::where('id', $id)->get();

            $result = [
                'kategori' => $kategori,
                'berita' => $berita
            ];

            return view('admin.berita.masterEdit', [
                'data' => $result
            ]);
            // return redirect('/berita/show');
        }else{
            return redirect('/');
        }
    }

    public function editStore(Request $request)
    {
        if (Auth::user()){
            $this->validate($request, [
                'gambar' => 'required | image | mimes:jpg,jpeg,png,svg,gif | max:20000000'
            ]);
            $foto = $request->file('gambar');
            $nama_foto = $foto->getClientOriginalName();
            $simpan_foto = time().$nama_foto;
            $foto->move(('gambar'), $simpan_foto);

            $now = Carbon::now()->format('d-m-Y');
            Berita::where('id', $request->id)->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'image' => $simpan_foto,
                'tipe' => $request->tipe,
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
