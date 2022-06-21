@extends('layouts.admin')
@section ('home')
actived
@endsection
@section('konten')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Manajemen Beranda</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Beranda</li>
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
            <!-- Kepo Jurusan Card -->
            <div class="col-xxl-4 col-md-3">
                    <div class="card info-card kepo-card">

                        <div class="card-body">
                            
                            <div class="d-flex align-items-center pt-3">

                            <div class="ps-3 pb-2 ">
                                <h6 style="color:#00B5BF">{{ $jumlah_kj }}</h6>
                                <h5 class="card-title">Kepo Jurusan</h5>
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
                                <h6 style="color:#00B5BF">{{ $jumlah_majore }}</h6>
                                <h5 class="card-title">Major Experience</h5>
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
                                <h6 style="color:#00B5BF">{{ $jumlah_webinar }}</h6>
                                <h5 class="card-title">Webinar</h5>
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
                <div class="card-header pt-3">
                <p class="fw-bolder mt-2" style="float:left; font-size:15px;">List Produk</p>                    
                </div>
            <div class="card-body">
                
                <div class="table-responsive ">
                    <table class="table">
                        <thead style="color:#00B5BF">
                        <tr>
                            
                            <th scope="col">No</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Kategori Produk</th>
                            <th scope="col">Jadwal</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($product as $key=> $item)
                        
                        <tr>
                            <th >{{ $item->id }}</th>
                            <td >{{ $item->namaproduct }}</td>
                            <td >{{ $item->jenisproduct }}</td>
                            <td >{{ $item->tanggal }}</td>
                            <td >{{ $item->status }}</td>
                            <td>
                            <div>
                                @if ($item->status =="no")
                                <a href='/admin/home/show/{{ $item->id }}' type="button" class="btn btn-sukses" >Show</a>
                                @else
                                <a href='/admin/home/hide/{{ $item->id }}' type="button" class="btn btn-detail" >Hide</a>
                                @endif
                            </div>
                            </td>
                        </tr>

                        @endforeach
                        
                        </tbody>
                    </table>

                    <div class="paginate-container mb-2 ">
                        <div class="pagination justify-content-center mt-4">
                            {{$product -> links()}}
                        </div>
                    </div>
            </div>
            </div>
        </div>
@endsection