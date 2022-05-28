@extends('layouts.admin')

@section ('faq')
actived
@endsection

@section('konten')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tambah FAQ</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="/admin/faq">Manajemen FAQ</a></li>
                    <li class="breadcrumb-item active">Tambah FAQ</li>
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
    <form class="pt-4 pb-4" action="/admin/faq" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="mb-3">
        <label for="exampleInputText" class="form-label">Kategori FAQ</label>
        <select class="form-select" aria-label="Default select example" name="kategori">
        <option value="Umum">Pertanyaan Umum</option>
        <option value="Seputar Produk">Seputar Produk Ngampus</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputText" class="form-label">Pertanyaan</label>
        <textarea type="text" class="form-control" name="pertanyaan" placeholder="Masukkan Pertanyaan" required></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleInputText" class="form-label">Jawaban</label>
        <textarea type="text" class="form-control" name="jawaban" placeholder="Masukkan Jawaban" required></textarea>
    </div>
    
    <br>
    <div class="mb-3" style="float:right;">
        <button href="/admin/faq" class="btn btn-hapus rounded-pill ms-2">Cancel</button>
        <button type="submit" class="btn btn-submit rounded-pill ms-2">Submit</button>
    </div>
    </form>
    </div>
@endsection