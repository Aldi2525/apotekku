@extends('layouts.admin')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Data Barang Masuk</h1>
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
                    <div class="card-header">
                        Data Barang
                        <a href="{{ route('bmasuk.create') }}" class="btn btn-sm btn-outline-primary float-right">Tambah
                            Penulis</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Id</th>
                                    <th>kode Barang</th>
                                    <th>Barang ID</th>
                                    <th>Keterangan</th>
                                    <th>Jumlah</th>
                                    <th>Harga Total</th>
                                    <th>User</th>
                                    <th>Supplier</th>

                                </tr>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($bmasuk as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->kode_bm }}</td>
                                        <td>{{ $data->barang->nama_barang }}</td>
                                        <td>{{ $data->keterangan }}</td>
                                        <td>{{ $data->jumlah }}</td>
                                        <td>{{ $data->harga_total }}</td>
                                        <td>{{ $data->user }}</td>
                                        <td>{{ $data->supplier }}</td>

                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
