@extends('layouts.app')
@section('artikel')
active
@endsection
@section('content')

<div class="container">
    <div class="row pb-5">
      <div class="col-6">
        <h1 class="text-light">Info Seputar Kampus dan  Jurusan Terlengkap? Cuman di Ngampus</h1>
      </div>
    </div>
</div>
@csrf
<div class="card p-5" style="border-radius: 25px">
    <div class="card-body">
        <div class="container">
        
        <div class=" mb-4">
        <center>
            <img src="{{asset('Admin/img/'.$data_kampus->picture.'')}}" style="width:150px" class="img-fluid rounded-start" alt="...">

            </div>
            </div>

            <h4 style="color:#666666" class="card-title fw-bold">Informasi Umum {{ $data_kampus->nama_kampus }}</h4>
            <p align="justify" class="text-justify text-muted mt-3">{{ $data_kampus->desc_kampus }}</p>  
        </div>
        <br>

        <div class="container">
            <h4 style="color:#666666" class="card-title fw-bold">Fakultas dan Jurusan </h4>
            <div class="row">
                <div class="col-6 ">
                    <div class="shadow card mb-3 border" style="border-radius : 15px">
                        <div class="row g-0 align-data_kampuss-center p-3 mt-2">
                            <h5 align="center">{{ $data_kampus->fakultas1 }}</h5>
                            <p align="center">{{ $data_kampus->jurusan1 }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="shadow card mb-3 border" style="border-radius : 15px">
                        <div class="row g-0 align-data_kampuss-center p-3 mt-2">
                            <h5 align="center">{{ $data_kampus->fakultas2 }}</h5>
                            <p align="center">{{ $data_kampus->jurusan2 }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="shadow card mb-3 border" style="border-radius : 15px">
                        <div class="row g-0 align-data_kampuss-center p-3 mt-2">
                            <h5 align="center">{{ $data_kampus->fakultas3 }}</h5>
                            <p align="center" >{{ $data_kampus->jurusan3 }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="shadow card mb-3 border" style="border-radius : 15px">
                        <div class="row g-0 align-data_kampuss-center p-3 mt-2">
                            <h5 align="center">{{ $data_kampus->fakultas4 }}</h5>
                            <p align="center">{{ $data_kampus->jurusan4 }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <h4 style="color:#666666" class="card-title fw-bold">Biaya Perkuliahan </h4>
            <center>
            <iframe src="{{ $data_kampus->biaya }}" height="500px" width="1000px"></iframe>
        
            </div>
        </div>
    </div>
</div>


@endsection