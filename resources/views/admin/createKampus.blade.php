@extends('layouts.admin')

@section ('kampus')
collapsed
@endsection

@section('konten')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tambah Kampus</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="/admin/kampus">Manajemen Kampus</a></li>
                    <li class="breadcrumb-item active">Tambah Kampus</li>
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
    <form class="pt-4 pb-4" action="/admin/kampus/store" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="mb-3">
        <label for="nama_kampus" class="form-label">Nama kampus</label>
        <input type="text" class="form-control" name="nama_kampus" required>
    </div>
    <div class="mb-3">
        <label for="desc_kampus" class="form-label">Deskripsi</label>
        <input type="text" class="form-control" name="desc_kampus" required>
    </div>
    <div class="mb-3">
        <label for="biaya" class="form-label">Biaya</label>
        <input type="text" class="form-control" name="biaya" required>
    </div>
    <div class="mb-3">
        <label for="picture" class="form-label">Picture</label>
        <input type="file" class="form-control" name="picture" required>
    </div>
    <div class="mb-3">
        <label for="fakultas1" class="form-label">Fakultas 1</label>
        <input type="text" class="form-control" name="fakultas1" required>
    </div>
    <div class="mb-3">
        <label for="jurusan1" class="form-label">Jurusan Fakultas 1</label>
        <input type="text" class="form-control" name="jurusan1" required>
    </div>
    <div class="mb-3">
        <label for="fakultas2" class="form-label">Fakultas 2</label>
        <input type="text" class="form-control" name="fakultas2" required>
    </div>
    <div class="mb-3">
        <label for="jurusan2" class="form-label">Jurusan Fakultas 2</label>
        <input type="text" class="form-control" name="jurusan2" required>
    </div>
    <div class="mb-3">
        <label for="fakultas3" class="form-label">Fakultas 3</label>
        <input type="text" class="form-control" name="fakultas3" required>
    </div>
    <div class="mb-3">
        <label for="jurusan3" class="form-label">Jurusan Fakultas 3</label>
        <input type="text" class="form-control" name="jurusan3" required>
    </div>
    <div class="mb-3">
        <label for="fakultas4" class="form-label">Fakultas 4</label>
        <input type="text" class="form-control" name="fakultas4" required>
    </div>
    <div class="mb-3">
        <label for="jurusan4" class="form-label">Jurusan Fakultas 4</label>
        <input type="text" class="form-control" name="jurusan4" required>
    </div>
    
    <br>
    <div class="mb-3" style="float:right;">
        <button href="/admin/produk" class="btn btn-hapus rounded-pill ms-2">Cancel</button>
        <button type="submit" class="btn btn-submit rounded-pill ms-2">Submit</button>
    </div>
    </form>
    </div>
@endsection