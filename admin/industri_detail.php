<?php 
  $menu = 'industri'; 

  include_once('model/jawaban_industri_model.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data industri</title>

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
            <h1>Form Jawaban industri</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Jawaban industri</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Jawaban industri</h3>

          <div class="card-tools">
          </div>
        </div>
        <div class="card-body">
          <table class="table table-sm table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Survey</th>
                <th>Soal</th>
                <th>Jawaban</th>
              </tr>
            </thead>
            <tbody>

            <?php 
                    $id = $_GET['id'];
                    $jindustri = new jIndustri();
                    $data = $jindustri->getindustriById($id);
                    
                    $i = 1;
                    while($row = $data->fetch_assoc()){
                        echo '<tr>
                            <td>'.$i.'</td>
                            <td>'.$row['survey_nama'].'</td>
                            <td>'.$row['soal_nama'].'</td>
                            <td>'.$row['jawaban'].'</td>
                        </tr>';
                        $i++;
                    }
              ?>

            </tbody>
          </table>
        </div>
      </div>
      <!-- /.card -->

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
