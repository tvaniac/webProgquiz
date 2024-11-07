@extends('layouts.app') 

@section('content')
<div class="container-fluid px-0">
    <!-- Bagian foto besar di atas artikel -->
    <div class="row mx-0">
        <div class="col-12 px-0">
            <img src="{{ asset('img/foto-homepage.jpg') }}" alt="EduFun" class="img-fluid foto-homepage">
        </div>
    </div> 

    <!-- Bagian artikel di bawah foto besar -->
    <div class="row mx-0 mt-4 px-5">
        <ul class="list-unstyled px-3">
            <!-- Looping artikel -->
            @foreach ($latestCourses as $course)
            <div class="container mt-5">
                <div class="row"> 
                    <!-- Artikel pertama: Interactive Multimedia --> 
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

                    <!-- Artikel kedua: Software Engineering -->
                    <div class="col-md-12 mb-4">
                        <div class="position-relative d-flex align-items-center p-3 rounded-3" style="background-color: #e8f0e3; border: none;">
                            <!-- Gambar Thumbnail -->
                            <img src="{{ asset('img/foto-psd.png') }}" alt="Pattern Software Design" class="img-fluid rounded-3 me-3" style="width: 350px; height: auto;">

                            <!-- Konten Artikel -->
                            <div class="flex-grow-1 pe-5">
                                <h5 class="mb-1">Pattern Software Design</h5>
                                <p class="mb-1 text-muted">14 May 2024 | by: Sabrina</p>
                                <p class="mb-1">Pattern Software Design adalah ...</p>
                            </div>

                            <!-- Tombol Read More -->
                            <a href="{{ route('category.detail', ['category' => 'software-engineering']) }}" class="btn btn-dark rounded-pill position-absolute" style="bottom: 15px; right: 15px;">read more...</a>
                            </div>
                    </div> 
                </div>
            </div> 
            @endforeach
        </ul>
    </div>
</div>
@endsection
