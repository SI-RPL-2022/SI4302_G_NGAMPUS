@extends('layouts.app')

@section('content')
<div class="card" style="border-radius: 25px">
    <div class="card-body">
        <div class="container">
            <h3 class="card-title fw-bold">Jurusan {{ $kampus }}</h3>
            <p class="text-justify text-muted mt-3">{{ $desc_kampus }}</p>  
        </div>
        <div class="container mt-5">
            <h3 class="card-title fw-bold">Fakultas dan Jurusan </h3>
            <div class="row">
                <div class="col-6 ">
                    <div class="card mb-3 border" style="border-radius : 15px">
                        <div class="row g-0 align-items-center ">
                            <h5>Fakultas</h5>
                            <p>Jurusan</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="card mb-3 border" style="border-radius : 15px">
                        <div class="row g-0 align-items-center ">
                            <h5>Fakultas</h5>
                            <p>Jurusan</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="card mb-3 border" style="border-radius : 15px">
                        <div class="row g-0 align-items-center ">
                            <h5>Fakultas</h5>
                            <p>Jurusan</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="card mb-3 border" style="border-radius : 15px">
                        <div class="row g-0 align-items-center ">
                            <h5>Fakultas</h5>
                            <p>Jurusan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <h3 class="card-title fw-bold">Biaya Perkuliahan </h3>
        </div>
        </div>
    </div>
</div>

@endsection