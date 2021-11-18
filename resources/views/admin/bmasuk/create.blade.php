@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0"><b><i>Tambah Data Kategori</i></b></h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Kategori</div>
                <div class="card-body">
                    <form action="{{route('bmasuk.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Kode Barang Masuk</label>
                            <input type="text" name="kode_bm" class="form-control @error('kode_bm') is-invalid @enderror">

                            </div>
                            <div class="form-group">
                            <label for="">Barang Id</label>
                            <select name="barang_id" class="form-control @error('barang_id') is-invalid @enderror" >
                                @foreach($bmasuk as $data)
                                    <option value="{{$data->id}}">{{$data->nama_barang}}</option>
                                @endforeach
                            </select>
                            @error('barang_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                            <label for="">Masukan Keterangan</label>
                            <input type="text" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror">

                            <label for="">Jumlah</label>
                            <input type="text" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror">


                            <label for="">Masukan Harga Total</label>
                            <input type="number" name="harga_total" class="form-control @error('harga_total') is-invalid @enderror">

                            <label for="">User</label>
                            <input type="text" name="user" class="form-control @error('user') is-invalid @enderror">

                            <label for="">Supplier</label>
                            <input type="text" name="supplier" class="form-control @error('supplier') is-invalid @enderror"
                            @error('nama_barang')
                            <span class="invalid-feedbaack" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group right">
                            <button type="reset" class="btn btn-outline-danger">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
