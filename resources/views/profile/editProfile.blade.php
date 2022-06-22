@extends('layouts.app')

@section('beranda')

@endsection

@section('content')

<div style="border-radius: 100px;" class="container">

    <div class="shadow p-3 mb-5 bg-body rounded">
        <div class="mx-auto">
            <div class="row  row-cols-10 g-4">
                <!-- tabel -->
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                            <div class="card-body">

                    <div class="container">
                    <form class="pt-4 pb-4" action="/profile/{{$user->id}}/update" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="id" value="{{ $user->id }}" hidden>
                    <div class="mb-3">
                        <label for="desc" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" name="desc" value="{{ $user->desc }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="birthAt" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" name="birthAt" value="{{ $user->birthAt }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="birthDate" class="form-label">Tanggal Lahir</label>
                        <input type="text" class="form-control" name="birthDate" value="{{ $user->birthDate }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="kontak" class="form-label">Kontak</label>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" value="{{ $user->email }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="form-label">Nomor telepon</label>
                        <input type="text" class="form-control" name="no_telp" value="{{ $user->no_telp }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="informasi_tambahan" class="form-label">Informasi Tambahan</label>
                    </div>
                    <div class="mb-3">
                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan" value="{{ $user->pekerjaan }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="asalSekolah" class="form-label">Asal Sekolah</label>
                        <input type="text" class="form-control" name="asalSekolah" value="{{ $user->asalSekolah }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" class="form-control" name="kelas" value="{{ $user->kelas }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" value="{{ $user->jurusan }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kota</label>
                        <input type="text" class="form-control" name="kota" value="{{ $user->kota }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" name="provinsi" value="{{ $user->provinsi }}" required>
                    </div>
                    <br>
                    <div class="mb-3" style="float:right;">
                        <button type="submit" class="btn btn-primary rounded-pill ms-2">Submit</button>
                    </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection