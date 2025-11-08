@extends('layout.template')

@section('title', 'Home')

@section('content')
    <div class="container mt-5">
        <div class="row mb-5">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('/images/ubgg.jpg') }}" class="card-img-top" alt="Universitas Bumigora">
                    <div class="card-body">
                        <h2 class="card-title">Universita Bumigora</h2>
                        <p class="card-text">Terkenal Akan Jurusan Komputernya yang tiada duanya, selalu memenangi kejuaraan komputer di daerah NTB 🏆</p>
                        <a href="/post/1" class="btn btn-link">Read More →</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('/images/unram.jpeg') }}" class="card-img-top" alt="Universitas Mataram">
                    <div class="card-body">
                        <h2 class="card-title">Universitas Mataram</h2>
                        <p class="card-text">Universitas negeri terkemuka di Nusa Tenggara Barat yang menjadi pusat pendidikan tinggi berkualitas.</p>
                        <a href="/post/2" class="btn btn-link">Read More →</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('/images/UIN.jpg') }}" class="card-img-top" alt="UIN Mataram">
                    <div class="card-body">
                        <h2 class="card-title">UIN Mataram</h2>
                        <p class="card-text">Universitas Islam Negeri yang menawarkan berbagai disiplin ilmu dengan integrasi nilai-nilai keislaman.</p>
                        <a href="/post/3" class="btn btn-link">Read More →</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('/images/undikma.jpg') }}" class="card-img-top" alt="Undikma">
                    <div class="card-body">
                        <h2 class="card-title">Universitas Pendidikan Mandalika</h2>
                        <p class="card-text">Universitas yang terbentuk dari penggabungan beberapa institusi pendidikan pada tahun 2019.</p>
                        <a href="/post/4" class="btn btn-link">Read More →</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('/images/unw.jpg') }}" class="card-img-top" alt="Universitas Nahdlatul Wathan">
                    <div class="card-body">
                        <h2 class="card-title">Universitas Nahdlatul Wathan Mataram</h2>
                        <p class="card-text">Universitas swasta terkemuka di Mataram yang berkomitmen menghasilkan lulusan berkualitas.</p>
                        <a href="/post/5" class="btn btn-link">Read More →</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('/images/unizar.webp') }}" class="card-img-top" alt="Unizar">
                    <div class="card-body">
                        <h2 class="card-title">Universitas Islam Al-Azhar</h2>
                        <p class="card-text">Universitas Islam swasta terbaik di Nusa Tenggara Barat yang dikenal menghasilkan para pemimpin.</p>
                        <a href="/post/6" class="btn btn-link">Read More →</a>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
@endsection