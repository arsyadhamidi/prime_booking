@extends('admin.layout.master')
@section('menuDataReview', 'active')
@section('content')
    <div class="row">
        <div class="col-lg">
            <div class="card">
                <div class="card-header">
                    Data Review / Ulasan
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered table-striped" id="myTable">
                        <thead>
                            <tr>
                                <th style="width: 5%; text-align:center">No.</th>
                                <th style="text-align:center">Nama</th>
                                <th style="text-align:center">Email</th>
                                <th style="text-align:center">Ulasan</th>
                                <th style="text-align:center">Rating</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reviews as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->nama ?? '-' }}</td>
                                    <td>{{ $data->email ?? '-' }}</td>
                                    <td>{{ $data->ulasan ?? '-' }}</td>
                                    <td>{{ $data->rating ?? '-' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
