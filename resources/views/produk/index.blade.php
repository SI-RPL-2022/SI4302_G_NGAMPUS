@extends('layouts.app')
@section('produk')
active
@endsection
@section('content')

<div class="container">
   <div class="row pb-4">
     <div class="col-6">
       <h1 class="text-light">Ikuti Event - Event Menarik Yang Ngampus Adakan Setiap Minggunya</h1>
     </div>
   </div>

 </div>
<br>
<br>
 

 <?php 
    $me = 'Major Experience';
    $kj = 'Kepo Jurusan';
    $webinar = 'Webinar';
?>

<div style="border-radius: 100px;" class="container">

    <div class="shadow p-3 mb-5 bg-body rounded">
        <div class="mx-auto">
            <div class="row row-cols-3 row-cols-3 g-4">
                <div class="col" style="height: 500px;">
                    <div class="m-4 shadow p-3 mb-5 bg-body rounded">
                    <img src="{{asset('Template/img/logo.png')}}" class="card-img-top" alt="...">
                    <div class="card-body mx-auto">
                    <center>
                    <h7 class="card-title"><b>Kepo jurusan</b>
                        <p class="card-text text-muted" style="font-size:12px">Kepo Jurusan akan membawa pembahasan seputar pengenalan dunia perkuliahan mulai dari mata kuliah apa saja yang dipelajari, skill apa saja yang di kembangkan, prospek karir, dll . So tunggu apalagii yuk buruan daftarkan diri dengan klik tombol daftar dibawah karena slot peserta snagat terbatas </p></h7></center>
                    </div>
                    <div class="card-footer">
                        <center>
                            <a type="button" href="/produk/{{ $kj }}" class="btn" style="background-color:#09D2DD; color:white ; border-radius: 50px">See details</a></center>
                    </div>
                    </div>
                </div>


                
                <div class="col" style="height: 500px;">
                    <div class="m-4 shadow p-3 mb-5 bg-body rounded">
                    <img src="{{asset('Template/img/logo.png')}}" class="card-img-top" alt="...">
                    <div class="card-body mx-auto">
                    <center>
                    <h7 class="card-title"><b>Major Experience</b>
                        <p class="card-text text-muted" style="font-size:12px">
                        Major Experience akan membawa pembahasan seputar pengenalan dunia pengalaman dari ahlinya mengenai skill apa saja yang di kembangkan, prospek karir, dll . So tunggu apalagii yuk buruan daftarkan diri dengan klik tombol daftar dibawah karena slot peserta sangat terbatas </p></h7></center>
                    </div>
                    <div class="card-footer">
                        <center>
                            <a type="button" href="/produk/{{ $me }}" class="btn" style="background-color:#09D2DD; color:white ; border-radius: 50px">See details</a></center>
                    </div>
                    </div>
                </div>


                <div class="col" style="height: 500px;">
                    <div class="m-4 shadow p-3 mb-5 bg-body rounded">
                    <img src="{{asset('Template/img/logo.png')}}" class="card-img-top" alt="...">
                    <div class="card-body mx-auto">
                    <center>
                    <h7 class="card-title"><b>Webinar</b>
                        <p class="card-text text-muted" style="font-size:12px">
                        Webinar akan mengundang narasumber yang berpengalaman dengan topik yang menarik seputar pengenalan dunia pengalaman dari ahlinya mengenai topik yang menarik dan up to date. So tunggu apalagii yuk buruan daftarkan diri dengan klik tombol daftar dibawah karena slot peserta sangat terbatas </p></h7></center>
                    </div>
                    <div class="card-footer">
                        <center>
                            <a type="button" href="/produk/{{ $webinar }}" class="btn" style="background-color:#09D2DD; color:white ; border-radius: 50px">See details</a></center>
                    </div>
                    </div>
                </div>

            </div>



</div>
</div>
</div>
@endsection