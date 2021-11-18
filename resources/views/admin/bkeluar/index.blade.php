@extends('layouts.admin')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Data Barang</h1>
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
                        <a href="{{ route('barang.create') }}" class="btn btn-sm btn-outline-primary float-right">Tambah
                            Penulis</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Id</th>
                                    <th>kode Barang Masuk</th>
                                    <th>Barang ID</th>
                                    <th>Kode transaksi</th>
                                    <th>Jumlah</th>
                                    <th>Harga Total</th>
                                    <th>User</th>
                                    <th>Supplier</th>
                                    <th>Diskon</th>

                                </tr>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($bkeluar as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->kode_bm }}</td>
                                        <td>{{ $data->barang_id }}</td>
                                        <td>{{ $data->kode_trans}}</td>
                                        <td>{{ $data->jumlah }}</td>
                                        <td>{{ $data->harga_total }}</td>
                                        <td>{{ $data->user }}</td>
                                        <td>{{ $data->Supplier }}</td>
                                        <td>{{ $data->diskon }}</td>


                                        <td>
                                            <form action="{{ route('barang.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('barang.edit', $data->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                <a href="{{ route('barang.show', $data->id) }}"
                                                    class="btn btn-outline-warning">Show</a>
                                                <button type="submit" class="btn btn-outline-danger"
                                                    onclick="return confirm('Apakah anda yakin mengahpus')">Delete</button>
                                            </form>
                                        </td>
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
