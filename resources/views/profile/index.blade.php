@extends('layouts.app')
@section('beranda')
active
@endsection
@section('content')
<div class="container">
    <div class="row pb-5">
        <div class="col-6">
        </div>
    </div>
    <div class="row pb-5">
        <div class="col-6">
        </div>
    </div>
    <div class="row pb-5">
        <div class="col-6">
        </div>
        </div>
    </div>

    <a href="/admin/kampus/create" style="font-size:13px; float:right;"
                                            class=" rounded-pill btn-secondary btn">
                                            <i class="bi bi-plus-square me-1 "></i> Edit Profile </button></a>

<div class="col-xxl-4 col-md-2">
                        <img class ="rounded-circle mb-3" src = "{{asset('AboutUs/fakhri.jpg')}}" style="width:150px">
                        <h6 style="font-size:18px;color:#09D2DD">Fakhri Arya</h6>       
                        <h6 class="card-title">Pelajar</h6>
                        <h6 class="card-title">Jayapura, Papua</h6>

                        <div style="border-radius: 100px;" class="container">

<div class="shadow p-3 mb-5 bg-body rounded">
    <div class="mx-auto">
        <div class="row row-cols-10 row-cols-10 g-10">

            <div class="content">
                        <div class="card">
                        <div class="card-body">
                        <h2>Tentang Kamu</h2>
                        <div class="shadow p-3 mb-5 bg-body rounded">
        <div class="row">
            <div class="col">
            <div class="content">
                        <div class="card">
                        <div class="card-body">
                        <h4>Tentang </h4>
                        <h7>aku adalah pelajar SMA Favorit di Jayapura </h7>
                        <h4>Tempat, Tanggal Lahir </h4>
                        <h7>Jayapura, 29 februari 1945</h7>
                        <h4>Domisili </h4>
                        <h7>Bandung, Jawa Barat </h7>

</div>
</div>
</div>

        <div class="content">
                        <div class="card">
                        <div class="card-body">
                        <h2>Informasi Tambahan</h2>
                        <div class="shadow p-3 mb-5 bg-body rounded">

            <div class="content">
                        <div class="card">
                        <div class="card-body">
                        <h4>Pekerjaan </h4>
                        <h7>Pelajar </h7>
                        <h4>Asal Sekolah </h4>
                        <h7>SMAN 1 bandung </h7>
                        <h4>Kelas/Jurusan </h4>
                        <h7>12 MIPA </h7>

            </div>

            




                
                

</div>



                @endsection