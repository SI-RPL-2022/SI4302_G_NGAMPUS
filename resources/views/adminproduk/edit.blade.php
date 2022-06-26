@extends('layouts.admin')

@section ('manajemenproduk')
actived
@endsection

@section('konten')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Produk</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="/admin/produk">Manajemen Produk</a></li>
                    <li class="breadcrumb-item active">Edit Produk</li>
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

    <div class="container">
    <form class="pt-4 pb-4" action="/admin/produk/{{$product->id}}" method="POST" enctype="multipart/form-data">
        @csrf

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Nama Produk</strong></label>
        <input value="{{ $product->namaproduct }}" type="text" class="form-control" name="namaproduct" required>
    </div>

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Jenis Produk</strong></label>
        <select class="form-select" aria-label="Default select example" name="jenisproduct">
        <?php $list=['Webinar','Kepo Jurusan','Major Experience']; ?>
        @foreach ($list as $key)
            @if ($key ==$product->jenisproduct )
                <option value="{{ $product->jenisproduct }}" selected>{{ $product->jenisproduct }}</option>
            @else 
                <option value="{{ $key }}">{{ $key}}</option>
            @endif
        @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Tanggal</strong></label>
        <input value="{{ $product->tanggal }}" type="date" class="form-control" name="tanggal" required>
    </div>

    <div class="mb-3">
        <label for="exampleInputText" class="form-label">Penyelenggara</label>
        <input type="text" value="{{ $product->penyelenggara }}" class="form-control" name="penyelenggara" required></input>
    </div>

    <div class="mb-3">
        <label for="exampleInputText" class="form-label">Kuota</label>
        <input type="text" value="{{ $product->kuota }}" class="form-control" name="kuota" required></input>
    </div>

    <div class="mb-3">
        <label for="exampleInputText" class="form-label">Lokasi</label>
        <input type="text" value="{{ $product->lokasi }}" class="form-control" name="lokasi" required></input>
    </div>
    
    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Description</strong></label>
        <textarea type="text" class="form-control" name="desc" required><?php echo $product['desc'] ?></textarea>
    </div>

    <div class="mb-3">
        <label for="exampleInputFile" class="form-label"><strong>Picture</strong></label><br>
        <img src="{{asset('Admin/img/'.$product->picture.'')}}" alt="" width="250"><br><br>
        <input type="file" class="form-control" name="picture" required>
    </div>
    
    <br>
    <div class="mb-3" style="float:right;">
        <button href="/admin/produk" class="btn btn-hapus rounded-pill ms-2">Cancel</button>
        <button type="submit" class="btn btn-submit rounded-pill ms-2">Submit</button>
    </div>
    </form>
    </div>
@endsection