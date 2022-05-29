@extends('layouts.app')
@section('produk')
active
@endsection
@section('content')

@if($jenisproduct == 'Kepo Jurusan')
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

@elseif($jenisproduct == 'Major Experience')
<div class="container">
    <div class="row pb-5">
      <div class="col-6">
        <h1 class="text-light">Major Experience</h1>
      </div>
    </div>
    <div class="row pb-5">
      <div class="col-6">
        <p class="text-light">Major Experience akan membantu kamu dengan memberikan gambaran seperti apa rasanya dunia perkuliahan itu. yuk daftarkan dirimu segara!</p>
      </div>
    </div>
</div>

@else($jenisproduct == 'Webinar')
<div class="container">
    <div class="row pb-5">
      <div class="col-6">
        <h1 class="text-light">Webinar</h1>
      </div>
    </div>
    <div class="row pb-5">
      <div class="col-6">
        <p class="text-light">Ngampus webinar hadir setiap harinya dan akan membawakan tema menarik seputar duni perkuliahan dengan narasumber yang berpengalaman dibidangnya</p>
      </div>
    </div>
</div>

@endif

    <div style="border-radius: 100px;">
    <div class="shadow p-3 mb-5 bg-body rounded">
        <div class="mx-auto">
        @if($jenisproduct == 'Kepo Jurusan')
          <h2 class="ps-4 mt-2" style="color:#666666">Jadwal Online Class : Kepo Jurusan</h2>
        @elseif($jenisproduct == 'Major Experience')
          <h2 class="ps-4 mt-2" style="color:#666666">Jadwal Online Class : Major Experience</h2>
        @else($jenisproduct == 'Webinar')
        <h2 class="ps-4 mt-2" style="color:#666666">Jadwal Online Class : Webinar</h2>
        @endif
            <div class="row row-cols-3 row-cols-3 g-4">

            @foreach ($product as $key)
            @csrf
                <div class="col" style="height: 500px;">
                    <div class="m-4 shadow p-3 mb-5 bg-body rounded">
                    <img src="{{asset('Admin/img/'.$key->picture.'')}}" class="card-img-top" alt="...">
                    <div class="card-body mx-auto">
                    @if($jenisproduct == 'Kepo Jurusan')
                    <center>
                      <h7 class="card-title mx-auto" style="font-size:12px"><b>Kepo Jurusan : {{ $key->namaproduct }}</b></h7>

                    @elseif($jenisproduct == 'Major Experience')
                    <center>
                      <h7 class="card-title mx-auto" style="font-size:12px"><b>Major Experience : {{ $key->namaproduct }}</b></h7>

                    @else($jenisproduct == 'Webinar')
                    <center>
                      <h7 class="card-title mx-auto" style="font-size:12px"><b>Ngampus Webinar : {{ $key->namaproduct }}</b></h7>
                    
                    @endif
                    <center>
                      <p class="card-text mx-auto" style="font-size:12px">Waktu Pelaksanaan: {{ $key->tanggal }}</p></h7>

                    </div>
                    @guest
                    <div class="card-footer">
                        <center><a type="button" href="/login" class="btn" style="background-color:#09D2DD; color:white; border-radius: 50px ">Daftar</a></center>
                    </div>
                    @else
                    <div class="card-footer">
                        <center><a type="button" href="/produk/daftar/{{$key->id}}" class="btn" style="background-color:#09D2DD; color:white; border-radius: 50px ">Daftar</a></center>
                    </div>
                    @endguest
                    </div>
                </div>
                @endforeach
            </div>
</div>
</div>



<!-- testimoni -->
<div style="border-radius: 100px;">
    <div class="shadow p-3  bg-body rounded">
        <div class="mx-auto">
        @if($jenisproduct == 'Kepo Jurusan')
          <h2 class="ps-4 mt-2" style="color:#666666">Testimoni Peserta Kepo Jurusan</h2>
        @elseif($jenisproduct == 'Major Experience')
          <h2 class="ps-4 mt-2" style="color:#666666">Testimoni Peserta Major Experience</h2>
        @else($jenisproduct == 'Webinar')
        <h2 class="ps-4 mt-2" style="color:#666666">Testimoni Peserta Webinar</h2>
        @endif

            <div class="row row-cols-3 row-cols-3 g-4">
            @foreach ($testimoniproduk as $item)
            @if ($item->show == "yes")
            @csrf
                <div class="col" style="height: 500px;">
                    <div class="m-4 shadow p-3 mb-5 bg-body rounded">
                    <center><img src="{{asset('Admin/img/'.$item->picture.'')}}" class="card-img-top rounded-circle" style="width:150px" alt="...">
                    </center>
                    <div class="card-body mx-auto">
                        <h7 class="card-title mx-auto" style="font-size:12px" ><b>“{{ $item->desc }}”</b>
                        <p class="card-text text-muted mt-3" style="font-size:12px">- {{ $item->name }}</p></h7>
                    </div>
                    </div>
                </div>
            @endif
            @endforeach

                

                

</div>
</div>


</div>
</div>
</div>
</div>

@endsection