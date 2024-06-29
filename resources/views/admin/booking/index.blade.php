@extends('admin.layout.master')
@section('menuDataBooking', 'active')

@section('content')
    <div class="row">
        <div class="col-lg">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Booking Pelayanan</h4>
                    <table class="table table-bordered table-striped" id="myTable">
                        <thead>
                            <tr>
                                <th style="width: 5%; text-align:center">No.</th>
                                <th style="text-align:center">Nama</th>
                                <th style="text-align:center">Layanan</th>
                                <th style="text-align:center">Harga</th>
                                <th style="text-align:center">Tanggal</th>
                                <th style="text-align:center">Jam</th>
                                <th style="text-align:center">Status</th>
                                <th style="text-align:center">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->nama ?? '-' }}</td>
                                    <td>{{ $data->layanan->nama_layanan ?? '-' }}</td>
                                    <td>{{ $data->layanan->harga ?? '-' }}</td>
                                    <td>{{ $data->tanggal ?? '-' }}</td>
                                    <td>{{ $data->jam ?? '-' }}</td>
                                    <td>
                                        @if ($data->status == 'Setuju')
                                            <span class="badge rounded-pill bg-success">{{ $data->status ?? '-' }}</span>
                                        @elseif($data->status == 'Batal')
                                            <span class="badge rounded-pill bg-danger">{{ $data->status ?? '-' }}</span>
                                        @elseif($data->status == 'Proses')
                                            <span class="badge rounded-pill bg-primary">{{ $data->status ?? '-' }}</span>
                                        @else
                                            <span class="badge rounded-pill bg-dark">Tidak Tersedia</span>
                                        @endif
                                    </td>
                                    <td>{{ $data->keterangan ?? '-' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
