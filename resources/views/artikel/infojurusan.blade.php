@extends('layouts.app')
@section('artikel')
active
@endsection
@section('content')
<div class=" p-5 bg-body shadow" style="border-radius: 25px">

        <div class="container">
            <h3 class="card-title fw-bold" style="color:#666666">Jurusan {{ $data_jurusan ['nama_jurusan'] }}</h3>
            <p class="text-justify text-muted mt-3">{{ $data_jurusan ['desc_jurusan'] }}</p>  
        </div>
        <div class="container mt-5">
            <h3 class="card-title fw-bold" style="color:#666666">Kenapa Harus Memilih Jurusan {{ $data_jurusan ['nama_jurusan'] }}? </h3>
            <div class="row">
                <div class="col-6 ">
                    <div class="bg-body shadow mb-3 border" style="border-radius : 25px">
                        <div class="row g-0 align-data_jurusans-center ">
                          <div class="col-md-2 ">
                            <h1 style="color:#666666" class="fw-bold text-center position-relative">1.</h1>
                          </div>
                          <div class="col-md-10">
                            <div class="card-body">
                              <p class="card-text">{{ $data_jurusan ['alasan1'] }}</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="bg-body shadow border" style="border-radius : 25px">
                        <div class="row g-0 align-data_jurusans-center">
                          <div class="col-md-2">
                            <h1 style="color:#666666" class="fw-bold text-center position-relative">2.</h1>
                          </div>
                          <div class="col-md-10">
                            <div class="card-body">
                              <p class="card-text">{{ $data_jurusan ['alasan2'] }}</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="bg-body shadow mb-3 border" style="border-radius : 25px">
                        <div class="row g-0 align-data_jurusans-center">
                          <div class="col-md-2">
                            <h1 style="color:#666666" class="fw-bold text-center position-relative">3.</h1>
                          </div>
                          <div class="col-md-10">
                            <div class="card-body">
                              <p class="card-text">{{ $data_jurusan ['alasan3'] }}</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="bg-body shadow mb-3 border" style="border-radius : 25px">
                        <div class="row g-0 align-data_jurusans-center">
                          <div class="col-md-2">
                            <h1 style="color:#666666" class="fw-bold text-center position-relative">4.</h1>
                          </div>
                          <div class="col-md-10">
                            <div class="card-body">
                              <p class="card-text">{{ $data_jurusan ['alasan4'] }}</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <h3 class="card-title fw-bold" style="color:#666666">Prospek Kerja Jurusan {{ $data_jurusan ['nama_jurusan'] }}</h3>
            <center>
            <div class="row">
                <div class="col-2  text-center">
                    <div class="bg-body shadow">
                        <div class="card-body">
                          <p class="fw-bold text-center position-relative">{{ $data_jurusan ['prospek1'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-2  text-center">
                  <div class="bg-body shadow">
                      <div class="card-body">
                        <p class="fw-bold text-center position-relative">{{ $data_jurusan ['prospek2'] }}</p>
                      </div>
                  </div>
                </div>
              <div class="col-2  text-center">
                <div class="bg-body shadow">
                    <div class="card-body">
                      <p class="fw-bold text-center position-relative">{{ $data_jurusan ['prospek3'] }}</p>
                    </div>
                </div>
              </div>
              <div class="col-2  text-center">
                <div class="bg-body shadow">
                    <div class="card-body">
                      <p class="fw-bold text-center position-relative">{{ $data_jurusan ['prospek4'] }}</p>
                    </div>
                </div>
              </div>
              <div class="col-2  text-center">
                <div class="bg-body shadow">
                    <div class="card-body">
                      <p class="fw-bold text-center position-relative">{{ $data_jurusan ['prospek5'] }}</p>
                    </div>
                </div>
              </div>
              <div class="col-2  text-center">
                <div class="bg-body shadow">
                    <div class="card-body">
                      <p class="fw-bold text-center position-relative">{{ $data_jurusan ['prospek6'] }}</p>
                    </div>
                </div>
              </div>
            </div>
        </div>
        
    </div>
</div>


@endsection