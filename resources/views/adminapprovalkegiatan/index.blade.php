@extends('layouts.admin')

@section('jurusan')
actived
@endsection


@section('konten')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Approval Kegiatan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Beranda</a></li>
                <li class="breadcrumb-item active">Approval Kegiatan</li>
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
                                    <h6 style="color:#00B5BF">{{ $jumlah }}</h6>
                                    <h5 class="card-title">applied</h5>
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
                        <div class="card info-card approved-card">

                            <div class="card-body">
                                
                                <div class="d-flex align-items-center pt-3">

                                <div class="ps-3 pb-2 ">
                                    <h6 style="color:#00B5BF">{{ $approved }}</h6>
                                    <h5 class="card-title">approved</h5>
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
                        <div class="card info-card rejected-card">

                            <div class="card-body">
                                
                                <div class="d-flex align-items-center pt-3">

                                <div class="ps-3 pb-2 ">
                                    <h6 style="color:#00B5BF">{{ $rejected }}</h6>
                                    <h5 class="card-title">rejected</h5>
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


                    <!-- tabel -->
                    <div class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header pt-3">
                                        <p class="fw-bolder mt-2" style="float:left; font-size:15px;">List Jurusan</p>
                                        <a href="/admin/jurusan/tambah" style="font-size:13px; float:right;"
                                            class=" rounded-pill btn-secondary btn">
                                            <i class="bi bi-plus-square me-1 "></i> Tambah Jurusan</button></a>

                                    </div>
                                    <div class="card-body">

                                        <div class="table-responsive ">
                                            <table class="table text-center">
                                                <thead style="color:#00B5BF">
                                                    <tr>

                                                        <th scope="col" style="width: 2rem">No</th>
                                                        <th scope="col" style="width: 10rem">ID Registrasi</th>
                                                        <th scope="col" style="width: 10rem">Nama</th>
                                                        <th scope="col" style="width: 10rem">No. Telepon</th>
                                                        <th scope="col" style="width: 10rem">Jenis</th>
                                                        <th scope="col" style="width: 10rem">Aksi</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach($jurusans as $key=> $item)

                                                        <tr>
                                                            <th>{{ $loop->iteration }}</th>
                                                            <td>{{ $item->nama_jurusan }}</td>
                                                            <td class="crop-text-4 text-justify my-auto py-1">{{ $item->desc_jurusan }}</td>
                                                            <td>
                                                            <div class="d-flex flex-row bd-highlight">
                                    <a href="/admin/approval/{{$item->id}}/edit" class="btn btn-detail rounded-pill">Edit</a>
                                    <form action="/admin/approval/{{$item->id}}/delete" method="POST">  
                                    @csrf  
                                        <button type="submit" class="btn btn-hapus rounded-pill ms-2">Delete</button>
                                    </form> 
                                    </div>
                                </td>
                            </tr>

                            @endforeach
                            
                            </tbody>
                        </table>

                        <div class="paginate-container mb-2 ">
                            <div class="pagination justify-content-center mt-4">
                                {{$approval -> links()}}
                            </div>
                        </div>
                </div>
                </div>
            </div>

                

@endsection
                                                            