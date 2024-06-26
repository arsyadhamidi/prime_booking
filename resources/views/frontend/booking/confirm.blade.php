<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Booking | Prime Motocare & Detailing @2024</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="icon" href="{{ asset('images/logo.ico') }}" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <style>
        body, button {
            font-family: 'Roboto', sans-serif;
        }
        .header-section {
            font-family: 'Anton', sans-serif;
            color: #333;
            background-color: #f8f9fa;
            border-bottom: 2px solid #dee2e6;
            padding: 20px 0;
        }
        .form-control, .form-control:focus {
            border-color: #ced4da;
            box-shadow: none;
        }
        .form-label {
            font-weight: 500;
            margin-left: 10px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .btn-secondary {
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
    </style>
</head>
<body>

<section class="vh-100" style="background-color: #ececec;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card shadow">
          <div class="card-body p-md-5">
            <div class="row g-0">
              <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card-body p-4 p-lg-5 text-black">

                  <div class="header-section text-center">
                    <i class="fas fa-calendar-check fa-2x me-3" style="color: #000;"></i>
                    <span class="h1 fw-bold">Konfirmasi Booking</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3 text-center" style="letter-spacing: 1px;">Detail Booking Anda:</h5>

                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Nama:</strong> {{ $booking->nama }}</li>
                    <li class="list-group-item"><strong>Kategori Motor:</strong> {{ $booking->kategori_motor }}</li>
                    <li class="list-group-item"><strong>Layanan Dipilih:</strong> {{ $booking->layanan }}</li>
                    <li class="list-group-item"><strong>Tanggal Booking:</strong> {{ $booking->tanggal }}</li>
                    <li class="list-group-item"><strong>Waktu Booking:</strong> {{ $booking->waktu }}</li>
                  </ul>

                  <div class="pt-4 mb-4 text-center">
                    <a href="{{ route('booking.confirmation') }}" class="btn btn-primary btn-lg">Konfirmasi Booking</a>
                    <a href="{{ route('booking.edit', $booking->id) }}" class="btn btn-secondary btn-lg">Edit Booking</a>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>
