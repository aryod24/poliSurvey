<?php 

include_once('model/form_soal_model.php');

$action = $_GET['act'];

if($action == 'simpan'){
    $data = [
        'soal_jenis' => $_POST['soal_jenis'],
        'soal_nama' => $_POST['soal_nama']
    ];

    $insert = new Soal();
    $insert->insertData($data);
    header('location: soal.php');
}

if($action == 'edit'){
  $id = $_GET['id'];
  $data = [
    'soal_jenis' => $_POST['soal_jenis'],
    'soal_nama' => $_POST['soal_nama']
  ];

  $update = new Soal();
  $update->updateData($id, $data);

  header('location: soal.php');

}


if($action == 'delete'){
  $id = $_GET['id'];

  $delete = new Soal();
  $delete->deleteData($id);
  header('location: soal.php');
}