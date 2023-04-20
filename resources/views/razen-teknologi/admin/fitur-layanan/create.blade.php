@extends('razen-teknologi.layouts.app')
@section('title', 'Razen Teknologi | Fitur Layanan')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/font/CS-Interface/style.css') }}">
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/datatables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/select2-bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/bootstrap-datepicker3.standalone.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dropify/css/dropify.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .select2-selection__rendered {
            line-height: 40px !important;
        }
        .select2-container .select2-selection--single {
            height: 41px !important;
        }
        .select2-selection__arrow {
            height: 36px !important;
        }
        .modal-dialog{
            pointer-events: all !important;
        }
    </style>
@endsection

@section('content')
    <!-- Title and Top Buttons Start -->
    <div class="page-title-container">
        <div class="row">
        <!-- Title Start -->
        <div class="col-12 col-md-7">
            <h1 class="mb-0 pb-0 display-4" id="title">Fitur Layanan</h1>
            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                <ul class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="{{ route('razen-teknologi.admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('razen-teknologi.admin.fitur-layanan.index') }}">Fitur Layanan</a></li>
                </ul>
            </nav>
        </div>
        <!-- Title End -->
        </div>
    </div>
    <!-- Title and Top Buttons End -->

    <div class="card">
        <div class="card-body">
            <form action="{{ route('razen-teknologi.admin.fitur-layanan.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-6" style="justify-content: center; align-self: center;">
                        <label for="" class="small-title">Tambah Layanan</label>
                    </div>
                    <div class="col-6" style="text-align:right">
                        <a href="{{ route('razen-teknologi.admin.fitur-layanan.index') }}" class="btn btn-danger btn-icon waves-effect waves-light"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div>
                <div class="mb-3 position-relative form-group">
                    <label for="layanan_id" class="form-label">Layanan</label>
                    <select name="layanan_id" id="layanan_id" class="form-control" required>
                        <option value="">--- Pilih Layanan ---</option>
                        @foreach ($layanan as $id => $judul_kecil)
                            <option value="{{$id}}">{{$judul_kecil}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 position-relative form-group">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" required>
                </div>
                <hr>
                <div class="form-group" id="form_tambah_fitur_layanan">
                    <div class="row mb-3">
                        <div class="col-6 justify-content-center align-self-center text-left">
                            <label for="" class="control-label">Tambah Fitur Layanan</label>
                        </div>
                        <div class="col-6" style="text-align:right;">
                            <button class="btn btn-icon waves-effect waves-light btn-primary mr-2" type="button" id="btn_tambah_fitur_layanan"><i class="fas fa-user-plus"></i></button>
                            <button class="btn btn-icon waves-effect waves-light btn-danger" type="button" id="btn_hapus_fitur_layanan"><i class="fas fa-user-minus"></i></button>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12" style="text-align: right">
                        <button class="btn btn-outline-primary waves-effect waves-light">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/fontawesome.min.js" integrity="sha512-j3gF1rYV2kvAKJ0Jo5CdgLgSYS7QYmBVVUjduXdoeBkc4NFV4aSRTi+Rodkiy9ht7ZYEwF+s09S43Z1Y+ujUkA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function(){
            $('#layanan_id').select2();
            $('.dropify').dropify();
        });

        var count_fitur_layanan = 0;
        dynamic_field_fitur_layanan();

        function dynamic_field_fitur_layanan(number_fitur_layanan)
        {
            var index_fitur_layanan = number_fitur_layanan - 1;
            html = '<div class="border shadow p-3 mb-3">'
            html += '<div class="form-group row">';
            html += '<div class="col-12">';
            html += '<h3>';
            html += '<span class="sw-4 sh-4 me-1 mb-1 d-inline-block bg-info d-flex justify-content-center align-items-center rounded-xl">'+number_fitur_layanan+'</span>';
            html += '</h3>';
            html += '</div>';
            html += '</div>';
            html += '<div class="position-relative mb-3 form-group row">';
            html += '<label class="col-md-3 form-label">Judul</label>';
            html += '<div class="col-md-9">';
            html += '<input type="text" name="data_fitur_layanan['+index_fitur_layanan+'][judul]" class="form-control" required>';
            html += '</div>';
            html += '</div>';
            html += '<div class="position-relative mb-3 form-group row">';
            html += '<label class="col-md-3 form-label">Deskripsi</label>';
            html += '<div class="col-md-9">';
            html += '<textarea type="text" name="data_fitur_layanan['+index_fitur_layanan+'][deskripsi]" class="form-control" rows="5" required></textarea>';
            html += '</div>';
            html += '</div>';
            html += '</div>';

            if(number_fitur_layanan >= 1)
            {
                $('#form_tambah_fitur_layanan').after(html);
            }
        }

        $(document).on('click', '#btn_tambah_fitur_layanan', function(){
            count_fitur_layanan++;
            dynamic_field_fitur_layanan(count_fitur_layanan);
        });

        $(document).on('click', '#btn_hapus_fitur_layanan', function(){
            count_fitur_layanan--;
            if(count_fitur_layanan < 0)
            {
                count_fitur_layanan = 0;
            }
            $('#form_tambah_fitur_layanan').next('div').remove();
        });
    </script>
@endsection
