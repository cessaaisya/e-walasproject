<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>E Walas SMKN 1 Cibinong - Admin</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="../../images/logokampak.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../../assets/css/main.css" rel="stylesheet">

  <style>
    /* Alert box */
    .alert {
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
      max-height: 60px;
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .alert-danger {
      background-color: #e74c3c;
    }

    .alert-success {
      background-color: #2ecc71;
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

    /* Form styles */
    .form-container {
      max-width: 800px;
      margin: 2rem auto;
      padding: 2rem;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 1.5rem;
    }

    .form-label {
      font-weight: bold;
    }

    .form-select, .form-control {
      padding: 0.75rem;
      border-radius: 4px;
      border: 1px solid #ddd;
      width: 100%;
    }

    .btn-getstarted, .btn-success {
      padding: 0.75rem 2rem;
      border-radius: 4px;
      border: none;
      background-color: #1EB5BA;
      color: white;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn-getstarted:hover, .btn-success:hover {
      background-color: #1EB5BA;
    }

    .btn-secondary {
      padding: 0.75rem 2rem;
      border-radius: 4px;
      border: none;
      background-color: #ccc;
      color: white;
    }

    .btn-secondary:hover {
      background-color: #aaa;
    }

    .logo h1 {
      font-size: 1.5rem;
      font-weight: bold;
      margin: 0;
    }

    #navmenu {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    #navmenu ul {
      list-style-type: none;
      padding: 0;
    }

    #navmenu ul li {
      display: inline-block;
      margin-left: 20px;
    }

    #navmenu ul li a {
      color: white;
      text-decoration: none;
      font-weight: bold;
    }

    #navmenu ul li a:hover {
      color: #f39c12;
    }

    /* Mobile responsiveness */
    @media (max-width: 768px) {
      #navmenu ul {
        display: none;
        width: 100%;
        text-align: center;
      }

      #navmenu ul li {
        display: block;
        margin: 10px 0;
      }

      .mobile-nav-toggle {
        display: block;
        font-size: 1.5rem;
        color: white;
      }

      #navmenu.active ul {
        display: block;
      }
    }
  </style>
</head>

<body>
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

      <a href="/adminpage" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">E - Walas</h1>
</a>

      <nav id="navmenu" class="navmenu">
        <ul>
        <li><a href="/tahunajaran" >Beranda</a></li>
          <li><a href="/rombel" class="active">Rombel</a></li>
          <li><a href="/datamapel">Mata Pelajaran</a></li>
          <li class="dropdown"><a href="#"><span>Tahun Akademik</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Tahun Ajaran 2025/2026 - Aktif</a></li>
            </ul>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <form action="{{ route('logoutadmin') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn-getstarted">Logout</button>
                                </form>
      

    </div>
  </header>

  <br><br><br><br>

  <div class="container mt-5">
    <div class="form-container">
    <h3>Form Edit Wali Kelas </h3>
    <br>
        <!-- Form Edit Data Wali Kelas -->
<form action="{{ route('walas.update', $walas->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT') <!-- Menyatakan bahwa ini adalah request PUT untuk update -->
    <div class="mb-3">
        <label for="teacherName" class="form-label">Nama Wali Kelas</label>
        <input type="text" class="form-control" id="teacherName" name="nama" value="{{ old('nama', $walas->nama) }}" required>
    </div>
    <div class="mb-3">
        <label for="teacherPhoto" class="form-label">Foto Wali Kelas</label>
        <input type="file" class="form-control" id="teacherPhoto" name="image_url">
        @if($walas->image_url)
            <div class="mt-2">
                <img src="{{ asset('storage/' . $walas->image_url) }}" alt="Foto Wali Kelas" class="img-thumbnail" style="width: 150px;">
            </div>
        @endif
    </div>
    <div class="mb-3">
        <label for="teacherWhatsApp" class="form-label">WhatsApp</label>
        <input type="number" class="form-control" id="teacherWhatsApp" name="no_wa" value="{{ old('no_wa', $walas->no_wa) }}" required>
    </div>
    <div class="mb-3">
        <label for="teacherGender" class="form-label">Pilih Gender</label>
        <select class="form-select" id="teacherGender" name="jenis_kelamin" required>
            <option value="Laki-laki" {{ $walas->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
            <option value="Perempuan" {{ $walas->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="teacherPassword" class="form-label">Password</label>
        <input type="password" class="form-control" id="teacherPassword" placeholder="Masukkan Password (Kosongkan jika tidak ingin diubah)" name="password">
    </div>
    <div class="mb-3">
        <label for="teacherNip" class="form-label">NIP</label>
        <input type="number" class="form-control" id="teacherNip" name="nip" value="{{ old('nip', $walas->nip) }}" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Update Data</button>
    </div>
</form>

    </div>
  </div>

  <script>
    // JavaScript untuk menutup alert
    setTimeout(function() {
      document.querySelector('.alert').style.display = 'none';
    }, 5000); // Menyembunyikan alert setelah 5 detik
  </script>

  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/aos/aos.js"></script>
  <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../assets/js/main.js"></script>
</body>
</html>
