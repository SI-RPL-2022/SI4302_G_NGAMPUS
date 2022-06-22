@extends('layouts.admin')
@section ('home')
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
<!-- dashboard -->
<section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col">
                <div class="row">
                    <!-- Total Produk Card-->
                    <div class="col-xxl-4 col-md-3">
                        <div class="card info-card total-card">

                            <div class="card-body">
                                
                                <div class="d-flex align-items-center pt-3">

                                <div class="ps-3 pb-2 ">
                                    <h6 style="color:#00B5BF"> {{ $jumlah_user }}</h6>
                                    <h5 class="card-title">Total User</h5>
                                </div>
                                <div class="filter p-3">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Total Produk Card -->

                    <!-- Total Produk Card-->
                    <div class="col-xxl-4 col-md-3">
                        <div class="card info-card total-card">

                            <div class="card-body">
                                
                                <div class="d-flex align-items-center pt-3">

                                <div class="ps-3 pb-2 ">
                                    <h6 style="color:#00B5BF">{{ $jumlah_produk }} </h6>
                                    <h5 class="card-title">Total Produk</h5>
                                </div>
                                <div class="filter p-3">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Total Produk Card -->


                    <!-- Total Produk Card-->
                    <?php
                    $jumlah_artikel = $jumlah_jurusan+$jumlah_kampus
                    ?>
                    <div class="col-xxl-4 col-md-3">
                        <div class="card info-card total-card">

                            <div class="card-body">
                                
                                <div class="d-flex align-items-center pt-3">

                                <div class="ps-3 pb-2 ">
                                    <h6 style="color:#00B5BF">{{ $jumlah_artikel }}</h6>
                                    <h5 class="card-title">Total Artikel</h5>
                                </div>
                                <div class="filter p-3">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Total Produk Card -->

                                    <!-- Total Produk Card-->
                                    <div class="col-xxl-4 col-md-3">
                        <div class="card info-card total-card">

                            <div class="card-body">
                                
                                <div class="d-flex align-items-center pt-3">

                                <div class="ps-3 pb-2 ">
                                    <h6 style="color:#00B5BF"> {{ $jumlah_applied }}</</h6>
                                    <h5 class="card-title">Total Applied</h5>
                                </div>
                                <div class="filter p-3">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Total Produk Card -->


<div class="row">
<div class="col-xxl-4 col-md-6" id = statusproduk>
</div>

<div class="col-xxl-4 col-md-6" id = jenisproduk>
</div>
</div>




<!-- tabel -->
<div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                <div class="card-body">
                    
                    <div class="table-responsive ">
                        <table class="table">
                            <thead style="color:#00B5BF">
                            <tr>
                                <th scope="col">ID Registrasi</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Nomor Telepon</th>
                                <th scope="col">Email</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($daftar as $key=> $item)
                            
                            <tr>
                                <td >{{ $item->id }}</td>
                                <td >{{ $item->name }}</td>
                                <td >{{ $item->no_telp }}</td>
                                <td >{{ $item->email }}</td>
                                <td >{{ $item->status }}</td>
                                <td >
                                <div class="d-flex flex-row bd-highlight">
                                    <a href="/admin/home/{{$item->id}}" class="btn btn-detail rounded-pill">Detail</a>
                                    @csrf  

                                    </div>
                                </td>
                            </tr>
                            @endforeach


<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    Highcharts.chart('statusproduk', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Persentase Status Registrasi User'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.status}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Jumlah',
        colorByPoint: true,
        data: {!!json_encode($liststatus)!!}
    }]
});

// bar chart
Highcharts.chart('jenisproduk', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Jumlah Produk Tiap Kategori'
    },
    xAxis: {
        categories: [
            'Kepo Jurusan',
            'Major Experience',
            'Webinar'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah Produk'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [ {
        name: 'Jumlah Produk',
        data: {!!json_encode($datajumlah)!!}

    }]
});


</script>








  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></scrip>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
                            
@endsection