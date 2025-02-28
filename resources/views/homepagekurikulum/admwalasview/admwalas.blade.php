<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>E Walas SMKN 1 Cibinong- Kurikulum</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="/../../images/logokampak.png" rel="icon">
  <link href="/../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/../../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<!-- bootstrap css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"rel="stylesheet"/>

  <!-- Main CSS File -->
  <link href="/../../assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iLanding
  * Template URL: https://bootstrapmade.com/ilanding-bootstrap-landing-page-template/
  * Updated: Nov 12 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>


    
table {
  width: 100%;
  border-collapse: collapse;
}

table th,
table td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
  vertical-align: middle;
}

.edit-icon,
.isi-icon {
  font-size: 18px;
  cursor: pointer;
  margin: 0 5px;
}

.edit-icon {
  color: #ffc107; /* kuning */
}

.edit-icon:hover {
  color: #e0a800;
}

.isi-icon {
  color: #007bff; /* biru */
}

.isi-icon:hover {
  color: #0056b3;
}

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

      <a href="/kurikulumpage" class="logo d-flex align-items-center me-auto me-xl-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Home Page Kurikulum">
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
            @if(session()->has('kurikulum_id'))
                <i class="bi bi-person-circle text-primary me-2" style="font-size: 24px;"></i>  <!-- Icon User dengan warna biru -->
                
                <!-- Tautkan nama walas ke /userprofile -->
                <a href="/profilekurikulum" class="text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Profile Kurikulum">
                    <span>{{ $kurikulums->nama }}</span>  <!-- Nama Walas yang sedang login -->
                </a>
            @endif
            <form action="{{ route('logoutkurikulum') }}" method="POST" class="ms-3">
                @csrf
                <button type="submit" class="btn-getstarted" data-bs-toggle="tooltip" data-bs-placement="top" title="Keluar dari Akun Anda">Logout</button>
            </form>
        </div>

    </div>
  </header>

