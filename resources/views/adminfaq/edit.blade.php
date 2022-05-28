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
    <form class="pt-4 pb-4" action="/admin/faq/{{$faq->id}}" method="POST" enctype="multipart/form-data">
        @csrf

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Kategori FAQ</strong></label>
        <select class="form-select" aria-label="Default select example" name="kategori">
        <?php $list=['Umum', 'Seputar Produk']; ?>
        @foreach ($list as $key)
            @if ($key ==$faq->kategori )
                <option value="{{ $faq->kategori }}" selected>{{ $faq->kategori }}</option>
            @else 
                <option value="{{ $key }}">{{ $key}}</option>
            @endif
        @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Pertanyaan</strong></label>
        <textarea type="text" class="form-control" name="pertanyaan" required><?php echo $faq['pertanyaan'] ?></textarea>
    </div>
    
    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Jawaban</strong></label>
        <textarea type="text" class="form-control" name="jawaban" required><?php echo $faq['jawaban'] ?></textarea>
    </div>
    
    <br>
    <div class="mb-3" style="float:right;">
        <button href="/admin/faq" class="btn btn-hapus rounded-pill ms-2">Cancel</button>
        <button type="submit" class="btn btn-submit rounded-pill ms-2">Submit</button>
    </div>
    </form>
    </div>
@endsection