<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Barang;
use App\Models\B_masuk;
use Illuminate\Http\Request;

class BMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bmasuk = B_masuk::with('barang')->get();
        return view('admin.bmasuk.index', compact('bmasuk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bmasuk = Barang::all();
        return view('admin.bmasuk.create', compact('bmasuk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'id' => 'required|unique:barangs',
        //     'kode_barang' => 'required',
        //     'nama_barang' => 'required',
        //     'jumlah' => 'required',
        //     'harga_beli' => 'required',
        //     'harga_jual' => 'required',
        //     'kategori_id' => 'required',
        //     'gambar' => 'required|image|max:2048',
        //     'keterangan' => 'required',
        // ]);

        $bmasuk = new B_masuk;
        // $bmasuk->id = $request->id;
        $bmasuk->kode_bm = $request->kode_bm;
        $bmasuk->barang_id = $request->barang_id;
        $bmasuk->keterangan = $request->keterangan;
        $bmasuk->jumlah = $request->jumlah;
        $bmasuk->harga_total = $request->harga_total;
        $bmasuk->user = $request->user;
        $bmasuk->supplier = $request->supplier;
        $bmasuk->save();
        return redirect()->route('bmasuk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bmasuk = B_masuk::findOrFail($id);
        return view('admin.bmasuk.show', compact('bmasuk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $bmasuk = B_masuk::findOrFail($id);
        $bmasuk = B_masuk::all();
        return view('admin.barang.edit', compact('bmasuk', 'barang'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'id' => 'required|unique:barangs',
        //     'kode_barang' => 'required',
        //     'nama_barang' => 'required',
        //     'jumlah' => 'required',
        //     'harga_beli' => 'required',
        //     'harga_jual' => 'required',
        //     'kategori_id' => 'required',
        //     'gambar' => 'required|image|max:2048',
        //     'keterangan' => 'required',
        // ]);

        $bmasuk = new B_masuk;
        // $barang->id = $request->id;
        $bmasuk->kode_bm = $request->kode_barang;
        $bmasuk->barang_id = $request->nama_barang;
        $bmasuk->keterangan = $request->keterangan;
        $bmasuk->jumlah = $request->jumlah;
        $bmasuk->harga_total = $request->harga_total;
        $bmasuk->user = $request->user;
        $bmasuk->supplier = $request->supplier;

        $bmasuk->save();
        return redirect()->route('bmasuk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bmasuk = B_masuk::findOrFail($id);
        $bmasuk->deleteImage();
        $bmasuk->delete();
        return redirect()->route('bmasuk.index');
    }
}
