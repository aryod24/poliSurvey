<?php
session_start();
require 'model/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Insert data into t_responden_tendik table
    $query = $db->prepare("INSERT INTO t_responden_tendik (responden_tendik_id, Survey_id, responden_tanggal, responden_nama, responden_nopeg, responden_unit) VALUES (NULL, 20, ?, ?, ?, ?)");
    $query->bind_param('ssss', $_SESSION["Tanggal"], $_SESSION["Nama"], $_SESSION["NIP"], $_SESSION["Unit"]);
    
    if ($query->execute() === TRUE) {
        $lastIdInserted = $query->insert_id;
        echo "New record created successfully";
    } else {
        echo "Error: " . $query->error;
    }

    // Insert data into t_jawaban_tendik table
    if (isset($_POST['jawaban']) && is_array($_POST['jawaban'])) {
        foreach ($_POST['jawaban'] as $soal_id => $jawaban) {
            $query = $db->prepare('INSERT INTO t_jawaban_tendik (jawaban_tendik_id, responden_tendik_id, soal_id, jawaban) VALUES (NULL, ?, ?, ?)');
            $query->bind_param('iis', $lastIdInserted, $soal_id, $jawaban);
            $query->execute();
        }
    }

    // Redirect to pktendik.php
    header('Location: pkpmtendik.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>POLISURVEI - Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <style>
    .center-text {
      text-align: center;
    }
    /* Mengatur tinggi dan lebar body agar elemen bisa di tengah halaman */
body, html {
    height: 100%;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Mengatur container-fluid agar menggunakan seluruh lebar dan tinggi */
.container-fluid {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
}

/* Custom blue color */
.card-primary.card-outline, .btn-primary, .form-check-input:checked, .nav-link.active, .nav-pills .nav-link.active, .nav-treeview>.nav-item>.nav-link.active, .nav-tabs .nav-link.active, .page-link, .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
    background-color: #1452a6 !important;
    border-color: #1452a6 !important;
}

.card-header h4.card-title a, .card-header {
    color: #fff !important;
    background-color: #1452a6 !important;
}

.table thead th {
    background-color: #1452a6 !important;
    color: #fff;
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
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Kuesioner</h3>
              </div>
              <h2 style="text-align: center;">Kuesioner Tenaga Kependidikan</h2>
              <h2 style="text-align: center;">Sistem Pengelolaan Kegiatan Penelitian Politeknik Negeri Malang</h2>
              <br>

                 <!-- START ACCORDION & CAROUSEL-->

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <!-- Second card-header removed -->
      <!-- /.card-header -->
      <div class="card-body">
              <section class="content">
              <div id="accordion">
          <div class="card card-primary">
              <div class="card-header">
              <h4 class="card-title w-90">
                <a class="d-block w-90" href="#collapseOne">
                Syarat dan Ketentuan Pengisian Kuesioner Survei Kepuasan Pelanggan Politeknik Negeri Malang
                </a>
              </h4>
            </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              Tingkat kepuasan menggunakan skala pengukuran untuk menggambarkan tingkat kepuasan pelanggan terhadap layanan Politeknik Negeri Malang
              Semakin tinggi skor yang Anda berikan menunjukkan semakin tinggi tingkat kepuasan Anda<br>
              Kriteria Penilaian:<br>
              5 = Sangat Puas <br>
              4 = Puas <br>
              3 = Cukup Puas <br>
              2 = Tidak Puas <br> 
              1 = Sangat Tidak Puas<br>
              
            </div>
          </div>
        </div>
      </div>
    </section>
              <div class="card-body">
                <form action="" method="post">
  <table class="table table-sm table-bordered">
    <thead>
      <tr>
        <th rowspan="2">No</th>
        <th rowspan="2">Kriteria Kepuasan</th>
        <th class="center-text" colspan="5">Tingkat Kepuasan</th>
      </tr>
      <tr>
        <th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
      </tr>
    </thead>
    <tbody>
    <?php
    // Ambil Survey_id dari request atau set default
    $Survey_id = isset($_GET['Survey_id']) ? $_GET['Survey_id'] : 20;

    // SQL query to fetch all data from users table
    $sql = "SELECT * from m_Survey_soal WHERE Survey_id = $Survey_id";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        $no = 1;
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<th scope='row'>" . $no . "</th>";
            echo "<td>" . $row['soal_nama'] . "</td>";
            for ($i = 1; $i <= 5; $i++) {
                echo "<td><div class='form-check form-check-inline'>";
                echo "<input class='form-check-input' type='radio' name='jawaban[" . $row['soal_id'] . "]' value='$i' required>";
                echo "</div></td>";
            }
            echo "</tr>";
            $no++;
        }
    } else {
        echo "<tr><td colspan='6' class='text-center'>No results</td></tr>";
    }
    ?>
    </tbody>
  </table>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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
