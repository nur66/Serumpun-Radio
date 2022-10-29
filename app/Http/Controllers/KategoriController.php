<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;

class KategoriController extends Controller
{
    public function add()
    {
        return view('admin.kategori.masterAdd');
    }

    public function show()
    {
        $data = [];
        $data = Kategori::all();

        return view('admin.kategori.masterShow')->with('data', $data);
    }

    public function addStore(Request $request)
    {
        if (Auth::user()) {

            Kategori::create([
                'nama_kategori' => $request->nama,
            ]);
            return redirect('/kategori/show');
        } else {
            return redirect('/');
        }
    }

    public function edit(Request $request)
    {
        if (Auth::user()) {
            $id = $request->id;

            $result = Kategori::where('id', $id)->get();

            return view('admin.kategori.masterEdit', [
                'kategori' => $result
            ]);
        } else {
            return redirect('/');
        }
    }

    public function editStore(Request $request)
    {
        if (Auth::user()) {
            $now = Carbon::now()->format('d-m-Y');
            Kategori::where('id', $request->id)->update([
                'nama_kategori' => $request->nama,
            ]);
            return redirect('/kategori/show');
        } else {
            return redirect('/');
        }
    }

    public function delete(Request $request)
    {
        if (Auth::user()) {
            $id = $request->id;
            Kategori::where('id', $id)->delete();

            return redirect('/kategori/show');
        } else {
            return redirect('/');
        }
    }
}
