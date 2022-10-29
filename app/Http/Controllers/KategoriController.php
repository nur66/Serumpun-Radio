<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function add(Request $request)
    {
        return view('admin.kategori.masterAdd');
    }

    public function addStore(Request $request)
    {
        
    }
}
