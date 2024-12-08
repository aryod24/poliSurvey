<?php
  include('model/session.php');

  if(!$session->exist('is_login')){
    header('Location: login.php');
  }

  $menu = 'beranda';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SISPOLIN - Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
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
    <section class="content">
              <div id="accordion">
          <div class="card card-primary">
              <div class="card-header">
              <h4 class="card-title w-90">
                <a class="d-block w-90"href="#collapseOne">
                Survey Kepuasan Pelanggan Politeknik Negeri Malang
                </a>
              </h4>
            </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              Dalam rangka mempebaiki kualitas pelayanan bagi pelanggan maka Politeknik Negeri Malang 
              memerlukan umpan balik dari pelanggan untuk menilai kualitas pelayanan. 
              Umpan balik pelayanan dikumpulkan dari mahasiswa, dosen, tenaga pendidik, alumni, orang tua wali mahasiswa, 
              dan pengguna lulusan untuk mengetahui kepuasan terhadap kinerja dan pelayanan Politeknik Negeri Malang.
              Maksud survey kepuasan pelanggan adalah sebagai acuan dan standar bagi Politeknik Negeri Malang 
              dalam penyusunan indeks kepuasan pelanggan terhadap kinerja Politeknik Negeri Malang dan kinerja dosen dan civitas akademik.
              Tujuannya adalah untuk mengetahui tingkat kepuasan pelanggan dan mengetahui kinerja pelayanan akademik Politeknik Negeri Malang.<br>
              
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- /.content-wrapper -->
</div>
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
