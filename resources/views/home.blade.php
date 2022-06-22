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

 <div class="container mt-5 pt-5">
  <div class="row align-items-center">
    <div class="col-12 text-center pb-5">
      <h2 class="fw-bold">Temukan Layanan Terbaik dari Ngampus Disini</h2>
    </div>
    @foreach ($master as $item)
                            @csrf
    <div class="col-4">
      <a href="/produk"><img src="{{asset('/img/administrasi-bisnis.png')}}" class="img-fluid"  alt="..."></a>
    </div>
    <div class="col-8">
      <h3 class="fw-bold pb-4">{{ $item -> jenis }}</h3>
      <p style="font-size:20px;" class="fs-4  text-muted">{{ $item -> keterangan }}</p>
    </div>
    @endforeach
  </div>


    <div class="container mt-5 pt-5">
      <div class="row">
        <div class="col-12">
        <h2 class="fw-bold text-center text-info pb-5">Kami Menawarkan</h2>
        </div>
        <div class="col-4 text-center">
          <img src="{{asset('/img/create.png')}}" class="img-fluid" alt="..." width="150px">
          <h3 class="fw-bold pb-4 pt-4 text-info">Create</h3>
          <p class="px-5">Kami  memiliki ambisi untuk mencetak generasi muda yang berkualitas</p>
        </div>
        <div class="col-4 text-center">
          <img src="{{asset('/img/creative.png')}}" class="img-fluid" alt="..." width="150px">
          <h3 class="fw-bold pb-4 pt-4 text-info">Creative</h3>
          <p class="px-5">Akses kapan pun dan dimanapun. layanan kami bisa dijalankan pada pengankat mobile maupun desktop</p>
        </div>
        <div class="col-4 text-center">
          <img src="{{asset('/img/collaborate.png')}}" class="img-fluid" alt="..." width="150px">
          <h3 class="fw-bold pb-4 pt-4 text-info">Collaborate</h3>
          <p class="px-5">Bekerjasama dengan berbagai macam pihak untuk menghadirkan informasi faktual dunia perkuliahan </p>
        </div>
      </div>
    </div>
</div>


@endsection