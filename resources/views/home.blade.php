@extends('layouts.home')

@section('container')
<div class="py-7">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-4">
            <img src="assets/app-img/pantai03.jpg" class="d-block mx-lg-auto img-fluid" alt="Hotel Image 02" width="700" height="500" loading="lazy">
        </div>
        <div class="col-10 col-sm-8 col-lg-4">
            <img src="assets/app-img/pantai.jpg" class="d-block mx-lg-auto img-fluid" alt="Hotel Image 02" width="700" height="500" loading="lazy">
        </div>
        <div class="col-10 col-sm-8 col-lg-4">
            <img src="assets/app-img/pantai02.jpg" class="d-block mx-lg-auto img-fluid" alt="Hotel Image 02" width="700" height="500" loading="lazy">
        </div>
        
    </div>
</div>
<div class="py-10">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-lg-12">
            <h2 class="text-center display-5 fw-bold lh-1 mb-3">Sunshine Hotel</h2>
            <p class="lead">Mau liburan nyaman dan aman bersama keluarga? tapi bingung cari penginapan? kunjungilah SUNSHINE HOTEL yang berlokasi tepat dipinggir pantai pulau bali.Sunshine hotel memiliki fasilitas yang sangat lengkap dan memadai tentunya akan membuat liburan anda bersama keluarga semakin asik dan nikmat,dengan menawarkan pemandangan laut langsung dan andai juga dapat melihat keindahan matahari terbit dan tenggelam.yuk kunjungi sunshine hotel sekarang juga! </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="register" class="btn btn-primary btn-lg px-4 me-md-2">Daftar</a>
                <a href="login" class="btn btn-outline-secondary btn-lg px-4">Login</a>
            </div>
      </div>
    </div>
</div>
@endsection