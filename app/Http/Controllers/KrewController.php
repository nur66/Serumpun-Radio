<?php

namespace App\Http\Controllers;

use App\Models\Krew;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KrewController extends Controller
{
    public function add()
    {
        return view('admin.krew.masterAdd');
    }

    public function show()
    {
        $data = [];
        $data = Krew::all();

        return view('admin.krew.masterShow')->with('data', $data);
    }

    public function addStore(Request $request)
    {
        if (Auth::user()) {
            $this->validate($request, [
                'foto' => 'required | image | mimes:jpg,jpeg,png,svg,gif | max:20000000'
            ]);
            $foto = $request->file('foto');
            $nama_foto = $foto->getClientOriginalName();
            $simpan_foto = time().$nama_foto;
            $foto->move(('foto'), $simpan_foto);

            Krew::create([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'foto' => $simpan_foto,
            ]);
            return redirect('/krew/show');
        } else {
            return redirect('/');
        }
    }

    public function edit(Request $request)
    {
        if (Auth::user()) {
            $id = $request->id;

            $result = Krew::where('id', $id)->get();

            return view('admin.krew.masterEdit', [
                'krew' => $result
            ]);
        } else {
            return redirect('/');
        }
    }

    public function editStore(Request $request)
    {
        if (Auth::user()) {
            $this->validate($request, [
                'foto' => 'required | image | mimes:jpg,jpeg,png,svg,gif | max:20000000'
            ]);
            $foto = $request->file('foto');
            $nama_foto = $foto->getClientOriginalName();
            $simpan_foto = time().$nama_foto;
            $foto->move(('foto'), $simpan_foto);

            $now = Carbon::now()->format('d-m-Y');
            Krew::where('id', $request->id)->update([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'foto' => $simpan_foto,
            ]);
            return redirect('/krew/show');
        } else {
            return redirect('/');
        }
    }

    public function delete(Request $request)
    {
        if (Auth::user()) {
            $id = $request->id;
            Krew::where('id', $id)->delete();

            return redirect('/krew/show');
        } else {
            return redirect('/');
        }
    }
}
