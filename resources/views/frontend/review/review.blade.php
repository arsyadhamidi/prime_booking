<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Pelanggan | Prime Motocare & Detailing @2024</title>
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="images/logo.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link href="{{ asset('css/templatemo-pod-talk.css') }}" rel="stylesheet">
    <style>
        body,
        button {
            font-family: 'Roboto', sans-serif;
        }

        .header-section {
            font-family: 'Anton', sans-serif;
            color: #333;
            background-color: #f8f9fa;
            border-bottom: 2px solid #dee2e6;
            padding: 20px 0;
        }

        .form-control,
        .form-control:focus {
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
            direction: rtl;
            /* Right to left */
            display: inline;
            font-size: 30px;
        }

        .rating>label {
            cursor: pointer;
            color: #ccc;
        }

        .rating>input {
            display: none;
        }

        .rating>input:checked~label {
            color: #ffc700;
        }

        .rating>input:hover~label,
        .rating>label:hover,
        .rating>label:hover~label {
            color: #ff9e0b;
        }
    </style>
</head>

<body>

    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand me-lg-5 me-0" href="/">
                    <img src="{{ asset('images/logo.png') }}" class="logo-image img-fluid" alt="templatemo pod talk">
                </a>

                <form action="#" method="get" class="custom-form search-form flex-fill me-3" role="search">
                    <div class="input-container">
                        <input type="text" name="text" class="input" placeholder="search...">
                        <span class="icon">
                            <svg width="19px" height="19px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path opacity="1" d="M14 5H20" stroke="#000" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path opacity="1" d="M14 8H17" stroke="#000" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path
                                        d="M21 11.5C21 16.75 16.75 21 11.5 21C6.25 21 2 16.75 2 11.5C2 6.25 6.25 2 11.5 2"
                                        stroke="#000" stroke-width="2.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path opacity="1" d="M22 22L20 20" stroke="#000" stroke-width="3.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </span>
                    </div>
                </form>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/bookinghome">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('bookinghome.riwayat') }}">Riwayat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('review.index') }}">Ulasan</a>
                        </li>
                    </ul>

                    <div class="ms-4">
                        <a href="/logout" class="btn btn-outline-light" data-mdb-ripple-init>Logout</a>
                    </div>
                </div>
            </div>
        </nav>


        <section class="hero-section">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="text-center mb-5 pb-2">
                            <h1 class="text-white">Prime Motocare & Detailing</h1>
                            <p class="text-white">Salon Motor Premium - Kota Padang.</p>

                            <a href="#" class="btn btn-outline-light" data-mdb-ripple-init
                                data-mdb-ripple-color="dark">Daftar Layanan</a>
                        </div>

                        <div class="owl-carousel owl-theme">
                            <div class="owl-carousel-info-wrap item">
                                <a href="#">
                                    <img src="{{ asset('images/layanan1.jpeg') }}"
                                        class="owl-carousel-image img-fluid" alt="">
                                    <div class="owl-carousel-info">
                                        <h4 class="mb-2">Prime Signature Wash</h4>
                                        <span class="badge">Free Mineral Water</span>
                                    </div>
                                </a>
                            </div>

                            <div class="owl-carousel-info-wrap item">
                                <a href="#">
                                    <img src="{{ asset('images/layanan2.jpeg') }}"class="owl-carousel-image img-fluid"
                                        alt="">
                                    <div class="owl-carousel-info">
                                        <h4 class="mb-2"> Prime Ultimate Wash</h4>
                                        <span class="badge">Free Mineral Water</span>
                                        <span class="badge">Helmet Compliment Care</span>
                                    </div>
                                </a>
                            </div>

                            <div class="owl-carousel-info-wrap item">
                                <a href="#">
                                    <img src="{{ asset('images/layanan3.jpeg') }}"class="owl-carousel-image img-fluid"
                                        alt="">
                                    <div class="owl-carousel-info">
                                        <h4 class="mb-2"> Prime Express Polish</h4>
                                        <span class="badge">Free Mineral Water</span>
                                        <span class="badge">Helmet Compliment Care</span>
                                    </div>
                                </a>
                            </div>

                            <div class="owl-carousel-info-wrap item">
                                <a href="#">
                                    <img src="{{ asset('images/layanan4.jpeg') }}"class="owl-carousel-image img-fluid"
                                        alt="">
                                    <div class="owl-carousel-info">
                                        <h4 class="mb-2"> Prime Body Detailing</h4>
                                        <span class="badge">Free Mineral Water</span>
                                        <span class="badge">Helmet Compliment Care</span>
                                    </div>
                                </a>
                            </div>

                            <div class="owl-carousel-info-wrap item">
                                <a href="#">
                                    <img src="{{ asset('images/layanan5.jpeg') }}"class="owl-carousel-image img-fluid"
                                        alt="">
                                    <div class="owl-carousel-info">
                                        <h4 class="mb-2"> Prime Body Coating (9H)</h4>
                                        <span class="badge">Free Mineral Water</span>
                                        <span class="badge">Helmet Compliment Care</span>
                                    </div>
                                </a>
                            </div>

                            <div class="owl-carousel-info-wrap item">
                                <a href="#">
                                    <img src="{{ asset('images/layanan6.jpeg') }}"class="owl-carousel-image img-fluid"
                                        alt="">
                                    <div class="owl-carousel-info">
                                        <h4 class="mb-2"> Prime Body Coating (10H)</h4>
                                        <span class="badge">Free Mineral Water</span>
                                        <span class="badge">Helmet Compliment Care</span>
                                    </div>
                                </a>
                            </div>

                            <div class="owl-carousel-info-wrap item">
                                <a href="#">
                                    <img src="{{ asset('images/layanan7.jpeg') }}"class="owl-carousel-image img-fluid"
                                        alt="">
                                    <div class="owl-carousel-info">
                                        <h4 class="mb-2"> Prime Full Package Detailing</h4>
                                        <span class="badge">Free Mineral Water</span>
                                        <span class="badge">Helmet Compliment Care</span>
                                    </div>
                                </a>
                            </div>

                            <div class="owl-carousel-info-wrap item">
                                <a href="#">
                                    <img src="{{ asset('images/layanan8.jpeg') }}"class="owl-carousel-image img-fluid"
                                        alt="">
                                    <div class="owl-carousel-info">
                                        <h4 class="mb-2"> Prime Full Package Coating (9H)</h4>
                                        <span class="badge">Free Mineral Water</span>
                                        <span class="badge">Helmet Compliment Care</span>
                                    </div>
                                </a>
                            </div>

                            <div class="owl-carousel-info-wrap item">
                                <a href="#">
                                    <img src="{{ asset('images/layanan9.jpeg') }}"class="owl-carousel-image img-fluid"
                                        alt="">
                                    <div class="owl-carousel-info">
                                        <h4 class="mb-2"> Prime Full Package Coating (10H)</h4>
                                        <span class="badge">Free Mineral Water</span>
                                        <span class="badge">Helmet Compliment Care</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <h1 class="text-center mt-5">Review Booking</h1>
        <p class="text-center">
            Semoga ulasan ini membantu dan memotivasi tim Anda untuk terus meningkatkan kualitas layanan.
        </p>

    </main>

    <div class="container my-5">
        <h2>Review</h2>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('review.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="ulasan" class="form-label">Ulasan</label>
                <textarea class="form-control @error('ulasan') is-invalid @enderror" id="ulasan" name="ulasan" rows="3">{{ old('ulasan') }}</textarea>
                @error('ulasan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <div class="form-label">Rating</div>
                <div class="rating">
                    <input type="radio" name="rating" id="star5" value="5"><label for="star5">★</label>
                    <input type="radio" name="rating" id="star4" value="4"><label for="star4">★</label>
                    <input type="radio" name="rating" id="star3" value="3" checked=""><label
                        for="star3">★</label>
                    <input type="radio" name="rating" id="star2" value="2"><label for="star2">★</label>
                    <input type="radio" name="rating" id="star1" value="1"><label for="star1">★</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit Review</button>
        </form>
    </div>

    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-md-0 mb-lg-0">
                    <h6 class="site-footer-title mb-3">Contact</h6>

                    <p class="mb-2"><strong class="d-inline me-2">Phone:</strong> +62 812-6775-0525</p>

                    <p>
                        <strong class="d-inline me-2">Email:</strong>
                        <a href="#">primemotocare@gmail.com</a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <h6 class="site-footer-title mb-3">Social</h6>

                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-whatsapp"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-tiktok"></a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <h6 class="site-footer-title mb-3">Maps</h6>
                    <section class="location-section">
                        <div class="location-info">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.305919954598!2d100.3506886!3d-0.9182701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b91193b964e5%3A0x113a8a68e713f9df!2sPrime%20Motocare%20%26%20Detailing!5e0!3m2!1sid!2sid!4v1714452915038!5m2!1sid!2sid"
                                allowfullscreen="" loading="lazy" height="250px" width="570px"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </section>
                </div>

            </div>
        </div>

        <div class="container pt-2">
            <div class="row align-items-center">

                <div class="col-lg-12 col-12">
                    <p class="copyright-text mb-0">Copyright ©2024 Prime Motocare & Detailing </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script>
        $(document).ready(function() {
            @if (Session::has('success'))
                toastr.success("{{ Session::get('success') }}");
            @endif

            @if (Session::has('error'))
                toastr.error("{{ Session::get('error') }}");
            @endif
        });
    </script>
</body>

</html>
