@extends('layouts.admin')

@section ('testimoniproduk')
actived
@endsection

@section('konten')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Testimoni Produk</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Beranda</a></li>
                    <li class="breadcrumb-item active">Testimoni Produk</li>
                </ol>
            </nav>
    </div>
<!-- End Page Title -->

<!-- tabel -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-body">
                    
                    <div class="table-responsive ">
                        <table class="table">
                            <thead style="color:#00B5BF">
                            <tr>
                                
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Timestamp</th>
                                <th scope="col">Testimoni</th>                              
                                <th scope="col">Kategori</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($testimoniproduk as $key)
                            
                            <tr>
                            <td>{{ $key->id }}</td>
                            <td>{{ $key->name }}</td>
                            <td>{{ $key->created_at }}</td>
                            <td>{{ $key->desc }}</td>                            
                            <td>{{ $key->jenisproduct }}</td>
                            <td>{{ $key->show }}</td>
                            <td>
                            <div>
                                @if ($key->show =="no")
                                <a href='/admin/testimoni/produk/show/{{ $key->id }}' type="button" class="btn btn-sukses" >Show</a>
                                @else
                                <a href='/admin/testimoni/produk/hide/{{ $key->id }}' type="button" class="btn btn-detail" >Hide</a>
                                @endif
                            </div>
                            </td>
                            </tr>
                            

                            @endforeach
                            
                            </tbody>
                        </table>

                </div>
                </div>
            </div>

                

@endsection