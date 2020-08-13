@extends('layouts.index')
@section('content')
<div class="container-fluid mt-4">
    <div class="col-14">
        <div class="card">
            <!-- Card header -->
            <div class="card-header">
                <h1>{{ $prodinama }}</h1>
                <h3 class="mb-0">Hasil Upload Form Projek Akhir</h3>
            </div>
            <div class="table-responsive py-4">
                <table class="table table-flush" id="datatable-basic">
                    <thead class="thead-light">
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-sort="ascending" aria-label="Name: activate to sort column descending"
                                style="width: 5px;">
                                No</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-label="Office: activate to sort column ascending" style="width: 80px;">Nim</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-label="Age: activate to sort column ascending" style="width: 60px;">Nama</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 80px;">Form PA 2
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 80px;">Form PA 3
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 80px;">Form PA 4
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 80px;">Form PA 5
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 80px;">Form PA 6
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 80px;">Form PA 7
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 80px;">Form PA 8
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 80px;">Form PA 9
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 80px;">Form PA 10
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 80px;">Form PA
                                11</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 80px;">Form PA 12
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 80px;">Form PA 13
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 80px;">Form PA 14
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 80px;">Form PA 15
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 80px;">Form PA 16
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 80px;">Form PA 17
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td class="sorting_1">1</td>
                            <td>{{$item->nim}}</td>
                            <td>{{$item->nama_mhs}}</td>
                            <td>
                                @if ($item['pa2'])
                                <a href="http://localhost:8001/api/paapidownload?file={{$item->nim}}/{{$item->pa2}}"
                                    target="_blank" class="btn btn-sm btn-primary">Download</a>
                                @else
                                <a href="#" class="btn btn-sm btn-danger">Not Found</a>
                                @endif

                            </td>
                            <td>
                                @if ($item['pa3'])
                                <a href="http://localhost:8001/api/paapidownload?file={{$item->nim}}/{{$item->pa3}}"
                                    target="_blank" class="btn btn-sm btn-primary">Download</a>
                                @else
                                <a href="#" class="btn btn-sm btn-danger">Not Found</a>
                                @endif

                            </td>
                            <td>
                                @if ($item['pa4'])
                                <a href="http://localhost:8001/api/paapidownload?file={{$item->nim}}/{{$item->pa4}}"
                                    target="_blank" class="btn btn-sm btn-primary">Download</a>
                                @else
                                <a href="#" class="btn btn-sm btn-danger">Not Found</a>
                                @endif

                            </td>
                            <td>
                                @if ($item['pa5'])
                                <a href="http://localhost:8001/api/paapidownload?file={{$item->nim}}/{{$item->pa5}}"
                                    target="_blank" class="btn btn-sm btn-primary">Download</a>
                                @else
                                <a href="#" class="btn btn-sm btn-danger">Not Found</a>
                                @endif

                            </td>
                            <td>
                                @if ($item['pa6'])
                                <a href="http://localhost:8001/api/paapidownload?file={{$item->nim}}/{{$item->pa6}}"
                                    target="_blank" class="btn btn-sm btn-primary">Download</a>
                                @else
                                <a href="#" class="btn btn-sm btn-danger">Not Found</a>
                                @endif

                            </td>
                            <td>
                                @if ($item['pa7'])
                                <a href="http://localhost:8001/api/paapidownload?file={{$item->nim}}/{{$item->pa7}}"
                                    target="_blank" class="btn btn-sm btn-primary">Download</a>
                                @else
                                <a href="#" class="btn btn-sm btn-danger">Not Found</a>
                                @endif

                            </td>
                            <td>
                                @if ($item['pa8'])
                                <a href="http://localhost:8001/api/paapidownload?file={{$item->nim}}/{{$item->pa8}}"
                                    target="_blank" class="btn btn-sm btn-primary">Download</a>
                                @else
                                <a href="#" class="btn btn-sm btn-danger">Not Found</a>
                                @endif

                            </td>
                            <td>
                                @if ($item['pa9'])
                                <a href="http://localhost:8001/api/paapidownload?file={{$item->nim}}/{{$item->pa9}}"
                                    target="_blank" class="btn btn-sm btn-primary">Download</a>
                                @else
                                <a href="#" class="btn btn-sm btn-danger">Not Found</a>
                                @endif

                            </td>
                            <td>
                                @if ($item['pa10'])
                                <a href="http://localhost:8001/api/paapidownload?file={{$item->nim}}/{{$item->pa10}}"
                                    target="_blank" class="btn btn-sm btn-primary">Download</a>
                                @else
                                <a href="#" class="btn btn-sm btn-danger">Not Found</a>
                                @endif

                            </td>
                            <td>
                                @if ($item['pa11'])
                                <a href="http://localhost:8001/api/paapidownload?file={{$item->nim}}/{{$item->pa11}}"
                                    target="_blank" class="btn btn-sm btn-primary">Download</a>
                                @else
                                <a href="#" class="btn btn-sm btn-danger">Not Found</a>
                                @endif

                            </td>
                            <td>
                                @if ($item['pa12'])
                                <a href="http://localhost:8001/api/paapidownload?file={{$item->nim}}/{{$item->pa12}}"
                                    target="_blank" class="btn btn-sm btn-primary">Download</a>
                                @else
                                <a href="#" class="btn btn-sm btn-danger">Not Found</a>
                                @endif

                            </td>
                            <td>
                                @if ($item['pa13'])
                                <a href="http://localhost:8001/api/paapidownload?file={{$item->nim}}/{{$item->pa13}}"
                                    target="_blank" class="btn btn-sm btn-primary">Download</a>
                                @else
                                <a href="#" class="btn btn-sm btn-danger">Not Found</a>
                                @endif

                            </td>
                            <td>
                                @if ($item['pa14'])
                                <a href="http://localhost:8001/api/paapidownload?file={{$item->nim}}/{{$item->pa14}}"
                                    target="_blank" class="btn btn-sm btn-primary">Download</a>
                                @else
                                <a href="#" class="btn btn-sm btn-danger">Not Found</a>
                                @endif

                            </td>
                            <td>
                                @if ($item['pa15'])
                                <a href="http://localhost:8001/api/paapidownload?file={{$item->nim}}/{{$item->pa15}}"
                                    target="_blank" class="btn btn-sm btn-primary">Download</a>
                                @else
                                <a href="#" class="btn btn-sm btn-danger">Not Found</a>
                                @endif

                            </td>
                            <td>
                                @if ($item['pa16'])
                                <a href="http://localhost:8001/api/paapidownload?file={{$item->nim}}/{{$item->pa16}}"
                                    target="_blank" class="btn btn-sm btn-primary">Download</a>
                                @else
                                <a href="#" class="btn btn-sm btn-danger">Not Found</a>
                                @endif

                            </td>
                            <td>
                                @if ($item['pa17'])
                                <a href="http://localhost:8001/api/paapidownload?file={{$item->nim}}/{{$item->pa17}}"
                                    target="_blank" class="btn btn-sm btn-primary">Download</a>
                                @else
                                <a href="#" class="btn btn-sm btn-danger">Not Found</a>
                                @endif

                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection