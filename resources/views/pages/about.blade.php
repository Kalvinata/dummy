@extends('layout.template')

@section('title', 'About')

@section('content')
    <div class="row justify-content-center text-center">
        <div class="col-12">
            <h1 class="display-5 mb-4">Tim Kami</h1>
            <p class="lead">Profile dua orang Keren.</p>
        </div>
    </div>

    <hr class="my-4">

    <div class="row g-4 justify-content-center">
        
        <!-- Kartu 1: JulHadi -->
        <div class="col-md-5">
            <div class="card">
                
                <img src="/images/kalif.jpg" class="card-img-top" alt="Foto JulHadi" style="height: 300px; object-fit: cover; object-position: center;">
                <div class="card-body text-center">
                    <h5 class="card-title">khalif fauzan firdauss</h5>
                    <p class="card-text text-muted">Master</p>
                    <p class="card-text"><small class="text-muted">2301040033</small></p>
                </div>
            </div>
        </div>

        <!-- Kartu 2: Gifari -->
        <div class="col-md-5">
            <div class="card">
                
                <img src="/images/gifari.jpg" class="card-img-top" alt="Foto Gifari" style="height: 300px; object-fit: cover; object-position: center;">
                <div class="card-body text-center">
                    <h5 class="card-title">Gifari alrooffif</h5>
                    <p class="card-text text-muted">branch</p>
                    <p class="card-text"><small class="text-muted">2301040007</small></p>
                </div>
            </div>
        </div>

    </div>
@endsection