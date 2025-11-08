@extends('layout.template')

@section('title', 'About')

@section('content')
    <div class="container mt-5">
        <!-- Foto Coding -->
        <div class="mb-4">
            <img src="{{ asset('asstes/images/download.png') }}" class="img-fluid rounded" alt="Coding Photo" style="max-width: 100%; height: auto;">
        </div>
        
        <div class="row">
            <!-- Card Profil 1: KHALIF FAUZAN FIRDAUS -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">khalif fauzan firdauss</h2>
                        <p class="card-text">ini projek saya 😎</p>
                        <p class="text-muted">2301040033</p>
                    </div>
                </div>
            </div>

            <!-- Card Profil 2: Gifari alroofif -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Gifari alroofif</h2>
                        <p class="card-text">professional front end designer</p>
                        <p class="text-muted">2301040007</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
