@extends('razen-teknologi.layouts.app')
@section('title', 'Razen Teknologi | Landing Page | Layanan | Swasta')

@section('css')
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/font/CS-Interface/style.css') }}">
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/datatables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/select2-bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/bootstrap-datepicker3.standalone.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dropify/css/dropify.min.css') }}">
@endsection

@section('content')
    <!-- Title and Top Buttons Start -->
    <div class="page-title-container">
        <div class="row">
        <!-- Title Start -->
        <div class="col-12 col-md-7">
            <h1 class="mb-0 pb-0 display-4" id="title">Razen Teknologi | Landing Page | Layanan | Swasta</h1>
            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                <ul class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="{{ route('razen-teknologi.admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Landing Page Layanan</a></li>
                    <li class="breadcrumb-item"><a href="#">Swasta</a></li>
                </ul>
            </nav>
        </div>
        <!-- Title End -->
        </div>
    </div>
    <!-- Title and Top Buttons End -->

    <!-- Content Start -->
    <h2 class="small-title">Atur</h2>
    <!-- Content End -->

    {{-- Section 1 Start --}}

    <div class="card mb-5">
        <div class="card-body">
            <h2 class="small-title">Edit Section 1</h2>
            <div class="row mb-3">
                <div class="col-12">
                    <img src="{{ asset('images/landing-page/layanan/swasta/section_1.png') }}" alt="" class="img-fluid rounded">
                </div>
            </div>
            {{-- Form Start --}}

            <form action="{{ route('razen-teknologi.landing-page.layanan.pemerintahan.store.section-1') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-7">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" name="sub_judul" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" rows="5" class="form-control" id="section_1" required></textarea>
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="position-relative form-group mb-3">
                            <label for="" class="form-label">Video</label>
                            {{-- @if ($section_1)
                                <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg" data-show-errors="true" data-default-file="{{ asset('images/landing-page/layanan/pemerintahan/'.$section_1['gambar']) }}" required>
                            @else --}}
                                <input type="file" class="dropify" name="video" data-height="300" data-allowed-file-extensions="mp4 mkv" data-show-errors="true" required>
                            {{-- @endif --}}
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-0">Submit</button>
            </form>

            {{-- Form End --}}
        </div>
    </div>

    {{-- Section 1 End --}}

    {{-- Section 2 Start --}}

    <div class="card mb-5">
        <div class="card-body">
            <h2 class="small-title">Edit Section 2</h2>
            <div class="row mb-3">
                <div class="col-12">
                    <img src="{{ asset('images/landing-page/layanan/swasta/section_2.png') }}" alt="" class="img-fluid rounded">
                </div>
            </div>
            {{-- Form Start --}}
            {{-- Form End --}}
        </div>
    </div>

    {{-- Section 2 End --}}

    {{-- Section 3 Start --}}

    <div class="card mb-5">
        <div class="card-body">
            <h2 class="small-title">Edit Section 3</h2>
            <div class="row mb-3">
                <div class="col-12">
                    <img src="{{ asset('images/landing-page/layanan/swasta/section_3.png') }}" alt="" class="img-fluid rounded">
                </div>
            </div>
            {{-- Form Start --}}
            {{-- Form End --}}
        </div>
    </div>

    {{-- Section 3 End --}}

    {{-- Section 4 Start --}}

    <div class="card mb-5">
        <div class="card-body">
            <h2 class="small-title">Edit Section 4</h2>
            <div class="row mb-3">
                <div class="col-12">
                    <img src="{{ asset('images/landing-page/layanan/swasta/section_4.png') }}" alt="" class="img-fluid rounded">
                </div>
            </div>
            {{-- Form Start --}}
            {{-- Form End --}}
        </div>
    </div>

    {{-- Section 4 End --}}

    {{-- Section 5 Start --}}

    <div class="card mb-5">
        <div class="card-body">
            <h2 class="small-title">Edit Section 5</h2>
            <div class="row mb-3">
                <div class="col-12">
                    <img src="{{ asset('images/landing-page/layanan/swasta/section_5.png') }}" alt="" class="img-fluid rounded">
                </div>
            </div>
            {{-- Form Start --}}
            {{-- Form End --}}
        </div>
    </div>

    {{-- Section 5 End --}}

    {{-- Section 6 Start --}}

    <div class="card mb-5">
        <div class="card-body">
            <h2 class="small-title">Edit Section 6</h2>
            <div class="row mb-3">
                <div class="col-12">
                    <img src="{{ asset('images/landing-page/layanan/swasta/section_6.png') }}" alt="" class="img-fluid rounded">
                </div>
            </div>
            {{-- Form Start --}}
            {{-- Form End --}}
        </div>
    </div>

    {{-- Section 6 End --}}
@endsection

@section('js')
    <script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/bootstrap-submenu.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/datatables.min.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/cs/scrollspy.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/jquery.validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/jquery.validate/additional-methods.min.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/select2.full.min.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/tagify.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert.js') }}"></script>
    <script src="{{ asset('dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/dropzone.min.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/singleimageupload.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/cs/dropzone.templates.js') }}"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.dropify').dropify();
            $('.dropify-wrapper').css('line-height', '3rem');
        });
    </script>
@endsection
