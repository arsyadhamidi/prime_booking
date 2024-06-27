<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Prime Motocare & Detailing</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="images/logo.ico" type="image/x-icon">
    <style>
        body {
            background-image: url('images/background.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .app-body {
            padding: 50px 0;
        }

        .card-body img {
            margin-top: -30px;
        }

        .card-body {
            position: relative;
            /* Adjust positioning */
        }

        .btn-link {
            text-decoration: none;
            /* Remove underline from links */
        }

        .footer {
            background-color: rgba(13, 97, 224, 0.2);
            text-align: center;
            padding: 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-auto"> <!-- Ganti ms-lg-auto dengan ms-auto untuk rata kanan -->
                    <li class="nav-item">
                        <a href="/home" class="btn btn-primary" data-mdb-ripple-init
                            data-mdb-ripple-color="dark">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="app-body">
        <main class="main d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card-group">
                            <div class="card p-4">
                                <div class="card-body">
                                    <form method="POST" action="/register">
                                        @csrf
                                        <h1>Register User</h1>
                                        <p class="text-muted">Create your account</p>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Lengkap"
                                                name="name">
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                            </div>
                                            <input type="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Email" name="email">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="input-group
                                                mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                            </div>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="Password" name="password">
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="input-group mb-4">
                                            <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" rows="5"
                                                placeholder="Alamat Domisili">{{ old('alamat') }}</textarea>
                                            @error('alamat')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <button type="submit" class="btn btn-primary">Register</button>
                                            <a href="/login" class="btn btn-link">Sudah Punya Akun?</a>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                                <div class="card-body text-center">
                                    <div>
                                        <h2>Welcome</h2>
                                        <p>Join Prime Motocare & Detailing</p>
                                        <img src="images/primekuning.jpeg" alt="Prime Motocare & Detailing"
                                            style="max-width: 60%; margin-top: 20px; margin-bottom: 20px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <footer class="footer fixed-bottom">
        © 2024 Copyright | Prime Motocare & Detailing
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