<main class="main">

       <!-- Hero Section -->
       <section id="hero" class="hero section">
    <div class="starter-section container" data-aos="fade-up" data-aos-delay="100">
        <!-- Header dengan Title, Pencarian, dan Tombol -->
        <div class="mb-4">
            <h2 class="font-weight-bold">Daftar Administrasi</h2>
            <hr class="my-3"> <!-- Garis horizontal di bawah judul -->
            <div class="d-flex align-items-center justify-content-start">
            </div>
        </div>

        <div class="container mt-4">
    <h3 class="text-center">Administrasi Walas</h3>
    <table class="table table-striped table-bordered mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Poin Administrasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Looping Data -->
            <tr>
                <td>1</td>
                <td>Identitas Kelas</td>
                <td>
                     <!-- Link untuk mengarahkan ke halaman dengan walas_id -->
                     <a href="{{ route('admwalas.identitaskelaskurikulum') }}?walas_id={{ $walas->id }}" >
                        <i class="fas fa-edit edit-icon" title="Detail Identitas Kelas"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Lembar Pengesahan</td>
                <td>
                     <!-- Link untuk mengarahkan ke halaman dengan walas_id -->
                     <a href="{{ route('admwalas.lembarpengesahankurikulum') }}?walas_id={{ $walas->id }}">
                        <i class="fas fa-edit edit-icon" title="Detail Lembar Pengesahan"></i>
                    </a>
                </a>
                </td>
            </tr>
            <!-- <tr>
                <td>3</td>
                <td>Struktur Organisasi Kelas</td>
                <td>
                    <a href="{{ route('admwalas.strukturorganisasikelaskurikulum') }}?walas_id={{ $walas->id }}">
                            <i class="fas fa-edit edit-icon" title="Detail Struktur Organisasi"></i>
                        </a>
                    </a>
                </td>
            </tr> -->
            <!-- <tr>
                <td>4</td>
                <td>Jadwal KBM</td>
                <td>
                    <a href="{{ route('admwalas.jadwalkbmkurikulum') }}?walas_id={{ $walas->id }}">
                                <i class="fas fa-edit edit-icon" title="Detail Jadwal KBM"></i>
                            </a>
                        </a>
                </td>
            </tr> -->
            <tr>
                <td>3</td>
                <td>Jadwal Kegiatan Piket Kelas</td>
                <td>
                <a href="{{ route('admwalas.piketkelaskurikulum') }}?walas_id={{ $walas->id }}">
                    <i class="fas fa-edit edit-icon" title="Detail Jadwal Piket Kelas"></i>
                </a>
                </td>
            </tr>
            <tr>
           
        </tr>
            <tr>
                <td>4</td>
                <td>Kehadiran Peserta Didik</td>
                <td>
                    <a href="{{ route('admwalas.presensiskurikulum') }}?walas_id={{ $walas->id }}">
                    <i class="fas fa-edit edit-icon" title="Detail Kehadiran Peserta Didik"></i>
                </a>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Daftar Penyerahan/Pengembalian Rapor Siswa</td>
                <td>
                <a href="{{ route('admwalas.serahterimaraporkurikulum') }}?walas_id={{ $walas->id }}">
                    <i class="fas fa-edit edit-icon" title="Detail Serah terima Rapor"></i>
                </a>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>Catatan Kasus Peserta Didik</td>
                <td>
                <a href="{{ route('admwalas.catatankasuskurikulum') }}?walas_id={{ $walas->id }}">
                    <i class="fas fa-edit edit-icon" title="Detail Catatan Kasus"></i>
                </a>
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>Agenda Kegiatan Walas</td>
                <td>
                    <!-- Link untuk mengarahkan ke halaman dengan walas_id -->
                    <a href="{{ route('admwalas.agendawalaskurikulum') }}?walas_id={{ $walas->id }}">
                        <i class="fas fa-edit edit-icon" title="Detail Agenda Walas"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td>Daftar Peserta Didik</td>
                <td>
                <a href="{{ route('admwalas.daftarpesertadidikkurikulum') }}?walas_id={{ $walas->id }}">
                    <i class="fas fa-edit edit-icon" title="Detail Daftar peserta Didik"></i>
                </a>
                </td>
            </tr>
            <tr>
                <td>9</td>
                <td>Rekapitulasi Jumlah Peserta Didik</td>
                <td>
                <a href="{{ route('admwalas.rekapitulasipdidikkurikulum') }}?walas_id={{ $walas->id }}">
                    <i class="fas fa-edit edit-icon" title="Detail Rekapitulasi jumlah peserta Didik"></i>
                </a>
                </td>
            </tr>
            <tr>
                <td>10</td>
                <td>Home Visit</td>
                <td>
                    <a href="{{ route('admwalas.homevisitkurikulum') }}?walas_id={{ $walas->id }}">
                    <i class="fas fa-edit edit-icon" title="Detail Home Visit Data"></i>
                </a>
                </td>
            </tr>
            <tr>
                <td>11</td>
                <td>Buku Tamu Orang Tua/Wali Peserta Didik</td>
                <td>
                <a href="{{ route('admwalas.bukutamuortukurikulum') }}?walas_id={{ $walas->id }}">
                    <i class="fas fa-edit edit-icon" title="Detail Buku Tamu OrangTua"></i>
                </a>
                </td>
            </tr>
            <tr>
                <td>12</td>
                <td>Persentase Sosial Ekonomi</td>
                <td>
                <a href="{{ route('admwalas.persentasesosialekonomikurikulum') }}?walas_id={{ $walas->id }}">
                    <i class="fas fa-edit edit-icon" title="Isi data"></i>
                </a>
                </td>
            </tr>
            <tr>
                <td>13</td>
                <td>Rentang Pendapatan Orang Tua</td>
                <td>
                <a href="{{ route('admwalas.rentangpendapatanortukurikulum') }}?walas_id={{ $walas->id }}">
                    <i class="fas fa-edit edit-icon" title="Detail Rentang pendapatan Ortu"></i>
                </a>
                </td>
            </tr>
            <tr>
                <td>14</td>
                <td>Prestasi Peserta Didik</td>
                <td>
                <a href="{{ route('admwalas.prestasisiswakurikulum') }}?walas_id={{ $walas->id }}">
                    <i class="fas fa-edit edit-icon" title="Detail presensi Siswa"></i>
                </a>
                </td>
            </tr>
            <tr>
                <td>15</td>
                <td>Grafik Jarak Tempuh Siswa</td>
                <td>
                <a href="{{ route('admwalas.grafikjaraktempuhkurikulum') }}?walas_id={{ $walas->id }}">
                    <i class="fas fa-edit edit-icon" title="Detail Grafik Jarak Tempuh"></i>
                </a>
                </td>
            </tr>
            <tr>
                <td>16</td>
                <td>Berita Acara Kenaikan Kelas</td>
                <td>
                    <a href="{{ route ('admwalas.beritaacarakenaikankurikulum')}}?walas_id={{ $walas->id }}">
                    <i class="fas fa-edit edit-icon" title="Detail Berita Acara kenaikan Kelas"></i>
                </a>
                </td>
            </tr>
            <tr>
                <td>17</td>
                <td>Berita Acara Kelulusan</td>
                <td>
                    <a href="{{ route ('admwalas.beritaacarakelulusankurikulum')}}?walas_id={{ $walas->id }}">
                    <i class="fas fa-edit edit-icon" title="Berita Acara Kelulusan"></i>
                </a>
                </td>
            </tr>
            <tr>
                <td>18</td>
                <td>Berita Acara Serah Terima</td>
                <td>
                    <a href="{{ route ('admwalas.beritaacaraserahterimakurikulum')}}?walas_id={{ $walas->id }}">
                    <i class="fas fa-edit edit-icon" title="Berita Acara Serah Terima"></i>
                </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</section>

<!-- Modal Unggah Data -->
<div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">Unggah Data Administrasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="fileUpload" class="form-label">Pilih File (CSV, Excel)</label>
                        <input type="file" class="form-control" id="fileUpload" accept=".csv, .xlsx">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Unggah</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Data -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Tambah Data Administrasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="teacherName" class="form-label">Nama Administrasi</label>
                        <input type="text" class="form-control" id="teacherName" placeholder="Masukkan nama Administrasi">
                    </div>
                    <div class="mb-3">
                        <label for="teacherPhoto" class="form-label">Foto Administrasi</label>
                        <input type="file" class="form-control" id="teacherPhoto">
                    </div>
                    <div class="mb-3">
                        <label for="teacherWhatsApp" class="form-label">WhatsApp</label>
                        <input type="text" class="form-control" id="teacherWhatsApp" placeholder="Masukkan nomor WhatsApp">
                    </div>
                    <div class="mb-3">
                        <label for="teacherInfo" class="form-label">Informasi</label>
                        <textarea class="form-control" id="teacherInfo" rows="3" placeholder="Masukkan informasi tambahan"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-success">Tambah Data</button>
            </div>
        </div>
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
  <script src="/../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/../../assets/vendor/php-email-form/validate.js"></script>
  <script src="/../../assets/vendor/aos/aos.js"></script>
  <script src="/../../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/../../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/../../assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="/../../assets/js/main.js"></script>
  <!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

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