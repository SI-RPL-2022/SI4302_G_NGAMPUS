@extends('layouts.admin')

@section('kampus')
actived
@endsection


@section('konten')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Manajemen Kampus</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Beranda</a></li>
                <li class="breadcrumb-item active">Manajemen Kampus</li>
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
                    <!-- tabel -->
                    <div class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header pt-3">
                                        <p class="fw-bolder mt-2" style="float:left; font-size:15px;">List Kampus</p>
                                        <a href="/admin/kampus/create" style="font-size:13px; float:right;"
                                            class=" rounded-pill btn-secondary btn">
                                            <i class="bi bi-plus-square me-1 "></i> Tambah Kampus</button></a>

                                    </div>
                                    <div class="card-body">

                                        <div class="table-responsive ">
                                            <table class="table text-center">
                                                <thead style="color:#00B5BF">
                                                    <tr>

                                                        <th scope="col" style="width: 2rem">No</th>
                                                        <th scope="col" style="width: 10rem">Nama Kampus</th>
                                                        <th scope="col" style="width: 80rem">Deskripsi</th>
                                                        <th scope="col" style="width: 10rem">Aksi</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach($kampuses as $key=> $item)

                                                        <tr>
                                                            <th>{{ $loop->iteration }}</th>
                                                            <td>{{ $item->nama_kampus }}</td>
                                                            <td class="crop-text-4 text-justify my-auto py-1">{{ $item->desc_kampus }}</td>
                                                            <td>
                                                                <div class="d-flex flex-row bd-highlight">
                                                                    <a href="/admin/kampus/{{ $item->id }}/detail"
                                                                        class="btn btn-detail rounded-pill">Lihat</a>
                                                                    <form
                                                                        action="/admin/kampus/{{ $item->id }}/delete"
                                                                        method="POST">
                                                                        @csrf
                                                                        <button type="submit"
                                                                            class="btn btn-hapus rounded-pill ms-2">Delete</button>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>



                                @endsection
