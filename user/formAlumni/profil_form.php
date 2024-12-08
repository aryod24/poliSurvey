<?php 
  session_start();
  $menu = 'profil'; 
  include_once('model/form_profil_model.php');

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $NIM= $_POST['NIM'];
    $Nama = $_POST['Nama'];
    $Prodi = $_POST['Prodi'];
    $Tanggal = $_POST['Tanggal'];
    $HP = $_POST['HP'];
    $Email = $_POST['Email'];
    $Tahun_Lulus = $_POST['Tahun_Lulus'];
  
    $_SESSION["NIM"]=$NIM;
    $_SESSION["Nama"]=$Nama;
    $_SESSION["Prodi"]=$Prodi;
    $_SESSION["Tanggal"]=$Tanggal;
    $_SESSION["HP"]=$HP;
    $_SESSION["Email"]=$Email;
    $_SESSION["Tahun_Lulus"]=$Tahun_Lulus;

    header('Location: ikaalumni.php');  
    exit();
}
    date_default_timezone_set("Asia/Jakarta");
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profil</title>
  <style>
    .btn-common {
        padding: 5px 10px; /* Adjust padding to make buttons larger */
        font-size: 16px;
        color: #fff;
        border: none;
        border-radius: 5px;
        text-align: center;
        cursor: pointer;
        transition: background-color 0.3s;
        flex: 1; /* Make buttons take equal width */
        margin: 0 5px; /* Add some spacing between buttons */
    }

    .btn-simpan {
        background-color: #1452a6;
    }

    .btn-kembali {
        background-color: #FFC107;
    }

    .card-header {
        background-color: #1452a6 !important;
    }

    .btn-group {
        display: flex; /* Use flexbox to make buttons the same width */
        justify-content: space-between; /* Add some space between buttons */
    }
</style>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
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

      <!-- Default box -->          
      <?php 
        $act = (isset($_GET['act']))? $_GET['act'] : '';

        if($act == 'tambah'){
      ?>

        <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Isi Profil</h3>
        </div>
        <!-- /.card-header -->
        <form id="profilForm" action="" method="post">
        <div class="card-body">
            <div class="row">
            <div class="col-md-6">
                <h4>NIM</h4>
                <div class="form-group">
                <input type="text" name="NIM" class="form-control rounded-0"  >
                </div>
            </div>
            <div class="col-md-6">
                <h4>Nama</h4>
                <div class="form-group">
                <input type="text" name="Nama" class="form-control rounded-0" id="exampleInputRounded0" >
                </div>
            </div>
            <div class="col-md-6">
                <h4>Prodi</h4>
                <div class="form-group">
                <input type="text" name="Prodi" class="form-control rounded-0" id="exampleInputRounded0" >
                </div>
            </div>
            <div class="col-md-6">
                <h4>Nomor HP</h4>
                <div class="form-group">
                    <input type="text" name="HP" class="form-control rounded-0">
                </div>
            </div>
            <div class="col-md-6">
                <h4>Email</h4>
                <div class="form-group">
                    <input type="email" name="Email" class="form-control rounded-0">
                </div>
            </div>
            <div class="col-md-6">
                <h4>Tanggal</h4>
                <div class="form-group">
                <input type="datetime-local" value="<?php  echo date('Y-m-d H:i:s')?>" name="Tanggal" class="form-control rounded-0" id="exampleInputRounded0" >
                </div>
            </div>
            <div class="col-md-6">
                <h4>Tahun Lulus</h4>
                <div class="form-group">
                    <input type="text" name="Tahun_Lulus" class="form-control rounded-0">
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="btn-group">
            <button type="submit" class="btn-common btn-simpan">Simpan</button>
            <button class="btn-common btn-kembali" onclick="window.location.href='Profil.php'">Kembali</button>
          </div>
        </div>

        </form>
        </div>

        <?php } else if($act == 'edit') { ?>
         
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit Pengguna</h3>
            <div class="card-tools"></div>
          </div>
          <div class="card-body">
            
            <?php 
              $id = $_GET['id'];

              $user = new User();
              $data = $user->getDataById($id);
              $data = $data->fetch_assoc();
            ?>

            <form action="user_action.php?act=edit&id=<?php echo $id?>" method="post">
                <div class="form-group">
                  <label for="user_id">ID User</label>
                  <input required type="text" name="user_id" id="user_id" class="form-control" value="<?php echo $data['user_id'] ?>">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input required type="text" name="username" id="username" class="form-control"  value="<?php echo $data['username'] ?>">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input required type="text" name="nama" id="nama" class="form-control" value="<?php echo $data['nama'] ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input required type="password" name="password" id="password" class="form-control" value="<?php echo $data['password'] ?>">
                </div>
              <div class="form-group">
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                <button class="btn btn-warning" onclick="window.location.href='Profil.php'">Kembali</button>
              </div>
            </form>
        </div>
   
        </div>
          
        <?php }?>

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
      
    </section>
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->


  
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
<script src="plugins/jquery-validation/localization/messages_id.js"></script>

<script>
  $(document).ready(function(){
    $('#profilForm').on('submit', function(event) {
      var valid = true;
      $(this).find('input').each(function() {
        if (!$(this).val()) {
          valid = false;
          alert('Please fill out all fields.');
          return false; // Break out of the each loop
        }
      });

      if (!valid) {
        event.preventDefault(); // Prevent form submission
      }
    });
  });
</script>

</body>
</html>
