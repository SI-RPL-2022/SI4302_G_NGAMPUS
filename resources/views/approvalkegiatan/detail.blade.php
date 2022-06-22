@extends('layouts.admin')
@section ('approvalkegiatan')
actived
@endsection
@section('konten')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Overview</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Beranda</a></li>
    </div>
<!-- End Page Title -->

<!-- tabel -->
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-body">

    <div class="container">
    <form class="pt-4 pb-4">
        @csrf
        @foreach($daftar as $key=> $item)

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Register ID :</strong></label>
        <p> {{ $item->id }} </p>
    </div>

    <hr>

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>ID User :</strong></label>
        <p> {{ $item->id_user }} </p>
    </div>

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Nama User :</strong></label>
        <p> {{ $item->name }} </p>
    </div>

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>No Telpon User :</strong></label>
        <p> {{ $item->no_telp }} </p>
    </div>

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Email User :</strong></label>
        <p> {{ $item->email }} </p>
    </div>

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Alasan :</strong></label>
        <p> {{ $item->alasan }} </p>
    </div>

    <hr>

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Nama Produk Yang Didaftar :</strong></label>
        <p> {{ $item->namaproduct }} </p>
    </div>

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Jenis Produk Yang DIdaftar :</strong></label>
        <p> {{ $item->jenisproduct }} </p>
    </div>

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Penyelenggara Produk Yang DIdaftar :</strong></label>
        <p> {{ $item->penyelenggara}} </p>
    </div>

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Tanggal Produk Yang DIdaftar :</strong></label>
        <p> {{ $item->tanggal}} </p>
    </div>

    <div class="mb-3">
        <label for="exampleInputText" class="form-label"><strong>Deskripsi Produk Yang DIdaftar :</strong></label>
        <p> {{ $item->desc }} </p>
    </div>
    @endforeach

@endsection