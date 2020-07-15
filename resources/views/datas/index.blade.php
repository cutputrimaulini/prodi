@extends('Layouts.index')
@section('content')
<div class="container-fluid mt-4">
@if(session('sukses'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
            <span class="alert-text"><strong>Sukses!</strong> {{session('sukses')}}</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
<form action="{{route('datas.ta')}}" method="POST" enctype="multipart/form-data">
@csrf
    <div class="col-12">
        <div class="card">
            <!-- Card header -->
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h3 class="mb-0">Upload Projek Akhir</h3>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="form-group row">
                    <label for="example-text-input" class="col-md-3 col-form-label form-control-label">Nama
                        Lengkap</label>
                    <div class="col-md-9">
                        <input class="form-control" type="text" value="" name="nama" id="example-text-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-md-3 col-form-label form-control-label">Nim</label>
                    <div class="col-md-9">
                        <input class="form-control" type="text" value="" name="nim" id="example-text-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-md-3 col-form-label form-control-label">Judul</label>
                    <div class="col-md-9">
                        <input class="form-control" type="text" value="" name="judul" id="example-text-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-md-3 col-form-label form-control-label">Absrak
                        Indonesia</label>
                    <div class="col-md-8	">
                        <input type="file" name="indo" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-md-3 col-form-label form-control-label">Absrak
                        English</label>
                    <div class="col-md-8	">
                        <input type="file" name="eng" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-md-3 col-form-label form-control-label">Buku
                        TA</label>
                    <div class="col-md-8	">
                        <input type="file" name="ta" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary my-4">Submit</button>
                <button type="button" class="btn btn-warning my-4">Batal</button>
            </div>
        </div>
    </div>
    </form>
</div>
@endsection