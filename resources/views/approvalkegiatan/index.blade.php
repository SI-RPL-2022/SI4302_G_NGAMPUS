@extends('layouts.admin')

@section ('produk')
actived
@endsection
@section ('approvalkegiatan')
actived
@endsection

@section('konten')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Manajemen Produk</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Beranda</a></li>
                    <li class="breadcrumb-item active">Manajemen Produk</li>
                </ol>
            </nav>
    </div>
<!-- End Page Title -->

<!-- dashboard -->
    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col">
                <div class="row">
                    <!-- Total Produk Card-->
                    <div class="col-xxl-4 col-md-3">
                        <div class="card info-card total-card">

                            <div class="card-body">
                                
                                <div class="d-flex align-items-center pt-3">

                                <div class="ps-3 pb-2 ">
                                    <h6 style="color:#00B5BF">{{$jumlah_daftar}}</h6>
                                    <h5 class="card-title">Total</h5>
                                </div>
                                <div class="filter p-3">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Total Produk Card -->

                <!-- Kepo Jurusan Card -->
                <div class="col-xxl-4 col-md-3">
                        <div class="card info-card kepo-card">

                            <div class="card-body">
                                
                                <div class="d-flex align-items-center pt-3">

                                <div class="ps-3 pb-2 ">
                                    <h6 style="color:#00B5BF">{{$jumlah_applied}}</h6>
                                    <h5 class="card-title">Applied</h5>
                                </div>
                                <div class="filter p-3">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-signpost-split"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Kepo Jurusan Card -->

                <!-- Major Experience Card -->
                <div class="col-xxl-4 col-md-3">
                        <div class="card info-card me-card">

                            <div class="card-body">
                                
                                <div class="d-flex align-items-center pt-3">

                                <div class="ps-3 pb-2 ">
                                    <h6 style="color:#00B5BF">{{$jumlah_approved}}</h6>
                                    <h5 class="card-title">Approved</h5>
                                </div>
                                <div class="filter p-3">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-eyeglasses"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Major Experience Card -->

                <!-- Webinar Card -->
                <div class="col-xxl-4 col-md-3">
                        <div class="card info-card webinar-card">

                            <div class="card-body">
                                
                                <div class="d-flex align-items-center pt-3">

                                <div class="ps-3 pb-2 ">
                                    <h6 style="color:#00B5BF">{{$jumlah_rejected}}</h6>
                                    <h5 class="card-title">Rejected</h5>
                                </div>
                                <div class="filter p-3">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person-badge"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Webinar Card -->

<!-- tabel -->
<div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                <div class="card-body">
                    
                    <div class="table-responsive ">
                        <table class="table">
                            <thead style="color:#00B5BF">
                            <tr>
                                <th scope="col">ID Registrasi</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Nomor Telepon</th>
                                <th scope="col">Jenis Produk</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($daftar as $key=> $item)
                            
                            <tr>
                                <td >{{ $item->id }}</td>
                                <td >{{ $item->name }}</td>
                                <td >{{ $item->no_telp }}</td>
                                <td >{{ $item->jenisproduct }}</td>
                                <td >
                                <form action="{{ route('adminUpdate') }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ $item->id }}" name="id">
                                    <div class="d-flex flex-row bd-highlight">
                                        <select name="status" class="form-control">
                                            @if ($item->status == "Applied")
                                            <option value="{{ $item->status }}">{{ $item->status }}</option>
                                            <option value="Approved">Approved</option>
                                            <option value="Rejected">Rejected</option>
                                            @elseif($item->status == "Approved")
                                            <option value="{{ $item->status }}">{{ $item->status }}</option>
                                            @elseif($item->status == "Rejected")
                                            <option value="{{ $item->status }}">{{ $item->status }}</option>
                                            @endif
                                        </select>
                                        <button type="submit" class="ml-3 btn btn-sukses rounded-pill">Update</button>
                                        <a href="/admin/approval/{{$item->id}}" class="btn btn-detail rounded-pill">Detail</a>

                                    </div>
                                </form>
                            </tr>
                            @endforeach


                </div>
                </div>
            </div>

                

@endsection