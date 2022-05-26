@extends('layouts.admin')

@section ('manajemenjurusan')
collapsed
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
        <label for="exampleInputText" class="form-label">Nama Jurusan</label>
        <input type="text" class="form-control" name="namajurusan" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputText" class="form-label">Detail Jurusan</label>
        <input type="text" class="form-control" name="detailjurusan" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputText" class="form-label">Alasan Memilih Jurusan</label>
        <input type="text" class="form-control" name="alasanmemilihjurusan" required>
    </div>
    
    <div class="mb-3">
        <label for="exampleInputText" class="form-label">Prospek Kerja</label>
        <textarea type="text" class="form-control" name="prospekkerja" required></textarea>
    </div>

    <div class="mb-3">
        <label for="exampleInputFile" class="form-label">Testimoni</label>
        <input type="text" class="form-control" name="testimoni" required>
    </div>

    <div class="mb-3">
        <label for="exampleInputFile" class="form-label">Picture</label>
        <input type="file" class="form-control" name="picture" required>
    </div>
    
    <br>
    <div class="mb-3" style="float:right;">
        <button href="/admin/jurusan" class="btn btn-hapus rounded-pill ms-2">Cancel</button>
        <button type="submit" class="btn btn-submit rounded-pill ms-2">Submit</button>
    </div>
    </form>
    </div>
@endsection