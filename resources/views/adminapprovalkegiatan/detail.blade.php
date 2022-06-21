@extends('layouts.admin')

@section ('manajemenapproval')
actived
@endsection

@section('konten')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Detail Approval</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="/admin/approval">Manajemen Approval</a></li>
                    <li class="breadcrumb-item active">Detail Approval</li>
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
                    <p class="fw-bolder mt-2" style="float:left; font-size:15px;">Detail Approval</p>

                        
                    </div>
            <div class="card-body">

            

    <div class="container">
    <form>
        @csrf

        <form>
        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                <div >
                    <div class=" profile-card pt-4 d-flex flex-column align-items-center">

                    <img src="{{asset('Admin/img/'.$approval->picture.'')}}" alt="Profile" class="rounded-circle">
                    <h2>{{ $approval->name }}</h2>
                    <h3>{{ $approval->email }}</h3>
                    

                    </div>
                </div>

        </div>

        <div class="col-xl-8">
            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h5 class="card-title">About</h5>
                <p class="small fst-italic">{{ $approval->desc }}</p>

                <h5 class="card-title">Approval Kegiatan</h5>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 label ">Nama</div>
                        <div class="col-lg-9 col-md-8">: {{ $approval->name }}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">ID user</div>
                        <div class="col-lg-9 col-md-8">: {{ $approval->id_user }}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Nama Product</div>
                        <div class="col-lg-9 col-md-8">: {{ $approval->namaproduct }}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Jenis Product</div>
                        <div class="col-lg-9 col-md-8">: {{ $approval->jenisproduct }}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">tanggal</div>
                        <div class="col-lg-9 col-md-8">: {{ $approval->tanggal }}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label ">Email</div>
                        <div class="col-lg-9 col-md-8">: {{ $approval->email }}</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 label ">Nomor Telepon</div>
                        <div class="col-lg-9 col-md-8">: {{ $approval->no_telp }}</div>
                    </div>

                    <h5 class="card-title">Informasi Tambahan</h5>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 label ">Alasan</div>
                        <div class="col-lg-9 col-md-8">: {{ $approval->alasan }}</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 label ">Status</div>
                        <div class="col-lg-9 col-md-8">: {{ $approval->status }}</div>
                    </div>
                    

                    



                </div>

                
    </section>

            </div>


    
    <br>

    </form>
    </div>
@endsection