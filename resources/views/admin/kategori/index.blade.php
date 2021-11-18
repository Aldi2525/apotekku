@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0"><b><i>Data Kategori</i></b></h1>
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
                   <b>Data Kategori</b>
                    <a href="{{route('kategori.create')}}" class="btn btn-sm btn-outline-primary float-right"><i>Tambah Kategori</i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th><i>Id</i></th>
                                <th><i>Kode Kategori</i></th>
                                <th><i>Namat Kategori</i></th>
                                <th><i>Aksi</i></th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach ($kategori as $data)
                             <tr>
                                 <td>{{$no++}}</td>
                                 <td>{{$data->kd_kategori}}</td>
                                 <td>{{$data->nama_kategori}}</td>



                                 <td>
                                     <form action="{{route('kategori.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapusnya')">HAPUS</button>
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
