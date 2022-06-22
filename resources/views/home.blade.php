@extends('layouts.app')
@section('beranda')
active
@endsection
@section('content')

<div class="container">
   <div class="row pb-5">
     <div class="col-6">
       <h1 class="text-light">Expand Your Fidelity With Ngampus!</h1>
     </div>
   </div>
   <div class="row pb-5">
     <div class="col-6">
       <p class="text-light">Ngampus adalah sebuah platform yang bergerak dibidang pendidikan......</p>
     </div>
   </div>
   <div class="row pb-5">
      <div class="col-6">
         <a class="btn btn-outline-light btn-lg" href="#" role="button">Explore</a>
      </div>
    </div>
 </div>
 @foreach ($product as $key)
  <div class="container mt-5 pt-5">
    <div class="row align-items-center">
      <div class="col-12 text-center pb-5">
        <h2 class="fw-bold">Temukan Layanan Terbaik dari Ngampus Disini</h2>
      </div>
    <div class="col-4">
      @csrf
      <div class="col" style="height: 500px;">
        <div class="m-4 shadow p-3 mb-5 bg-body rounded">
          <img src="{{asset('Admin/img/'.$key->picture.'')}}" class="card-img-top" alt="...">
          <div class="card-body mx-auto">
          <h7 class="card-title mx-auto" style="font-size:12px"><b>Kepo Jurusan : {{ $key->namaproduct }}</b></h7>
          <center>
            <p class="card-text mx-auto" style="font-size:12px">Waktu Pelaksanaan: {{ $key->tanggal }}</p></h7>
        </div>
      </div>
    </div>
    <div class="col-8">
      <h3 class="fw-bold pb-4">Kepo Jurusan</h3>
      <p class="fs-4 lh-lg text-muted">Kepo Jurusan akan membawa pembahasan seputar pengenalan dunia perkuliahan mulai dari mata kuliah apa saja yang dipelajari, skill apa saja yang di kembangkan, prospek karir, dll . So tunggu apalagii yuk buruan daftarkan diri dengan klik tombol daftar dibawah karena slot peserta snagat terbatas </p>
    </div>

  </div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-8">
        <h3 class="fw-bold pb-4 text-end">Major Experience</h3>
        <p class="fs-4 lh-lg text-end text-muted">Major experience akan membawa pembahasan yang lebih dalam seputar dunia perkuliahan seperti para peserta akan merasakan langsung belajar mata kuliah dasar yang di ajarkan di jurusan yang peserta pilih. So tunggu apalagii yuk segera daftarkan diri kalian karena slot peserta snagat terbatas </p>
      </div>
      <div class="col-4">
        @csrf
        <div class="col" style="height: 500px;">
          <div class="m-4 shadow p-3 mb-5 bg-body rounded">
            <img src="{{asset('Admin/img/'.$key->picture.'')}}" class="card-img-top" alt="...">
            <div class="card-body mx-auto">
            <h7 class="card-title mx-auto" style="font-size:12px"><b>Major Experience : {{ $key->namaproduct }}</b></h7>
            <center>
              <p class="card-text mx-auto" style="font-size:12px">Waktu Pelaksanaan: {{ $key->tanggal }}</p></h7>
          </div>
        </div>
      </div>
    </div>

    <div class="col-4">
      @csrf
      <div class="col" style="height: 500px;">
        <div class="m-4 shadow p-3 mb-5 bg-body rounded">
          <img src="{{asset('Admin/img/'.$key->picture.'')}}" class="card-img-top" alt="...">
          <div class="card-body mx-auto">
          <h7 class="card-title mx-auto" style="font-size:12px"><b>Webinar : {{ $key->namaproduct }}</b></h7>
          <center>
            <p class="card-text mx-auto" style="font-size:12px">Waktu Pelaksanaan: {{ $key->tanggal }}</p></h7>
        </div>
      </div>
    </div>
    <div class="col-8">
      <h3 class="fw-bold pb-4">Webinar</h3>
      <p class="fs-4 lh-lg text-muted">Kepo Jurusan akan membawa pembahasan seputar pengenalan dunia perkuliahan mulai dari mata kuliah apa saja yang dipelajari, skill apa saja yang di kembangkan, prospek karir, dll . So tunggu apalagii yuk buruan daftarkan diri dengan klik tombol daftar dibawah karena slot peserta snagat terbatas </p>
    </div>
 @endforeach   
    <div class="container mt-5 pt-5">
      <div class="row">
        <div class="col-12">
        <h2 class="fw-bold text-center text-info pb-5">Kami Menawarkan</h2>
        </div>
        <div class="col-4 text-center">
          <img src="{{asset('/img/create.png')}}" class="img-fluid" alt="...">
          <h3 class="fw-bold pb-4 pt-4 text-info">Create</h3>
          <p class="px-5">Kami  memiliki ambisi untuk mencetak generasi muda yang berkualitas</p>
        </div>
        <div class="col-4 text-center">
          <img src="{{asset('/img/creative.png')}}" class="img-fluid" alt="...">
          <h3 class="fw-bold pb-4 pt-4 text-info">Creative</h3>
          <p class="px-5">Akses kapan pun dan dimanapun. layanan kami bisa dijalankan pada pengankat mobile maupun desktop</p>
        </div>
        <div class="col-4 text-center">
          <img src="{{asset('/img/collaborate.png')}}" class="img-fluid" alt="...">
          <h3 class="fw-bold pb-4 pt-4 text-info">Collaborate</h3>
          <p class="px-5">Bekerjasama dengan berbagai macam pihak untuk menghadirkan informasi faktual dunia perkuliahan </p>
        </div>
      </div>
    </div>
</div>


@endsection