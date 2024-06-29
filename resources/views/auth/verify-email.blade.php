<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Prime Motocare & Detailing</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="images/logo.ico" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

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
            margin-top: -30px; /* Adjusted as needed */
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
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="/" class="btn btn-primary btn-rounded" data-mdb-ripple-init>Home</a>
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
                                    <h1>Verify Email</h1>
                                    <p class="text-muted">Please check your email for a verification link. If you did not receive the email, you can request another one below.</p>
                                    @if (session('message'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('message') }}
                                        </div>
                                    @endif
                                    <form method="POST" action="{{ route('verification.send') }}">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Resend Verification Email</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <footer class="bg-light text-center text-lg-start fixed-bottom">
        <div class="text-center p-4" style="background-color: rgba(13, 97, 224, 0.2);">
            © 2024 Copyright | Prime Motocare & Detailing
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
