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
                                aria-label="Salary: activate to sort column ascending" style="width: 114px;">Status</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 114px;">Alasan</th>  
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($persetujuan as $index=>$pj)
                        <tr>
                            <td>{{ $index + 1}}</td>
                            <td>{{ $pj->created_at->toDateString() }}</td>
                            <td>{{ $pj->nama}}</td>
                            <td>{{ $pj->nim}}</td>
                            <td>{{ $pj->judul}}</td>
                            <td>{{ $pj->sumber}}</td>
                            <td>{{ $pj->deskripsi }}</td>
                            <td>{{ $pj->matakuliah}}</td>
                            <td>{{ $pj->ipk}}</td>
                            <td>{{ $pj->pembimbing}}</td>
                            <td>{{ $pj->status}}</td>
                            <td>{{ $pj->alasan}}</td>


            </div>
            </tr>
            @endforeach
            </tbody>
            </table>
            </form>

        </div>
    </div>
</div>




@endsection