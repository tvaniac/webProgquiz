@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Software Engineering</h2>
    <div class="row">
        <!-- Artikel 1 -->
        <div class="col-md-12 mb-4">
            <div class="position-relative d-flex align-items-center p-3 rounded-3" style="background-color: #e8f0e3; border: none;">
                <!-- Gambar Thumbnail -->
                <img src="{{ asset('img/foto-psd.png') }}" alt="Pattern Software Design" class="img-fluid rounded-3 me-3" style="width: 350px; height: auto;">

                <!-- Konten Artikel -->
                <div class="flex-grow-1 pe-5">
                    <h5 class="mb-1">Pattern Software Design</h5>
                    <p class="mb-1 text-muted">21 July 2024 | by: Lili</p>
                    <p class="mb-1">Pattern Software Design adalah ...</p>
                </div>

                <!-- Tombol Read More -->
                <a href="{{ route('category.detail', ['category' => 'software-engineering']) }}" class="btn btn-dark rounded-pill position-absolute" style="bottom: 15px; right: 15px;">read more...</a>
            </div>
        </div> 

        <!-- Artikel 2 -->
        <div class="col-md-12 mb-4">
            <div class="position-relative d-flex align-items-center p-3 rounded-3" style="background-color: #e8f0e3; border: none;">
                <!-- Gambar Thumbnail -->
                <img src="{{ asset('img/foto-asd.jpg') }}" alt="Agile Software Development" class="img-fluid rounded-3 me-3" style="width: 350px; height: auto;">

                <!-- Konten Artikel -->
                <div class="flex-grow-1 pe-5">
                    <h5 class="mb-1">Agile Software Development</h5>
                    <p class="mb-1 text-muted">23 November 2024 | by: Jennie</p>
                    <p class="mb-1">Agile Software Development adalah ....</p>
                </div>

                <!-- Tombol Read More -->
                <a href="{{ route('category.detail', ['category' => 'software-engineering']) }}" class="btn btn-dark rounded-pill position-absolute" style="bottom: 15px; right: 15px;">read more...</a>
            </div>
        </div> 
        
        <!-- Artikel 3 -->
        <div class="col-md-12 mb-4">
            <div class="position-relative d-flex align-items-center p-3 rounded-3" style="background-color: #e8f0e3; border: none;">
                <!-- Gambar Thumbnail -->
                <img src="{{ asset('img/foto-cr.png') }}" alt="Code Reengineering" class="img-fluid rounded-3 me-3" style="width: 350px; height: auto;">

                <!-- Konten Artikel -->
                <div class="flex-grow-1 pe-5">
                    <h5 class="mb-1">Code Reengineering</h5>
                    <p class="mb-1 text-muted">14 May 2024 | by: Sabrina</p>
                    <p class="mb-1">Code Reengineering adalah ...</p>
                </div>

                <!-- Tombol Read More -->
                <a href="{{ route('category.detail', ['category' => 'software-engineering']) }}" class="btn btn-dark rounded-pill position-absolute" style="bottom: 15px; right: 15px;">read more...</a>
            </div>
        </div> 
    </div>  
</div>
@endsection
