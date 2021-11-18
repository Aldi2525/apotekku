<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    //memberikan akses data apa saja yang bisa dilihat
    protected $visible = ['id','kd_kategori','nama_kategori'];
    //memberikan akses data apa saja yang bisa di isi
    protected $fillable = ['id','kd_kategori','nama_kategori'];
    //mencatat waktu pembuatan dan update data otomatis
    public $timestamps = true;

    //membuat relasi one to many
    public function barang()
    {
        // data model "kategori" bisa memiliki banyak data
        //dari model "Book" melalui fk "author_id"
        $this->hasMany('App\Models\Barang','kategori_id');
    }
}
