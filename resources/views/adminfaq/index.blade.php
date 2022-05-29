@extends('layouts.admin')

@section ('faq')
actived
@endsection

@section('konten')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Manajemen FAQ Ngampus</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Beranda</a></li>
                    <li class="breadcrumb-item active">Manajemen FAQ</li>
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
                    <p class="fw-bolder mt-2" style="float:left; font-size:15px;">List FAQ</p>
                    <a href="/admin/faq/tambah" style="font-size:13px; float:right;" class=" rounded-pill btn-secondary btn">
                        <i class="bi bi-plus-square me-1 "></i> Tambah FAQ</button></a> 
                        
                    </div>
                <div class="card-body">
                    
                    <div class="table-responsive ">
                        <table class="table">
                            <thead style="color:#00B5BF">
                            <tr>
                                
                                <th scope="col">No</th>
                                <th scope="col">Kategori FAQ</th>
                                <th scope="col">Pertanyaan</th>
                                <th scope="col">Jawaban</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($faq as $key=> $item)
                            
                            <tr>
                                <th >{{ $faq->firstItem() + $key }}</th>
                                <td >{{ $item->kategori }}</td>
                                <td >{{ $item->pertanyaan }}</td>
                                <td >{{ $item->jawaban }}</td>
                                <td >
                                <div class="d-flex flex-row bd-highlight">
                                    <a href="/admin/faq/{{$item->id}}/edit" class="btn btn-detail rounded-pill">Edit</a>
                                    <form action="/admin/faq/{{$item->id}}/delete" method="POST">  
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
                                {{$faq -> links()}}
                            </div>
                        </div>
                </div>
                </div>
            </div>

                

@endsection