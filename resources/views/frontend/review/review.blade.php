<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Pelanggan | Prime Motocare & Detailing @2024</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="icon" href="{{ asset('images/logo.ico') }}" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
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
        .rating {
            direction: rtl; /* Right to left */
            font-size: 30px;
        }
        .rating > label {
            cursor: pointer;
            color: #ccc;
        }
        .rating > input {
            display: none;
        }
        .rating > input:checked ~ label {
            color: #ffc700;
        }
        .rating > input:hover ~ label,
        .rating > label:hover,
        .rating > label:hover ~ label {
            color: #ff9e0b;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2>Review</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="#" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="ulasan" class="form-label">Ulasan</label>
            <textarea class="form-control" id="ulasan" name="ulasan" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <div class="form-label">Rating</div>
            <div class="rating">
                <input type="radio" name="rating" id="star5" value="5"><label for="star5">★</label>
                <input type="radio" name="rating" id="star4" value="4"><label for="star4">★</label>
                <input type="radio" name="rating" id="star3" value="3" checked=""><label for="star3">★</label>
                <input type="radio" name="rating" id="star2" value="2"><label for="star2">★</label>
                <input type="radio" name="rating" id="star1" value="1"><label for="star1">★</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit Review</button>
    </form>
</div>
</body>
</html>
