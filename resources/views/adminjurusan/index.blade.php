@extends('layouts.admin')

@section ('manajemenjurusan')
actived
@endsection

@section('konten')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Manajemen Jurusan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Beranda</a></li>
                    <li class="breadcrumb-item active">Manajemen Jurusan</li>
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
                    <p class="fw-bolder mt-2" style="float:left; font-size:15px;">List Jurusan</p>


                    <div class="search-bar" style="float:right">
                        <form action="/admin/jurusan">
                        <input type="text" name="search" style="height=20px;" class="form-control rounded" placeholder="Cari Nama Jurusan Disini" aria-label="Search" aria-describedby="search-addon" value="{{request('search')}}"/>
                        </form>
        </div>
                        
                    </div>
                <div class="card-body">
                    
                    <div class="table-responsive ">
                        <table class="table">
                            <thead style="color:#00B5BF">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Jurusan</th>
                                <th scope="col">Detail Jurusan</th>
                                <th scope="col">Alasan Memilih Jurusan</th>
                                <th scope="col">Prospek Kerja</th>
                                <th scope="col">Testimoni</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>

                            <tbody>

                            @foreach($jurusan as $key=> $item)
                            
                            <tr>
                                <td >{{ $jurusan->firstItem() + $key }}</td>
                                <td >{{ $item->name }}</td>
                                <td><img src="{{asset('Admin/img/'.$item->picture.'')}}" width="50" alt="Profile" class="rounded-circle"></td>
                                <td >
                                <div class="d-flex flex-row bd-highlight">
                                    <a href="/admin/jurusan/{{$item->id}}/detail" class="btn btn-detail rounded-pill">Detail</a>
                                    <form action="/admin/jurusan/{{$item->id}}/delete" method="POST">  
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
                                {{$jurusan -> links()}}
                            </div>
                        </div>
                </div>
                </div>
            </div>

                

@endsection