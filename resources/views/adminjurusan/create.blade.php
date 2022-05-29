@extends('layouts.admin')

@section ('jurusan')
actived
@endsection

@section('konten')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tambah Jurusan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="/admin/jurusan">Manajemen Jurusan</a></li>
                    <li class="breadcrumb-item active">Tambah Jurusan</li>
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
    <form class="pt-4 pb-4" action="/admin/jurusan" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="mb-3">
        <label for="nama_jurusan" class="form-label">Nama Jurusan</label>
        <input type="text" class="form-control" name="nama_jurusan" required>
    </div>
    <div class="mb-3">
        <label for="desc_jurusan" class="form-label">Deskripsi Jurusan</label>
        <input type="text" class="form-control" name="desc_jurusan" required>
    </div>
    <div class="mb-3">
        <label for="alasan1" class="form-label">Alasan Memilih Jurusan1</label>
        <input type="text" class="form-control" name="alasan1" required>
    </div>
    
    <div class="mb-3">
        <label for="alasan2" class="form-label">Alasan Memilih Jurusan2</label>
        <input type="text" class="form-control" name="alasan2" required>
    </div>

    <div class="mb-3">
        <label for="alasan3" class="form-label">Alasan Memilih Jurusan3</label>
        <input type="text" class="form-control" name="alasan3" required>
    </div>

    <div class="mb-3">
        <label for="alasan4" class="form-label">Alasan Memilih Jurusan4</label>
        <input type="text" class="form-control" name="alasan4" required>
    </div>

    <div class="mb-3">
        <label for="prospek1" class="form-label">Prospek Kerja1</label>
        <input type="text" class="form-control" name="prospek1" required>
    </div>

    <div class="mb-3">
        <label for="prospek2" class="form-label">Prospek Kerja2</label>
        <input type="text" class="form-control" name="prospek2" required>
    </div>

    <div class="mb-3">
        <label for="prospek3" class="form-label">Prospek Kerja3</label>
        <input type="text" class="form-control" name="prospek3" required>
    </div>

    <div class="mb-3">
        <label for="prospek4" class="form-label">Prospek Kerja4</label>
        <input type="text" class="form-control" name="prospek4" required>
    </div>

    <div class="mb-3">
        <label for="prospek5" class="form-label">Prospek Kerja5</label>
        <input type="text" class="form-control" name="prospek5" required>
    </div>

    <div class="mb-3">
        <label for="prospek6" class="form-label">Prospek Kerja6</label>
        <input type="text" class="form-control" name="prospek6" required>
    </div>
    
    <br>
    <div class="mb-3" style="float:right;">
        <button href="/admin/jurusan" class="btn btn-hapus rounded-pill ms-2">Cancel</button>
        <button type="submit" class="btn btn-submit rounded-pill ms-2">Submit</button>
    </div>
    </form>
    </div>
@endsection