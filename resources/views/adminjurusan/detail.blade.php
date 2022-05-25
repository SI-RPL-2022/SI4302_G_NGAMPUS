@extends('layouts.admin')

@section ('manajemenjurusan')
actived
@endsection

@section('konten')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Produk</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="/admin/produk">Manajemen Jurusan</a></li>
                    <li class="breadcrumb-item active">Detail Jurusan</li>
                </ol>
            </nav>
    </div>
<!-- End Page Title -->
<!-- tabel -->
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header pt-3">
                    <p class="fw-bolder mt-2" style="float:left; font-size:15px;">Detail Jurusan</p>
                    
                    <!-- <a href="/admin/produk/tambah" style="font-size:13px; float:right;" class=" rounded-pill btn-secondary btn">
                        <i class="bi bi-plus-square me-1 "></i> Tambah Produk</button></a>  -->
                        
                    </div>
            <div class="card-body">

            

    <div class="container">
    <form class="pt-4 pb-4" action="/admin/produk/{{$jurusan->id}}" method="POST" enctype="multipart/form-data">
        @csrf

        <form>
        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                <div >
                    <div class=" profile-card pt-4 d-flex flex-column align-items-center">

                    <img src="{{asset('Admin/img/'.$jurusan->picture.'')}}" alt="Profile" class="rounded-circle">
                    <h2>{{ $jurusan->name }}</h2>
                    <h3>{{ $jurusan->email }}</h3>
                    

                    </div>
                </div>

        </div>

        <div class="col-xl-8">
            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h5 class="card-title">About</h5>
                <p class="small fst-italic">{{ $jurusan->desc }}</p>

                <h5 class="card-title">Detail Artikel Jurusan</h5>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 label ">Nama Jurusan </div>
                        <div class="col-lg-9 col-md-8">: {{ $jurusan->nama_jurusan }}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Detail Jurusan</div>
                        <div class="col-lg-9 col-md-8">: {{ $jurusan->isi_artikel }}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Alasan Memilih Jurusan</div>
                        <div class="col-lg-9 col-md-8">: {{ $jurusan->alasan_memilih_jurusan }}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Prospek Kerja</div>
                        <div class="col-lg-9 col-md-8">: {{ $jurusan->prospek_kerja }}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Testimoni</div>
                        <div class="col-lg-9 col-md-8">: {{ $jurusan->testimoni }}</div>
                    </div>


                </div>

                
    </section>

            </div>


    
    <br>

    </form>
    </div>
@endsection