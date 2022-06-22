@extends('layouts.app')
@section('about')
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
            </div>
            <div class="col-4">
            <img src="{{asset('Logo/logo.png')}}" class="img-fluid" alt="...">
            </div>
            <div class="col-8">
            <h3 class="fw-bold pb-4">Apa itu Ngampus?</h3>
            <p class="fs-4 lh-lg text-muted">Ngampus adalah akan membawa pembahasan seputar pengenalan dunia perkuliahan mulai dari mata kuliah apa saja yang dipelajari, skill apa saja yang di kembangkan, prospek karir, dll . So tunggu apalagii yuk buruan daftarkan diri dengan klik tombol daftar dibawah karena slot peserta snagat terbatas  </p>
            </div>
        </div>
    </div>
    <br><br><hr>
    
    <div class="container mt-5 pt-5">
        <div class="row align-items-center">
            <div class="col-12 text-center pb-5">
                <h2 class="fw-bold">Our Impact</h2>
            </div>
                
            <div class="row">
                <!-- Total Produk Card-->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card total-card">
                        <div class="card-body">                    
                            <center><h6 style="font-size:40px;color:#001F5C">{{ $jumlah_user }}</h6>
                            <h5 class="card-title">Total Participant</h5></center>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card total-card">
                        <div class="card-body">                    
                            <center><h6 style="font-size:40px;color:#001F5C">{{ $jumlah_produk }}</h6>
                            <h5 class="card-title">Total Online Class</h5></center>
                        </div>
                    </div>
                </div>
                <?php
                $jumlah_artikel = $jumlah_jurusan+$jumlah_kampus
                ?>
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card total-card">
                        <div class="card-body">                    
                            <center><h6 style="font-size:40px;color:#001F5C">{{ $jumlah_artikel }}</h6>
                            <h5 class="card-title">Total Article</h5></center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


            <br><br><hr>
    
    <div class="container mt-5 pt-5">
        <div class="row align-items-center">
            <div class="col-12 text-center pb-5">
                <h2 class="fw-bold">Our Team</h2>
            </div>
            <div class="row">
                <!-- Total Produk Card-->
                <div class="col-xxl-4 col-md-2">
                        <img class ="rounded-circle mb-3" src = "{{asset('AboutUs/dita.jpg')}}" style="width:150px">
                        <center><h6 style="font-size:18px;color:#09D2DD">Pradita Cahyani</h6>
                            <h7 class="card-title">Chief Technology Officer</h7></center>
                </div>

                <div class="col-xxl-4 col-md-2">
                        <img class ="rounded-circle mb-3" src = "{{asset('AboutUs/virza.jpg')}}" style="width:150px">
                        <center><h6 style="font-size:18px;color:#09D2DD">Virza Melati</h6>
                            <h7 class="card-title">Chief Creative Officer</h7></center>
                </div>

                <div class="col-xxl-4 col-md-2">
                        <img class ="rounded-circle mb-3" src = "{{asset('AboutUs/rafi.jpg')}}" style="width:150px">
                        <center><h6 style="font-size:18px;color:#09D2DD">Achmad Rafi</h6>
                            <h7 class="card-title">Chief Operating Officer</h7></center>
                </div>

                <div class="col-xxl-4 col-md-2">
                        <img class ="rounded-circle mb-3" src = "{{asset('AboutUs/alif.jpg')}}" style="width:150px">
                        <center><h6 style="font-size:18px;color:#09D2DD">Alif Maulana</h6>
                            <h7 class="card-title">Chief Human Resorurce Officer</h7></center>
                </div>

                <div class="col-xxl-4 col-md-2">
                        <img class ="rounded-circle mb-3" src = "{{asset('AboutUs/fakhri.jpg')}}" style="width:150px">
                        <center><h6 style="font-size:18px;color:#09D2DD">Fakhri Arya</h6>
                            <h7 class="card-title">Chief Executive Officer</h7></center>
                </div>
            </div>


        </div>
    </div>

    <br><br><hr>
    
    <div class="container mt-5 pt-5">
        <div class="row align-items-center">
            <div class="col-12 text-center pb-5">
                <h2 class="fw-bold">Frequently Asked Questions</h2>
            </div>

            <div style="border-radius: 100px;">
                <div class="shadow p-3  bg-body rounded">
                    <div class="mx-auto">
                    <h2 class="ps-4 mt-2" style="color:#666666">FAQ Seputar Produk Ngampus</h2>  
                        <div class="row row-cols p-4 g-4">
                        <div class="accordion " id="accordionExample">
                            @foreach ($faq as $faqs)
                            @if ($faqs->kategori == "Pertanyaan Umum")
                            @csrf
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                {{ $faqs->pertanyaan }}
                                </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                {{ $faqs->jawaban }}
                                </div>
                                </div>
                            </div>
                            @endif
            @endforeach

            

            
    


@endsection