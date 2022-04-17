@extends('layouts.app')

@section('content')
@foreach ($data_jurusan as $item)
<div class="card" style="border-radius: 25px">
    <div class="card-body">
        <div class="container">
            <h3 class="card-title fw-bold">Jurusan {{ $item ['jurusan'] }}</h3>
            <p class="text-justify text-muted mt-3">{{ $item ['desc_jurusan'] }}</p>  
        </div>
        <div class="container mt-5">
            <h3 class="card-title fw-bold">Kenapa Harus Memilih Jurusan {{ $item ['jurusan'] }}? </h3>
            <div class="row">
                <div class="col-6 ">
                    <div class="card mb-3 border" style="border-radius : 15px">
                        <div class="row g-0 align-items-center ">
                          <div class="col-md-2 ">
                            <h1 class="fw-bold text-center position-relative">1.</h1>
                          </div>
                          <div class="col-md-10">
                            <div class="card-body">
                              <p class="card-text">{{ $item ['alasan_1'] }}</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mb-3 border" style="border-radius : 15px">
                        <div class="row g-0 align-items-center">
                          <div class="col-md-2">
                            <h1 class="fw-bold text-center position-relative">2.</h1>
                          </div>
                          <div class="col-md-10">
                            <div class="card-body">
                              <p class="card-text">{{ $item ['alasan_2'] }}</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mb-3 border" style="border-radius : 15px">
                        <div class="row g-0 align-items-center">
                          <div class="col-md-2">
                            <h1 class="fw-bold text-center position-relative">3.</h1>
                          </div>
                          <div class="col-md-10">
                            <div class="card-body">
                              <p class="card-text">{{ $item ['alasan_3'] }}</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mb-3 border" style="border-radius : 15px">
                        <div class="row g-0 align-items-center">
                          <div class="col-md-2">
                            <h1 class="fw-bold text-center position-relative">4.</h1>
                          </div>
                          <div class="col-md-10">
                            <div class="card-body">
                              <p class="card-text">{{ $item ['alasan_4'] }}</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <h3 class="card-title fw-bold">Prospek Kerja Jurusan {{ $item ['jurusan'] }}</h3>
            <div class="row">
                <div class="col-2  text-center">
                    <div class="card">
                        <div class="card-body">
                          <p class="fw-bold text-center position-relative">{{ $item ['prospek_1'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-2  text-center">
                  <div class="card">
                      <div class="card-body">
                        <p class="fw-bold text-center position-relative">{{ $item ['prospek_2'] }}</p>
                      </div>
                  </div>
              </div>
              <div class="col-2  text-center">
                <div class="card">
                    <div class="card-body">
                      <p class="fw-bold text-center position-relative">{{ $item ['prospek_3'] }}</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="container mt-5">
            <h3 class="card-title fw-bold">Testimoni Mahasiswa {{ $item ['jurusan'] }}</h3>
            <div class="row">
                <div class="col-12 ">
                    <div class="card mb-3 border" style="border-radius : 15px">
                        <div class="row g-0 align-items-center ">
                          <div class="col-md-3 ">
                            <img class="img-fluid mx-auto d-block" src="{{ asset("img/profile-picture.png") }}" alt="">
                          </div>
                          <div class="col-md-9">
                            <div class="card-body">
                                <h4 class="card-text fw-bold">Achmad Rafi</h4>
                                <h5 class="card-text text-muted">Sistem Informasi, Telkom Universitu</h5>
                                <p class="card-text">Di Telkom University fasilitas nya sangat memadai dalam kegiatan belajar mengajar, baik dari kelas, lab, dan juga auditorium nya. Selain itu di telkom juga tersedia sarana prasarana yang bermacam-macam untuk berolahraga sehingga mahasiswa tidak jenuh dengan kegiatan di kampus.</p>
                                <p class="card-text">Di sistem informasi saya mempelajari mengenai hal hal yang bersangkutan dengan teknologi, baik secara software maupun hardware. Selain itu saya juga mempelajari bagaimana merancang dan melakukan proses bisnis yang baik sehingga dapat terintegrasi dengan teknologi yang digunakan.</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection