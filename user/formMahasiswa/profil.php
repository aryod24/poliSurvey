<?php
session_start();
$menu = 'profil';

include_once('model/form_profil_model.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    .content {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 60vh;
    }
    .card-body {
      max-height: 400px; /* Atur tinggi maksimum card body */
      overflow-y: auto;
      padding-bottom: 10px; /* Reduced bottom padding */
    }

    .list-group-item {
      padding: 1px 5px;
      /* Atur padding pada item list */
      margin-bottom: 1px;
      /* Atur margin bawah untuk jarak antar item */
      border: none;
      /* Menghapus border item list */
      border-bottom: -2px solid #ccc;
      /* Menambahkan garis bawah pada item list */
    }

    .list-group-item b {
      display: block;
      /* Menampilkan label dalam baris baru */
      margin-bottom: -2px;
      /* Menambahkan sedikit jarak antara label dan nilai */
    }

    .list-group-item p {
      margin: 0;
      /* Menghapus margin default pada elemen p */
    }

    .profile-user-img {
      width: 40px !important;
      /* Adjusted size */
      height: 40px !important;
      /* Adjusted size */
      object-fit: cover;
      margin-top: -40px;
      /* Raise the position of the image */
    }

    .card-primary.card-outline {
      border-top: 3px solid #1452a6;
      /* Change the card outline to the new color */
    }

    .btn-button {
      padding: 5px 10px;
      font-size: 16px;
      color: #fff;
      background-color: #1452a6;
      border: none;
      border-radius: 5px;
      text-align: center;
      cursor: pointer;
      transition: background-color 0.3s;
      display: inline-block;
      text-decoration: none;
    }

    .btn-button:hover {
      background-color: #0d3a85;
      border-color: #0d3a85;
    }
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PROFIL</title>

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
              <button class="btn-button" onclick="window.location.href='profil_form.php?act=tambah'">Lengkapi</button>
            </div>
          </div>

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="dist/img/user.jpg" alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">Mahasiswa</h3>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>NIM</b>
                  <p><?= isset($_SESSION["NIP"]) ? $_SESSION["NIP"] : ''; ?></p>
                </li>
                <li class="list-group-item">
                  <b>Nama</b>
                  <p><?= isset($_SESSION["Nama"]) ? $_SESSION["Nama"] : ''; ?></p>
                </li>
                <li class="list-group-item">
                  <b>Prodi</b>
                  <p><?= isset($_SESSION["Unit"]) ? $_SESSION["Unit"] : ''; ?></p>
                </li>
                <li class="list-group-item">
                  <b>Email</b>
                  <p><?= isset($_SESSION["Email"]) ? $_SESSION["Email"] : ''; ?></p>
                </li>
                <li class="list-group-item">
                  <b>No Hp</b>
                  <p><?= isset($_SESSION["HP"]) ? $_SESSION["HP"] : ''; ?></p>
                </li>
                <li class="list-group-item">
                  <b>Tahun Masuk</b>
                  <p><?= isset($_SESSION["Tahun_Masuk"]) ? $_SESSION["Tahun_Masuk"] : ''; ?></p>
                </li>
                <li class="list-group-item">
                  <b>Tanggal</b>
                  <p><?= isset($_SESSION["Tanggal"]) ? $_SESSION["Tanggal"] : ''; ?></p>
                </li>
              </ul>
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