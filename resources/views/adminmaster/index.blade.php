@extends('layouts.admin')

@section ('master')
actived
@endsection

@section('konten')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Manajemen Master Ngampus</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Beranda</a></li>
                    <li class="breadcrumb-item active">Manajemen Master</li>
                </ol>
            </nav>
    </div>
<!-- End Page Title -->

<!-- dashboard -->
    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col">

<!-- tabel -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pt-3">
                <div class="card-body">
                    
                    <div class="table-responsive ">
                        <table class="table">
                            <thead style="color:#00B5BF">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Action</th>

                            </tr>
                            </thead>

                            <tbody>
                            @foreach($master as $key=> $item)
                            
                            <tr>
                                <th >{{ $master->firstItem() + $key }}</th>
                                <td >{{ $item->jenis }}</td>
                                <td >{{ $item->keterangan }}</td>
                                <td >
                                <div class="d-flex flex-row bd-highlight">
                                    <a href="/admin/master/{{$item->id}}" class="btn btn-detail rounded-pill">Edit</a>

                                    </div>
                                </td>
                            </tr>

                            @endforeach
                        </table>

                </div>
                </div>
            </div>

                

@endsection