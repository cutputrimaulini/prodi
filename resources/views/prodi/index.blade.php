@extends('layouts.index')
@section('content')
<div class="container-fluid mt-4">

    <div class="col-14">
        <div class="card">
            <!-- Card header -->
            <div class="card-header">
                <h1>{{ $prodinama }}</h1>
                <h3 class="mb-0">Perkumpulan Hasil Judul Proyek Akhir</h3>
            </div>
            <div class="table-responsive py-4">
                <table class="table table-flush" id="datatable-basic">
                    <thead class="thead-light">
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-sort="ascending" aria-label="Name: activate to sort column descending"
                                style="width: 177px;">
                                No</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 114px;">Tanggal
                                Buat</th>
                            <th class="sorting_asc" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-sort="ascending" aria-label="Name: activate to sort column descending"
                                style="width: 177px;">
                                Nama</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-label="Position: activate to sort column ascending" style="width: 274px;">Nim</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-label="Age: activate to sort column ascending" style="width: 63px;">Judul Yang
                                Diajukan</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-label="Start date: activate to sort column ascending" style="width: 136px;">Sumber
                                Judul Dari</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 114px;">Deskripsi
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 114px;">Mata Kuliah
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 114px;">Ipk
                                Terakhir</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 114px;">Pembimbing
                                Yang diajukan</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 114px;">Terima</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 114px;">Tolak</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($prodi as $index=>$pj)
                        <tr>
                            <td>{{ $index + 1}}</td>
                            <td>{{ $pj->created_at->toDateString()}}</td>
                            <td>{{ $pj->nama}}</td>
                            <td>{{ $pj->nim}}</td>
                            <td>{{ $pj->judul}}</td>
                            <td>{{ $pj->sumber}}</td>
                            <td>{{ $pj->deskripsi }}</td>
                            <td>{{ $pj->matakuliah}}</td>
                            <td>{{ $pj->ipk}}</td>
                            <td>{{ $pj->pembimbing}}</td>
                            <td>
                                <form action="/checkbox/{{$pj->id}}" method="post">
                                    @method('put')
                                    @csrf
                                    <input type="hidden" value="terima" name="status">
                                    <button class="btn btn-sm btn-primary foad-right ml-3" type="submit">Terima</button>
                                    
                                </form>
                            </td>
                            <td>
                                    
                                    
                                <button class="btn btn-sm btn-primary foad-right ml-3" data-toggle="modal" data-target="#tolakAlasan{{$pj->id}}">Tolak</button>
                               
                                <!-- Modal -->
                                <div class="modal fade" id="tolakAlasan{{$pj->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Alasan Tolak Judul PA</h5> 
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            <h3>Judul : {{ $pj->judul}}</h3>
                                            <form action="/checkbox/{{$pj->id}}" method="POST">
                                                    @method('put')
                                                    @csrf
                                                    <input type="hidden" value="tolak" name="status">
                                                    <input type="hidden" name="id" value="#">
                                                    <div class="form-group row">
                                                        <label for="example-text-input" class="col-md-5 col-form-label form-control-label">Alasan</label>
                                                        <div class="col-md-12">
                                                            <input class="form-control" type="text" name="alasan"
                                        id="example-text-input" value="">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                            </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
            </div>
            </tr>
            @endforeach
            </tbody>
            </table>           

        </div>
    </div>
</div>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
    
    });
</script> -->

@endsection