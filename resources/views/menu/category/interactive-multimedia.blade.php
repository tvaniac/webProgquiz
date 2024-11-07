@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Interactive Multimedia</h2>
    <br> 
    <div class="row"> 
        <!-- Artikel 1 -->
        <div class="col-md-12 mb-4">
            <div class="position-relative d-flex align-items-center p-3 rounded-3" style="background-color: #e8f0e3; border: none;">
                <!-- Gambar Thumbnail -->
                <img src="{{ asset('img/foto-hci.jpg') }}" alt="Human Computer Interaction" class="img-fluid rounded-3 me-3" style="width: 350px; height: auto;">

                <!-- Konten Artikel -->
                <div class="flex-grow-1 pe-5">
                    <h5 class="mb-1">Human Computer Interaction</h5>
                    <p class="mb-1 text-muted">14 May 2024 | by: Sabrina</p>
                    <p class="mb-1">Human-Computer Interaction atau HCI adalah studi tentang bagaimana manusia berinteraksi dengan komputer...</p>
                </div>

                <!-- Tombol Read More -->
                <a href="{{ route('category.detail', ['category' => 'interactive-multimedia']) }}" class="btn btn-dark rounded-pill position-absolute" style="bottom: 15px; right: 15px;">read more...</a>
            </div>
        </div> 

        <!-- Artikel 2 -->
        <div class="col-md-12 mb-4">
            <div class="position-relative d-flex align-items-center p-3 rounded-3" style="background-color: #e8f0e3; border: none;">
                <!-- Gambar Thumbnail -->
                <img src="{{ asset('img/foto-ue.jpeg') }}" alt="User Experience" class="img-fluid rounded-3 me-3" style="width: 350px; height: auto;">

                <!-- Konten Artikel -->
                <div class="flex-grow-1 pe-5">
                    <h5 class="mb-1">User Experience</h5>
                    <p class="mb-1 text-muted">12 October 2024 | by: Lili</p>
                    <p class="mb-1">User Experience adalah ....</p>
                </div>

                <!-- Tombol Read More -->
                <a href="{{ route('category.detail', ['category' => 'interactive-multimedia']) }}" class="btn btn-dark rounded-pill position-absolute" style="bottom: 15px; right: 15px;">read more...</a>
                </div>
        </div> 
        
        <!-- Artikel 3 -->
        <div class="col-md-12 mb-4">
            <div class="position-relative d-flex align-items-center p-3 rounded-3" style="background-color: #e8f0e3; border: none;">
                <!-- Gambar Thumbnail -->
                <img src="{{ asset('img/foto-uxfor.png') }}" alt="User Experience for Digital Immersive Technology" class="img-fluid rounded-3 me-3" style="width: 350px; height: auto;">

                <!-- Konten Artikel -->
                <div class="flex-grow-1 pe-5">
                    <h5 class="mb-1">User Experience for Digital Immersive Technology</h5>
                    <p class="mb-1 text-muted">9 March 2024 | by: Jennie</p>
                    <p class="mb-1">User Experience for Digital Immersive Technology adalah ...</p>
                </div>

                <!-- Tombol Read More -->
                <a href="{{ route('category.detail', ['category' => 'interactive-multimedia']) }}" class="btn btn-dark rounded-pill position-absolute" style="bottom: 15px; right: 15px;">read more...</a>
            </div>
        </div> 
    </div>
</div>
@endsection
