<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>E Walas SMKN 1 Cibinong- Walas</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="../../../images/logokampak.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"rel="stylesheet"/>

  <!-- Main CSS File -->
  <link href="../../../assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iLanding
  * Template URL: https://bootstrapmade.com/ilanding-bootstrap-landing-page-template/
  * Updated: Nov 12 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
        /* Kotak pesan */
        .alert {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 15px;
            z-index: 9999;
            text-align: center;
            font-size: 16px;
            color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            animation: slideDown 0.5s ease-out;
            box-sizing: border-box;
            max-height: 60px; /* Menentukan tinggi kotak pesan agar tidak terlalu panjang */
            overflow: hidden;
            
            /* Flexbox untuk menyejajarkan teks di tengah */
            display: flex;
            justify-content: center; /* Mengatur teks ke tengah secara horizontal */
            align-items: center; /* Mengatur teks ke tengah secara vertikal */
        }

        .alert-danger {
            background-color: #e74c3c; /* Merah */
        }

        .alert-success {
            background-color: #2ecc71; /* Hijau */
        }

        /* Animasi slide down */
        @keyframes slideDown {
            from {
                transform: translateY(-100%);
            }
            to {
                transform: translateY(0);
            }
        }

        /* Animasi slide up untuk saat pesan hilang */
        @keyframes slideUp {
            from {
                transform: translateY(0);
            }
            to {
                transform: translateY(-100%);
            }
        }


        
    </style>
</head>

<body class="index-page">
     <!-- Tampilkan pesan error -->
     @if (session('error'))
        <div class="alert alert-danger" id="alertError">
            <p>{{ session('error') }}</p>
        </div>
    @endif

    <!-- Tampilkan pesan success -->
    @if (session('success'))
        <div class="alert alert-success" id="alertSuccess">
            <p>{{ session('success') }}</p>
        </div>
    @endif

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/adminwalas" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">E - Walas</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
        
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <div class="user-info d-flex align-items-center">
            @if(session()->has('walas_id'))
                <i class="bi bi-person-circle text-primary me-2" style="font-size: 24px;"></i>  <!-- Icon User dengan warna biru -->
                
                <!-- Tautkan nama walas ke /userprofile -->
                <a href="/profilewalas" class="text-decoration-none">
                    <span>{{ $walaslogin->nama }}</span>  <!-- Nama Walas yang sedang login -->
                </a>
            @endif
            <form action="{{ route('logoutwalas') }}" method="POST" class="ms-3">
                @csrf
                <button type="submit" class="btn-getstarted">Logout</button>
            </form>
        </div>
    </div>
  </header>

<main class="main">

       <!-- Hero Section -->
       <section id="hero" class="hero section">
    <div class="starter-section container" >
        <!-- Header dengan Title, Pencarian, dan Tombol -->
        <div class="mb-4">
            <h2 class="font-weight-bold">Edit Identitas Kelas</h2>
            <hr class="my-3"> <!-- Garis horizontal di bawah judul -->
            <div class="d-flex align-items-center justify-content-start">
        <div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('identitaskelas.update', $identitaskelas->id) }}" method="POST">
                @csrf
                @method('PUT') <!-- Menandakan bahwa ini adalah update -->

                <!-- Wali Kelas -->
                <div class="mb-3">
                    <label for="walas_id" class="form-label">Wali Kelas:</label>
                    <select name="walas_id" id="walas_id" class="form-select" required>
                            <option value="{{ $walaslogin->id }}" {{ $walaslogin->id == $identitaskelas->walas_id ? 'selected' : '' }}>
                                {{ $walaslogin->nama }}
                            </option>
                    </select>
                </div>

                <!-- Program Keahlian -->
                <div class="mb-3">
                    <label for="program_keahlian" class="form-label">Program Keahlian:</label>
                    <select name="program_keahlian" id="program_keahlian" class="form-select" required>
                        @foreach(['SIJA', 'TKJ', 'RPL', 'DKV', 'DPIB', 'TKP', 'TP', 'TFLM', 'TKR', 'TOI'] as $program)
                            <option value="{{ $program }}" {{ $program == $identitaskelas->program_keahlian ? 'selected' : '' }}>
                                {{ $program }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Kompetensi Keahlian -->
                <div class="mb-3">
                    <label for="kompetensi_keahlian" class="form-label">Kompetensi Keahlian:</label>
                    <select name="kompetensi_keahlian" id="kompetensi_keahlian" class="form-select" required>
                        @foreach(['SIJA', 'TKJ', 'RPL', 'DKV', 'DPIB', 'TKP', 'TP', 'TFLM', 'TKR', 'TOI'] as $kompetensi)
                            <option value="{{ $kompetensi }}" {{ $kompetensi == $identitaskelas->kompetensi_keahlian ? 'selected' : '' }}>
                                {{ $kompetensi }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Wali Kelas per Tingkat -->
                @foreach([10, 11, 12, 13] as $grade)
                    <div class="mb-3">
                        <label for="walas_id_{{ $grade }}" class="form-label">Wali Kelas {{ $grade }}:</label>
                        <select name="walas_id_{{ $grade }}" id="walas_id_{{ $grade }}" class="form-select">
                            @foreach($walas as $walas_item)
                                <option value="{{ $walas_item->id }}" {{ $walas_item->id == $identitaskelas->{'walas_id_'.$grade} ? 'selected' : '' }}>
                                    {{ $walas_item->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                @endforeach

                <!-- Ketua Kelas per Tingkat -->
                @foreach([10, 11, 12, 13] as $grade)
                    <div class="mb-3">
                        <label for="siswas_id_{{ $grade }}" class="form-label">Ketua Kelas {{ $grade }}:</label>
                        <select name="siswas_id_{{ $grade }}" id="siswas_id_{{ $grade }}" class="form-select">
                            @foreach($siswas as $siswa_item)
                                <option value="{{ $siswa_item->id }}" {{ $siswa_item->id == $identitaskelas->{'siswas_id_'.$grade} ? 'selected' : '' }}>
                                    {{ $siswa_item->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                @endforeach

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

    </section>

</main>
  
    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">SIJA SMKN 1 Cibinong</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="../assets/js/main.js"></script>

  <script>
        window.onload = function() {
            // Cek jika ada pesan error
            var errorAlert = document.getElementById('alertError');
            var successAlert = document.getElementById('alertSuccess');

            // Jika ada pesan error, sembunyikan setelah 2 detik dengan animasi
            if (errorAlert) {
                setTimeout(function() {
                    errorAlert.style.animation = 'slideUp 0.5s ease-out'; // Animasi naik
                    setTimeout(function() {
                        errorAlert.style.display = 'none'; // Sembunyikan setelah animasi selesai
                    }, 500); // Durasi animasi
                }, 2000); // Tunda selama 2 detik sebelum animasi
            }

            // Jika ada pesan success, sembunyikan setelah 2 detik dengan animasi
            if (successAlert) {
                setTimeout(function() {
                    successAlert.style.animation = 'slideUp 0.5s ease-out'; // Animasi naik
                    setTimeout(function() {
                        successAlert.style.display = 'none'; // Sembunyikan setelah animasi selesai
                    }, 500); // Durasi animasi
                }, 2000); // Tunda selama 2 detik sebelum animasi
            }
        };
    </script>

</body>

</html>