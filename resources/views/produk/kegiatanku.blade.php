@extends('layouts.app')
@section('produk')
active
@endsection
@section('content')
<div class="container">
    <div class="row pb-5">
      <div class="col-6">
        <h1 class="text-light">Kegiatanku</h1>
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
            <div class="row row-cols p-4 g-4">
                <div class="list-group shadow rounded bg-body">
                @foreach ($daftar as $item)
                

                    <li class="p-3 mt-3 border-0 border-bottom list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">{{ $item ['namaproduct'] }}</div>
                            {{ $item ['jenisproduct'] }}
                            <p class="text-muted">Waktu Pelaksanaan : {{ $item ['tanggal'] }}</p>
                            </div>
                        <span class="badge rounded-pill" style="background-color:#E4C65B">Applied</span>
                    </li>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection