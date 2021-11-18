<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class B_masuk extends Model
{
    use HasFactory;
    //memberikan akses data apa saja yang bisa dilihat
    protected $visible = ['id','kode_bm','barang_id','keterangan','jumlah','harga_total','user','supplier'];
    //memberikan akses data apa saja yang bisa di isi
    protected $fillable = ['id','kode_bm','barang_id','keterangan','jumlah','harga_total','user','supplier'];
    //mencatat waktu pembuatan dan update data otomatis
    public $timestamps = true;

    //membuat relasi one to many
    public function barang()
    {
        // data model "kategori" bisa memiliki banyak data
        //dari model "Book" melalui fk "author_id"
        return $this->belongsTo('App\Models\B_masuk','barang_id');
    }
}
