@extends('layouts.admin')

@section ('jurusan')
actived
@endsection

@section('konten')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Jurusan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="/admin/jurusan">Manajemen Jurusan</a></li>
                    <li class="breadcrumb-item active">Edit Jurusan</li>
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
    <form class="pt-4 pb-4" action="/admin/jurusan/{{$jurusans->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="id" value="{{ $jurusans->id }}" hidden>
    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Nama Jurusan</strong></label>
        <input value="{{ $jurusans->nama_jurusan }}" type="text" class="form-control" name="nama_jurusan" required>
    </div>

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Deskripsi Jurusan</strong></label>
        <input value="{{ $jurusans->desc_jurusan }}" type="text" class="form-control" name="desc_jurusan" required>
    </div>

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Alasan Memilih Jurusan</strong></label>
        <input value="{{ $jurusans->alasan1 }}" type="text" class="form-control" name="alasan1" required>
    </div>
    
    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Alasan Memilih Jurusan</strong></label>
        <input value="{{ $jurusans->alasan2 }}" type="text" class="form-control" name="alasan2" required>
    </div>

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Alasan Memilih Jurusan</strong></label>
        <input value="{{ $jurusans->alasan3 }}" type="text" class="form-control" name="alasan3" required>
    </div>

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Alasan Memilih Jurusan</strong></label>
        <input value="{{ $jurusans->alasan4 }}" type="text" class="form-control" name="alasan4" required>
    </div>

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Prospek Kerja</strong></label>
        <input value="{{ $jurusans->prospek1 }}" type="text" class="form-control" name="prospek1" required>
    </div>

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Prospek Kerja</strong></label>
        <input value="{{ $jurusans->prospek2 }}" type="text" class="form-control" name="prospek2" required>
    </div>

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Prospek Kerja</strong></label>
        <input value="{{ $jurusans->prospek3 }}" type="text" class="form-control" name="prospek3" required>
    </div>

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Prospek Kerja</strong></label>
        <input value="{{ $jurusans->prospek4 }}" type="text" class="form-control" name="prospek4" required>
    </div>

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Prospek Kerja</strong></label>
        <input value="{{ $jurusans->prospek5 }}" type="text" class="form-control" name="prospek5" required>
    </div>

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Prospek Kerja</strong></label>
        <input value="{{ $jurusans->prospek6 }}" type="text" class="form-control" name="prospek6" required>
    </div>
       
    <br>
    <div class="mb-3" style="float:right;">
        <button href="/admin/jurusan" class="btn btn-hapus rounded-pill ms-2">Cancel</button>
        <button type="submit" class="btn btn-submit rounded-pill ms-2">Submit</button>
    </div>
    </form>
    </div>
@endsection