@extends('layouts.admin')

@section ('manajemenuser')
actived
@endsection

@section('konten')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit User</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="/admin/user">Manajemen User</a></li>
                    <li class="breadcrumb-item active">Detail User</li>
                </ol>
            </nav>
    </div>
<!-- End Page Title -->
<!-- tabel -->
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header pt-3">
                    <p class="fw-bolder mt-2" style="float:left; font-size:15px;">Edit User</p>

                        
                    </div>
            <div class="card-body">

            

    <div class="container">
    <form class="pt-4 pb-4" action="/admin/user/{{$user->id}}" method="POST" enctype="multipart/form-data">
        @csrf

        <form>
        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                <div >
                    <div class=" profile-card pt-4 d-flex flex-column align-items-center">

                    <img src="{{asset('Admin/img/'.$user->picture.'')}}" alt="Profile" class="rounded-circle">
                    <h2>{{ $user->name }}</h2>
                    <h3>{{ $user->email }}</h3>
                        <input type="file" class="form-control" name="picture" >

                    

                    </div>
                </div>

        </div>

        <div class="col-xl-8">
            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h5 class="card-title"><strong>About</strong></h5>
                <textarea  type="text" class="form-control" name="desc" required>{{ $user->desc }}</textarea>


                <h5 class="card-title mt-4"><strong>Data Pribadi User</strong></h5>

                    <div class="row">
                    <div class = "mb-3" >
                        <label for="exampleInputText" class="label">Nama :</label>
                        <input value="{{ $user->name }}" type="text" class="form-control" name="name" required>
                    </div>

                    <div class = "mb-3">
                        <label for="exampleInputText" class="label">Tempat Lahir :</label>
                        <input value="{{ $user->birthAt }}" type="text" class="form-control" name="birthAt" required>
                    </div>
                    
                    <div class = "mb-3">
                        <label for="exampleInputText" class="label">Tanggal Lahir :</label>
                        <input value="{{ $user->birthDate }}" type="text" class="form-control" name="birthDate" required>
                    </div>

                    <div class = "mb-3">
                        <label for="exampleInputText" class="label">Domisili :</label>
                        <input value="{{ $user->kota }}" type="text" class="form-control" name="kota" required>
                        <input value="{{ $user->provinsi }}" type="text" class="form-control" name="provinsi" required>
                    </div>

                    <div class = "mb-3">
                        <label for="exampleInputText" class="label">Negara :</label>
                        <input value="{{ $user->negara }}" type="text" class="form-control" name="negara" required>
                    </div>

                    <h5 class="card-title mt-4"><strong>Kontak User</strong></h5>
                    <div class = "mb-3">
                        <label for="exampleInputText" class="label">Email :</label>
                        <input value="{{ $user->email }}" type="text" class="form-control" name="email" required>
                    </div>
                    <div class = "mb-3">
                        <label for="exampleInputText" class="label">Nomor Telepon :</label>
                        <input value="{{ $user->no_telp }}" type="text" class="form-control" name="no_telp" required>
                    </div>

                    <h5 class="card-title mt-4"><strong>Informasi Tambahan</strong></h5>
                    <div class = "mb-3">
                        <label for="exampleInputText" class="label">Pekerjaan :</label>
                        <input value="{{ $user->pekerjaan}}" type="text" class="form-control" name="pekerjaan" required>
                    </div>
                    <div class = "mb-3">
                        <label for="exampleInputText" class="label">Asal Sekolah :</label>
                        <input value="{{ $user->asalSekolah }}" type="text" class="form-control" name="asalSekolah" required>
                    </div>
                    <div class = "mb-3">
                        <label for="exampleInputText" class="label">Kelas :</label>
                        <input value="{{ $user->kelas }}" type="text" class="form-control" name="kelas" required>
                    </div>
                    <div class = "mb-3">
                        <label for="exampleInputText" class="label">Jurusan :</label>
                        <input value="{{ $user->jurusan }}" type="text" class="form-control" name="jurusan" required>
                    </div>
                </div>

                    
                    <div class="mb-3" style="float:right;">
                        <button href="/admin/user" class="btn btn-hapus rounded-pill ms-2">Cancel</button>
                        <button type="submit" class="btn btn-submit rounded-pill ms-2">Submit</button>
                    </div>
                </form>




                </div>

                
    </section>

            </div>


    
    <br>

    </form>
    </div>
@endsection