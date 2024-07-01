<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
        }
    </style>
</head>

<body>
    <table style="width: 100%">
        <tr>
            <td>
                <img src="{{ public_path('images/logo.png') }}" width="250" alt="">
            </td>
            <td>
                <h1 style="font-size: 30pt; color: rgb(150, 75, 22);">BOOKING TICKET</h1>
            </td>
        </tr>
    </table>
    <div class="container" style="border: 1px solid rgb(150, 75, 22);padding: 20px 20px;">
        <table style="width: 100%; line-height: 30pt">
            <tr>
                <td style="width: 30%">ID Pelanggan</td>
                <td style="width: 5%">:</td>
                <td>{{ $booking->id_pelanggan ?? '-' }}</td>
            </tr>
            <tr>
                <td style="width: 30%">Nama Pelanggan</td>
                <td style="width: 5%">:</td>
                <td>{{ $booking->nama ?? '-' }}</td>
            </tr>
            <tr>
                <td style="width: 30%">Email Address</td>
                <td style="width: 5%">:</td>
                <td>{{ $booking->users->email ?? '-' }}</td>
            </tr>
            <tr>
                <td style="width: 30%">Layanan</td>
                <td style="width: 5%">:</td>
                <td>{{ $booking->layanan->nama_layanan ?? '-' }}</td>
            </tr>
            <tr>
                <td style="width: 30%">Tanggal</td>
                <td style="width: 5%">:</td>
                <td>{{ $booking->tanggal ?? '-' }}</td>
            </tr>
            <tr>
                <td style="width: 30%">Jam</td>
                <td style="width: 5%">:</td>
                <td>{{ $booking->jam ?? '-' }}</td>
            </tr>
            <tr>
                <td style="width: 30%">Status</td>
                <td style="width: 5%">:</td>
                <td>{{ $booking->status ?? '-' }}</td>
            </tr>
            <tr>
                <td style="width: 30%">Harga</td>
                <td style="width: 5%">:</td>
                <td>Rp. {{ $booking->layanan->harga ?? '-' }}, -</td>
            </tr>
        </table>
    </div>
    <p><i>Alamat : Jl. S. Parman No 130 D, Lolong - Kota Padang</i></p>
</body>

</html>
