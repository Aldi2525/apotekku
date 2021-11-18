<?php

namespace App\Http\Controllers;
use App\Models\B_keluar;
use App\Models\Kategori;
use App\Models\Barang;
use Illuminate\Http\Request;

class BKeluarController extends Controller
{
    public function index()
    {
        $bkeluar = B_Keluar::with('barangs')->get();
        return view('admin.bkeluar.index', compact('bkeluar'));
    }
}
