<?php 
session_start();
  $menu = 'profil'; 

  include_once('model/form_profil_model.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
    .content  {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 60vh; 
    }
</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profil</title>

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
            <h1>Profil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profil</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="col-md-6">
    <div class="card-header">
          <div class="card-tools">
           <a href="profil_form.php?act=tambah" class="btn btn-sm btn-primary">Lengkapi</a>
          </div>
        </div>

<!-- Profile Image -->
    <div class="card card-primary card-outline">
      <div class="card-body box-profile">
        <div class="text-center">
          <img class="profile-user-img img-fluid img-circle"
              src="dist/img/user.jpg"
              alt="User profile picture">
        </div>

        <h3 class="profile-username text-center">Dosen</h3>

        <ul class="list-group list-group-unbordered mb-3">
          <li class="list-group-item">
            <b>NIP</b> <a class="float-right"></a>
            <p><?=  $_SESSION["NIP"];?></p>
          </li>
          <li class="list-group-item">
            <b>Nama</b> <a class="float-right"></a>
            <p><?=  $_SESSION["Nama"];?></p>
          </li>
          <li class="list-group-item">
            <b>Unit</b> <a class="float-right"></a>
            <p><?=  $_SESSION["Unit"];?></p>
          </li>
          <li class="list-group-item">
            <b>Tanggal</b> <a class="float-right"></a>
            <p><?=  $_SESSION["Tanggal"];?></p>
          </li>
  
      </div>
      <!-- /.card-body -->
    </div>
<!-- /.card -->
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
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>

</body>
</html>
