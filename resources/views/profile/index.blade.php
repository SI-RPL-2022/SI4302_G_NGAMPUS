@extends('layouts.app')
@section('beranda')

@endsection
@section('content')
<div class="container">
<div class="card p-5">

    <div class="col-xxl-4 col-md-12">
    <a href="/profile/{{$user->id}}/update" style="font-size:13px; float:right;" class=" rounded-pill btn-secondary btn">
    Edit Profile </button></a>
        <img class ="rounded-circle mb-3" src = "{{asset('Admin/img/'.$user->picture.'')}}" style="width:150px">
        <h6 style="font-size:20px;color:#09D2DD">{{$user -> name}}</h6>       
        <h6 class="card-title">{{$user -> pekerjaan}}</h6>
        <h6 class="card-title">{{$user -> kota}}, {{$user -> provinsi}}</h6>
        <h6 class="card-title">{{$user -> no_telp}}</h6>
        <h6 class="card-title">{{$user -> email}}</h6>
        <br><br>     

    <div class="shadow p-3 mb-5 bg-body rounded">
        <div class="mx-auto">
            <div class="row row-cols-8 row-cols-10 g-10">
                <div class="content">
                    <div class="row">
                        <div class="col">
                            <div class="content">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Tentang </h4>
                                        <p>{{$user -> desc}}</p>
                                        <h4>Tempat, Tanggal Lahir </h4>
                                        <p>{{$user -> birthAt}} , {{$user -> birthDate}}</p>
                                        <h4>Domisili </h4>
                                        <p>{{$user -> kota}}, {{$user -> provinsi}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="content">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Pekerjaan </h4>
                                        <p>{{$user -> pekerjaan}}</p>
                                        <h4>Asal Sekolah </h4>
                                        <p>{{$user -> asalSekolah}}</p>
                                        <h4>Kelas/Jurusan </h4>
                                        <p>{{$user -> kelas}} , {{$user -> jurusan}} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
</div>
        
</div>

                @endsection