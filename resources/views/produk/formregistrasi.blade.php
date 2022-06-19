@extends('layouts.app')
@section('produk')
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
</div>


<div style="border-radius: 100px;">
    <div class="shadow p-3 mb-5 bg-body rounded">
        <div class="mx-auto">
            
            <h2 class="ps-4 mt-2" style="color:#666666">Daftar: {{ $list_produk ['namaproduct'] }}</h2>

            <div class="row row-cols g-4">

            <form class="needs-validation" method="POST" action="/kegiatanku/{{ Auth::user()->id }}">
            @csrf
                <div class="col p-4" style="height: auto;">
                    <center>
                    <div class="mt-4">              
                        <img src="{{asset('Admin/img/'.$list_produk->picture.'')}}" alt="" width="300"><br><br>
                        <h4>{{ $list_produk ['namaproduct'] }}</h4>
                        <p class="fw-light">{{ $list_produk ['penyelenggara'] }}</p>
                    </div>
                    </center>
                    
                    <div class="  rounded">
                        <label for="exampleInputText" class="fw-bold  form-label">Deskripsi</label>
                        <p class="fw-light">{{ $list_produk ['desc'] }}</p>
                    </div>
                    <div class="rounded">
                        <label for="exampleInputText" class="fw-bold  form-label">Kuota</label>
                        <p class="fw-light">{{ $list_produk ['kuota'] }}</p>
                    </div>
                    <div class="rounded">
                        <label for="exampleInputText" class="fw-bold  form-label">Tanggal Pelaksanaan</label>
                        <p class="fw-light">{{ $list_produk ['tanggal'] }}</p>
                    </div>
                    <div class="rounded">
                        <label for="exampleInputText" class="fw-bold  form-label">Lokasi</label>
                        <p class="fw-light"><i class='bx bxs-map'></i>{{ $list_produk ['lokasi'] }}</p>
                    </div>
                    
                    <!--hidden-  -->
                    <input type="hidden" nama="id_user" value="{{ Auth::user()->id}}">
                    <input type="hidden" name="namaproduct" value="{{ $list_produk ['namaproduct'] }}"/> 
                    <input type="hidden" name="jenisproduct" value="{{ $list_produk ['jenisproduct'] }}"/>                                               
                    <input type="hidden" name="penyelenggara" value="{{ $list_produk ['penyelenggara'] }}"/>
                    <input type="hidden" name="desc" value="{{ $list_produk ['desc'] }}"/>
                    <input type="hidden" name="kuota" value="{{ $list_produk ['kuota'] }}"/>
                    <input type="hidden" name="tanggal" value="{{ $list_produk ['tanggal'] }}"/>
                    <input type="hidden" name="lokasi" value="{{ $list_produk ['lokasi'] }}"/>
                    <input type="hidden" name="status" value="Applied"/>

                    <hr>

                    <h5>Form Pendaftaran</h5>
                    <div class="rounded mb-3">
                        <label for="exampleInputText" class="text-muted form-label">Nama</label>
                        <input value="{{ Auth::user()->name }}" type="text" class="form-control" name="name" readonly>
                    </div>
                    <div class="rounded mb-3">
                        <label for="exampleInputText" class="text-muted form-label">Nomor Telepon</label>
                        <input value="{{ Auth::user()->no_telp }}" type="text" class="form-control" name="no_telp" readonly>
                    </div>
                    <div class=" mb-3">
                        <label for="exampleInputText" class="text-muted form-label">Email</label>
                        <input value="{{ Auth::user()->email }}" type="text" class="form-control" name="email" readonly>
                    </div>
                    <div class=" mb-5">
                        <label for="exampleInputText" class="text-muted form-label">Alasan mengikuti</label>
                        <textarea placeholder="Masukkan Alasan Mengapa Kamu Ingin Mengikuti Kegiatan ini" type="text" class="form-control" name="alasan" required></textarea>
                    </div>
                    
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn " style="background-color:#09D2DD; color:white ; border-radius: 50px">Daftar</button></center>
                    </div>
                


@endsection