<?php
session_start();

$menu = 'beranda';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BERANDA - Dashboard</title>
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <!-- Custom CSS -->
  <style>
    .content-wrapper {
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .card-header {
      background-color: #1452a6 !important; /* !important to override existing styles */
      color: #fff; /* Optional: Set the text color to white for better readability */
      
    }

    .button-container {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 5px;
      padding-bottom: 8px; /* Add padding to the bottom */
    }

    .start-button {
      padding: 5px 20px;
      font-size: 16px;
      color: #fff;
      background-color: #1452a6;
      border: none;
      border-radius: 5px;
      text-align: center;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .start-button:hover {
      background-color: #0e3e72;
    }

    .accordion-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 60vh; /* Make sure the container takes full viewport height */
    }

    #accordion {
      width: 100%;
      max-width: 900px; /* You can adjust the max-width as needed */
    }

    .justified-text {
      text-align: justify;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php include_once('layouts/header.php'); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include_once('layouts/sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Beranda</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Beranda</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content accordion-container">
      <div id="accordion">
        <div class="card card-primary">
          <div class="card-header">
            <h4 class="card-title w-90">
              <a class="d-block w-90" href="#collapseOne">
                Survei Kepuasan Pelanggan Politeknik Negeri Malang
              </a>
            </h4>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 justified-text">
              Sistem Survey Kepuasan Pelanggan Politeknik Negeri Malang merupakan sarana penting untuk 
              mengukur tingkat kepuasan seluruh pemangku kepentingan Politeknik Negeri Malang, mulai dari mahasiswa, 
              orang tua/wali mahasiswa, alumni, mitra kerjasama, hingga pengguna lulusan Politeknik Negeri Malang. Survey 
              ini dapat memberikan gambaran menyeluruh tentang kinerja Politeknik Negeri Malang dalam berbagai aspek, 
              seperti kualitas pendidikan, fasilitas, pelayanan, dan lulusan. Hasil survey dapat dimanfaatkan 
              untuk meningkatkan kualitas Politeknik Negeri Malang secara berkelanjutan. Dengan mengetahui hal-hal yang 
              perlu diperbaiki, Politeknik Negeri Malang dapat menyusun rencana perbaikan dan melakukan evaluasi secara 
              berkala. Hal ini akan membuat Politeknik Negeri Malang menjadi institusi pendidikan yang lebih berintegritas 
              dalam memenuhi layanan. Hasil survey dapat digunakan untuk mengetahui tingkat kepuasan 
              mahasiswa terhadap kurikulum, dosen, fasilitas, dan kegiatan kemahasiswaan. Informasi ini 
              dapat digunakan untuk melakukan perbaikan kurikulum, meningkatkan kualitas dosen, 
              menyediakan fasilitas yang lebih memadai, dan mengembangkan kegiatan kemahasiswaan 
              yang lebih menarik. Hasil survey dapat digunakan untuk mengetahui tingkat kepuasan 
              pengguna lulusan Politeknik Negeri Malang terhadap kompetensi lulusan.<br>
                
                <!-- Start Button Container inside accordion -->
                <div class="button-container">
                  <button class="start-button" onclick="window.location.href='profil.php'">Mulai</button>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include_once('layouts/footer.php'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</script>
</body>
</html>
