@extends('layouts.app')
@section('produk')
active
@endsection
@section('content')
<div class="container">
    <div class="row pb-5">
      <div class="col-6">
        <h1 class="text-light">Kepo Jurusan</h1>
      </div>
    </div>
    <div class="row pb-5">
      <div class="col-6">
        <p class="text-light">Kepo Jurusan akan membantu kamu untuk menentukan jurusan impianmu, yuk daftarkan dirimu segera!</p>
      </div>
    </div>
</div>


<div style="border-radius: 100px;">
    <div class="shadow p-3 mb-5 bg-body rounded">
        <div class="mx-auto">

          <h2 class="ps-4 mt-2" style="color:#666666">Kepo Jurusan : Hukum</h2>

            <div class="row row-cols g-4">

            <form>     
                <div class="col p-4" style="height: auto;">
                    <center>
                    <div class="mt-4">
                        <img src="{{asset('Admin/img/kj0.jpg')}}" alt="" width="300"><br><br>
                        <h4>Seri Profesi Hukum: Jasa</h4>
                        <p class="fw-light">Diselenggarakan oleh : PH-UPH</p>
                    </div>
                    </center>
                    
                    <div class="  rounded">
                        <label for="exampleInputText" class="fw-bold  form-label">Deskripsi</label>
                        <p class="fw-light">Free Webinar bersama Dr. Bobi Prabowo, Sp.Em sebagai Ultrasound for Triage Covid-19 Patieints in Emergency Department dan Dr. Jollis, Sp.Em sebagai Hemodynamic Monitoring with ulrasound for emergency cases in new norml era. Acara ini disupport oleh airindo dan diselenggarakan oleh sonoSite FujiFilm.</p>
                    </div>
                    <div class="rounded">
                        <label for="exampleInputText" class="fw-bold  form-label">Kuota</label>
                        <p class="fw-light">30 orang</p>
                    </div>
                    <div class="rounded">
                        <label for="exampleInputText" class="fw-bold  form-label">Tanggal Pelaksanaan</label>
                        <p class="fw-light">15 Juni 2021</p>
                    </div>
                    <div class="rounded">
                        <label for="exampleInputText" class="fw-bold  form-label">Lokasi</label>
                        <p class="fw-light"><i class='bx bxs-map'></i>Zoom Meeting</p>
                        
                    </div>
                    <hr>
                    <h5>Form Pendaftaran</h5>
                    <div class="rounded mb-3">
                        <label for="exampleInputText" class="text-muted form-label">Nama</label>
                        <input value="name" type="text" class="form-control" name="name" readonly>
                    </div>
                    <div class="rounded mb-3">
                        <label for="exampleInputText" class="text-muted form-label">Nomor Telepon</label>
                        <input value="nomor telepon" type="text" class="form-control" name="name" readonly>
                    </div>
                    <div class=" mb-3">
                        <label for="exampleInputText" class="text-muted form-label">Email</label>
                        <input value="email" type="text" class="form-control" name="email" readonly>
                    </div>
                    <div class=" mb-5">
                        <label for="exampleInputText" class="text-muted form-label">Alasan mengikuti</label>
                        <textarea value="email" type="text" class="form-control" name="email" required></textarea>
                    </div>
                    
                    <div class="d-grid gap-2">
                        <button type="button" href="" class="btn " style="background-color:#09D2DD; color:white ; border-radius: 50px">Daftar</button></center>
                    </div>
                


@endsection