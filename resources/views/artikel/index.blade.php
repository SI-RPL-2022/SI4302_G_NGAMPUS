@extends('layouts.app')
@section('artikel')
active
@endsection
@section('content')

<div class="container">
    <div class="row pb-4">
        <div class="col-6">
        <h1 class="text-light">Info Seputar Kampus dan  Jurusan Terlengkap? Cuman di Ngampus</h1>
        </div>
    </div>

    </div>
<br>
<br>


<div style="border-radius: 100px;" class="container">

    <div class="shadow p-3 mb-5 bg-body rounded">
        <div class="mx-auto">
        <h2 class="ps-4 mt-2" style="color:#666666">Artikel Jurusan</h2>
            <div class="row row-cols-3 row-cols-3 g-4">
            @foreach ($jurusan as $item)
                <div class="col" style="height: 500px;">
                    <div class="m-4 shadow p-3 mb-5 bg-body rounded">
                    <img src="{{asset('Template/img/logo.png')}}" class="card-img-top" alt="...">
                    <div class="card-body mx-auto">
                    <center>
                    <h7 class="card-title"><b>{{ $item ['nama_jurusan'] }}</b>
                        <p class="card-text text-muted" style="font-size:12px">
                        <?php
                            $num_char = 300;
                            $text = $item ['desc_jurusan'];
                            echo substr($text, 0, $num_char) . '...';
                        ?>
                        </p></h7></center>
                    </div>
                    <div class="card-footer">
                        <center>
                            <a type="button" href="/artikel/direktori/jurusan/{{ $item ['id'] }}" class="btn" style="background-color:#09D2DD; color:white ; border-radius: 50px">See details</a></center>
                    </div>
                    </div>

                </div>
                @endforeach
            </div>

        </div>
</div>
</div>

<!-- artikel kampus -->
<div style="border-radius: 100px;" class="container">

    <div class="shadow p-3 mb-5 bg-body rounded">
        <div class="mx-auto">
        <h2 class="ps-4 mt-2" style="color:#666666">Artikel Kampus</h2>
        
            <div class="row row-cols-3 row-cols-3 g-4">
            @foreach ($kampus as $item)
                <div class="col" style="height: 500px;">
                
                    <div class="m-4 shadow p-3 mb-5 bg-body rounded">
                    
                    <img src="{{asset('Template/img/logo.png')}}" class="card-img-top" alt="...">
                    <div class="card-body mx-auto">
                    <center>
                    <h7 class="card-title"><b>{{ $item ['nama_kampus'] }}</b>
                        <p class="card-text text-muted" style="font-size:12px">
                        <?php
                            $num_char = 300;
                            $text = $item ['desc_kampus'];
                            echo substr($text, 0, $num_char) . '...';
                        ?>
                        </p></h7></center>
                    </div>
                    <div class="card-footer">
                        <center>
                            <a type="button" href="{{route('kampus',[$item->id])}}" class="btn" style="background-color:#09D2DD; color:white ; border-radius: 50px">See details</a></center>
                    </div>
                    </div>
                </div>
                @endforeach   
            </div>

</div>
</div>
</div>
@endsection