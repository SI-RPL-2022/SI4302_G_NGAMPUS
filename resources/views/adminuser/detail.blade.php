@extends('layouts.admin')

@section ('manajemenuser')
actived
@endsection

@section('konten')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Detail User</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="/admin/user">Manajemen User</a></li>
                    <li class="breadcrumb-item active">Detail User</li>
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
                    <p class="fw-bolder mt-2" style="float:left; font-size:15px;">Detail User</p>

                        
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

                    <img src="{{asset('Admin/img/'.$user->picture.'')}}" alt="Profile" class="rounded-circle">
                    <h2>{{ $user->name }}</h2>
                    <h3>{{ $user->email }}</h3>
                    

                    </div>
                </div>

        </div>

        <div class="col-xl-8">
            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h5 class="card-title">About</h5>
                <p class="small fst-italic">{{ $user->desc }}</p>

                <h5 class="card-title">Data Pribadi User</h5>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 label ">Nama</div>
                        <div class="col-lg-9 col-md-8">: {{ $user->name }}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Tempat Lahir</div>
                        <div class="col-lg-9 col-md-8">: {{ $user->birthAt }}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Tanggal Lahir</div>
                        <div class="col-lg-9 col-md-8">: {{ $user->birthDate }}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Domisili</div>
                        <div class="col-lg-9 col-md-8">: {{ $user->kota }}, {{ $user->provinsi }}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Negara</div>
                        <div class="col-lg-9 col-md-8">: {{ $user->negara }}</div>
                    </div>

                    <h5 class="card-title">Kontak User</h5>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 label ">Email</div>
                        <div class="col-lg-9 col-md-8">: {{ $user->email }}</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 label ">Nomor Telepon</div>
                        <div class="col-lg-9 col-md-8">: {{ $user->no_telp }}</div>
                    </div>

                    <h5 class="card-title">Informasi Tambahan</h5>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 label ">Pekerjaan</div>
                        <div class="col-lg-9 col-md-8">: {{ $user->pekerjaan }}</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 label ">Asal Sekolah</div>
                        <div class="col-lg-9 col-md-8">: {{ $user->asalSekolah }}</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 label ">kelas/Jurusan</div>
                        <div class="col-lg-9 col-md-8">: {{ $user->kelas }}, {{ $user->jurusan }}</div>
                    </div>

                    
                    <div class="mb-3" style="float:right;">
                        <a href="/admin/user/{{$user->id}}/edit" class="btn btn-detail rounded-pill ms-2">Edit User</a>
                    </div>




                </div>

                
    </section>

            </div>


    
    <br>

    </form>
    </div>
@endsection