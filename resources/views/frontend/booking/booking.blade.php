<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Booking Layanan | Prime Motocare & Detailing @2024</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css"> <!-- Update with your path -->
    <link rel="icon" href="images/logo.ico" type="image/x-icon"> <!-- Update with your path -->
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
        .loading-overlay {
            display: none; /* Hide by default */
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            color: white;
            font-size: 24px;
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
                    <a href="/" class="btn btn-outline-primary" data-mdb-ripple-init data-mdb-ripple-color="dark">Home</a>
                    <a href="/logout" class="btn btn-outline-primary" data-mdb-ripple-init data-mdb-ripple-color="dark">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<section class="vh-100" style="background-color: #ececec;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card shadow">
          <div class="card-body p-md-5">
            <div class="row g-0">
              <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card-body p-4 p-lg-5 text-black">

                  <form id="bookingForm">
                    <div class="header-section text-center">
                      <i class="fas fa-user-plus fa-2x me-3" style="color: #000;"></i>
                      <span class="h1 fw-bold">Booking Layanan</span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3 text-center" style="letter-spacing: 1px;">Isi formulir</h5>

                    <!-- Form fields -->
                    <div class="form-outline mb-4">
                      <label class="form-label" for="nama"><i class="fas fa-user me-2"></i>Nama</label>
                      <input type="text" id="nama" class="form-control form-control-lg" name="nama" required>
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="alamat"><i class="fas fa-map-marker-alt me-2"></i>Alamat</label>
                      <textarea id="alamat" class="form-control form-control-lg" name="alamat" required></textarea>
                  </div>

                    <div class="form-group mb-4">
                      <label class="form-label" for="kategori_motor"><i class="fas fa-motorcycle me-2"></i>Kategori Motor</label>
                      <select class="form-control" id="kategori_motor" name="kategori_motor" required>
                          <option value="">Pilih Kategori Motor</option>
                          <option value="Small bike <125cc">Small bike <125cc</option>
                          <option value="Medium bike >150cc">Medium bike >150cc</option>
                          <option value="Large bike >250cc">Large bike >250cc</option>
                          <option value="Big bike >350cc">Big bike >350cc</option>
                          <option value="Lux/Touring >1200cc">Lux/Touring >1200cc</option>
                      </select>
                    </div>

                    <div class="form-group mb-4">
                      <label for="layanan"><i class="fas fa-list me-2"></i>Pilih Layanan</label>
                      <select class="form-control form-control-lg" id="layanan" name="layanan" required>
                          <option value="">Pilih Layanan</option>
                          <option value="Layanan 1">Prime signature wash</option>
                          <option value="Layanan 2">Prime ultimate wash</option>
                          <option value="Layanan 3">Prime express polish</option>
                          <option value="Layanan 4">Prime body detailing</option>
                          <option value="Layanan 5">Prime body coating (9H)</option>
                          <option value="Layanan 6">Prime ultimate -> body coating (10H)</option>
                          <option value="Layanan 7">Prime full package -> Detailing, coating (9H), Ultimate coating (10H)</option>
                      </select>
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="tanggal"><i class="fas fa-calendar me-2"></i>Tanggal dan Jam Layanan</label>
                      <input type="datetime-local" id="tanggal" class="form-control form-control-lg" name="tanggal" required>
                    </div>

                    <div class="pt-2 mb-4 text-center">
                      <button class="btn btn-primary btn-lg" type="submit">Daftar</button>
                    </div>
                  </form>

                  <div class="loading-overlay" id="loadingOverlay">
                    <i class="fas fa-spinner fa-spin"></i> Tunggu sebentar...
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

<script>
  document.getElementById('bookingForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent the default form submission
    document.getElementById('loadingOverlay').style.display = 'flex'; // Show loading screen
    setTimeout(function() {
      document.getElementById('bookingForm').submit(); // Submit the form after a delay
    }, 2000); // Adjust the delay as necessary
  });
</script>

</body>
</html>
