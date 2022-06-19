@extends('layouts.admin')

@section ('faq')
actived
@endsection

@section('konten')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit faq</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="/admin/faq">Manajemen Approval Kegiatan</a></li>
                    <li class="breadcrumb-item active">Edit faq</li>
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
    <form class="pt-4 pb-4" action="/admin/faq/{{$faq->id}}" method="POST" enctype="multipart/form-data">
        @csrf

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>ID Registrasi</strong></label>
        <textarea type="text" class="form-control" name="id registrasi" required><?php echo $faq['id registrasi'] ?></textarea>
    </div>

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Nama</strong></label>
        <textarea type="text" class="form-control" name="nama" required><?php echo $faq['nama'] ?></textarea>
    </div>
    
    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Nomor Telepon</strong></label>
        <textarea type="text" class="form-control" name="nomor telepon" required><?php echo $faq['nomor telepon'] ?></textarea>
    </div>

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Jenis</strong></label>
        <select class="form-select" aria-label="Default select example" name="Jenis">
        <?php $list=['Webinar', 'Kepo jurusan', 'Major experience']; ?>
        @foreach ($list as $key)
            @if ($key ==$kegiatan->approval )
                <option value="{{ $kegiatan->approval }}" selected>{{ $kegiatan->approval }}</option>
            @else 
                <option value="{{ $key }}">{{ $key}}</option>
            @endif
        @endforeach
        </select>
    </div>
    
    <br>
    <div class="mb-3" style="float:right;">
        <button href="/admin/faq" class="btn btn-hapus rounded-pill ms-2">Cancel</button>
        <button type="submit" class="btn btn-submit rounded-pill ms-2">Submit</button>
    </div>
    </form>
    </div>
@endsection