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
                    <li class="breadcrumb-item"><a href="/admin/faq">Manajemen faq</a></li>
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
    <form class="pt-4 pb-4" action="/admin/master/{{$master->id}}" method="POST" enctype="multipart/form-data">
        @csrf

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Jenis</strong></label>
        <textarea type="text" class="form-control" name="jenis" required><?php echo $master['jenis'] ?></textarea>
    </div>
    
    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Keterangan</strong></label>
        <textarea type="text" class="form-control" name="keterangan" required><?php echo $master['keterangan'] ?></textarea>
    </div>
    
    <br>
    <div class="mb-3" style="float:right;">
        <button href="/admin/master" class="btn btn-hapus rounded-pill ms-2">Cancel</button>
        <button type="submit" class="btn btn-submit rounded-pill ms-2">Submit</button>
    </div>
    </form>
    </div>
@endsection