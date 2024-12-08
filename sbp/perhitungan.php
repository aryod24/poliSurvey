<?php
include('model/koneksi.php');  // Memastikan koneksi database disertakan

function dataolahan($db) {
    $result = $db->query("SELECT
        r.responden_alumni_id AS id,
        r.responden_nama AS nama,
        r.responden_prodi AS prodi,
        MAX(CASE WHEN j.soal_id = 180 THEN j.jawaban ELSE NULL END) AS 'C1',
        MAX(CASE WHEN j.soal_id = 181 THEN j.jawaban ELSE NULL END) AS 'C2',
        MAX(CASE WHEN j.soal_id = 182 THEN j.jawaban ELSE NULL END) AS 'C3',
        MAX(CASE WHEN j.soal_id = 183 THEN j.jawaban ELSE NULL END) AS 'C4',
        MAX(CASE WHEN j.soal_id = 184 THEN j.jawaban ELSE NULL END) AS 'C5',
        MAX(CASE WHEN j.soal_id = 185 THEN j.jawaban ELSE NULL END) AS 'C6',
        MAX(CASE WHEN j.soal_id = 186 THEN j.jawaban ELSE NULL END) AS 'C7',
        MAX(CASE WHEN j.soal_id = 187 THEN j.jawaban ELSE NULL END) AS 'C8',
        MAX(CASE WHEN j.soal_id = 188 THEN j.jawaban ELSE NULL END) AS 'C9',
        MAX(CASE WHEN j.soal_id = 189 THEN j.jawaban ELSE NULL END) AS 'C10',
        MAX(CASE WHEN j.soal_id = 190 THEN j.jawaban ELSE NULL END) AS 'C11',
        MAX(CASE WHEN j.soal_id = 191 THEN j.jawaban ELSE NULL END) AS 'C12',
        MAX(CASE WHEN j.soal_id = 192 THEN j.jawaban ELSE NULL END) AS 'C13'
    FROM
        t_jawaban_alumni j
    JOIN
        t_responden_alumni r ON j.responden_alumni_id = r.responden_alumni_id
    GROUP BY
        r.responden_alumni_id, r.responden_nama, r.responden_prodi");

    return $result;
}

function dataolahan2($db) {
  $result = $db->query("SELECT
      prodi,
      SUM(C1) AS total_C1,
      SUM(C2) AS total_C2,
      SUM(C3) AS total_C3,
      SUM(C4) AS total_C4,
      SUM(C5) AS total_C5,
      SUM(C6) AS total_C6,
      SUM(C7) AS total_C7,
      SUM(C8) AS total_C8,
      SUM(C9) AS total_C9,
      SUM(C10) AS total_C10,
      SUM(C11) AS total_C11,
      SUM(C12) AS total_C12,
      SUM(C13) AS total_C13
  FROM (
      SELECT
          r.responden_prodi AS prodi,
          MAX(CASE WHEN j.soal_id = 180 THEN j.jawaban ELSE NULL END) AS 'C1',
          MAX(CASE WHEN j.soal_id = 181 THEN j.jawaban ELSE NULL END) AS 'C2',
          MAX(CASE WHEN j.soal_id = 182 THEN j.jawaban ELSE NULL END) AS 'C3',
          MAX(CASE WHEN j.soal_id = 183 THEN j.jawaban ELSE NULL END) AS 'C4',
          MAX(CASE WHEN j.soal_id = 184 THEN j.jawaban ELSE NULL END) AS 'C5',
          MAX(CASE WHEN j.soal_id = 185 THEN j.jawaban ELSE NULL END) AS 'C6',
          MAX(CASE WHEN j.soal_id = 186 THEN j.jawaban ELSE NULL END) AS 'C7',
          MAX(CASE WHEN j.soal_id = 187 THEN j.jawaban ELSE NULL END) AS 'C8',
          MAX(CASE WHEN j.soal_id = 188 THEN j.jawaban ELSE NULL END) AS 'C9',
          MAX(CASE WHEN j.soal_id = 189 THEN j.jawaban ELSE NULL END) AS 'C10',
          MAX(CASE WHEN j.soal_id = 190 THEN j.jawaban ELSE NULL END) AS 'C11',
          MAX(CASE WHEN j.soal_id = 191 THEN j.jawaban ELSE NULL END) AS 'C12',
          MAX(CASE WHEN j.soal_id = 192 THEN j.jawaban ELSE NULL END) AS 'C13'
      FROM
          t_jawaban_alumni j   
      JOIN
          t_responden_alumni r ON j.responden_alumni_id = r.responden_alumni_id
      GROUP BY
          r.responden_alumni_id, r.responden_nama, r.responden_prodi
  ) AS subquery
  GROUP BY
      prodi");

  return $result;
}

function dataolahan3($db) {
    $result = $db->query("SELECT
        prodi,
        SUM(C1) / COUNT(*) AS total_C1,
        SUM(C2) / COUNT(*) AS total_C2,
        SUM(C3) / COUNT(*) AS total_C3,
        SUM(C4) / COUNT(*) AS total_C4,
        SUM(C5) / COUNT(*) AS total_C5,
        SUM(C6) / COUNT(*) AS total_C6,
        SUM(C7) / COUNT(*) AS total_C7,
        SUM(C8) / COUNT(*) AS total_C8,
        SUM(C9) / COUNT(*) AS total_C9,
        SUM(C10) / COUNT(*) AS total_C10,
        SUM(C11) / COUNT(*) AS total_C11,
        SUM(C12) / COUNT(*) AS total_C12,
        SUM(C13) / COUNT(*) AS total_C13
    FROM (
        SELECT
            r.responden_prodi AS prodi,
            MAX(CASE WHEN j.soal_id = 180 THEN j.jawaban ELSE NULL END) AS 'C1',
            MAX(CASE WHEN j.soal_id = 181 THEN j.jawaban ELSE NULL END) AS 'C2',
            MAX(CASE WHEN j.soal_id = 182 THEN j.jawaban ELSE NULL END) AS 'C3',
            MAX(CASE WHEN j.soal_id = 183 THEN j.jawaban ELSE NULL END) AS 'C4',
            MAX(CASE WHEN j.soal_id = 184 THEN j.jawaban ELSE NULL END) AS 'C5',
            MAX(CASE WHEN j.soal_id = 185 THEN j.jawaban ELSE NULL END) AS 'C6',
            MAX(CASE WHEN j.soal_id = 186 THEN j.jawaban ELSE NULL END) AS 'C7',
            MAX(CASE WHEN j.soal_id = 187 THEN j.jawaban ELSE NULL END) AS 'C8',
            MAX(CASE WHEN j.soal_id = 188 THEN j.jawaban ELSE NULL END) AS 'C9',
            MAX(CASE WHEN j.soal_id = 189 THEN j.jawaban ELSE NULL END) AS 'C10',
            MAX(CASE WHEN j.soal_id = 190 THEN j.jawaban ELSE NULL END) AS 'C11',
            MAX(CASE WHEN j.soal_id = 191 THEN j.jawaban ELSE NULL END) AS 'C12',
            MAX(CASE WHEN j.soal_id = 192 THEN j.jawaban ELSE NULL END) AS 'C13'
        FROM
            t_jawaban_alumni j   
        JOIN
            t_responden_alumni r ON j.responden_alumni_id = r.responden_alumni_id
        GROUP BY
            r.responden_alumni_id, r.responden_nama, r.responden_prodi
    ) AS subquery
    GROUP BY
        prodi");

    return $result;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Perhitungan</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Custom CSS -->
  <style>
    .narrow-column {
      width: 10px; /* Atur sesuai kebutuhan Anda */
    }
    .wide-column {
      width: 240px; /* Atur sesuai kebutuhan Anda */
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <?php include_once('layouts/header.php'); ?>
  <?php include_once('layouts/sidebar.php'); ?>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perhitungan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Perhitungan</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="card">
        <div class="card-header"><b>Data Konversi</b></div>
        <div class="card-body">
          <table class="table table-sm table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Alternatif</th>
                <?php for ($i = 1; $i <= 13; $i++) { echo "<th>C$i</th>"; } ?>
              </tr>
            </thead>
            <tbody>
              <?php
              $data = dataolahan($db);
              if ($data->num_rows > 0) {
                $no = 1;
                while($row = $data->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>" . $no . "</td>";
                  echo "<td>" . htmlspecialchars($row['prodi']) . "</td>";
                  for ($i = 1; $i <= 13; $i++) {
                    echo "<td>" . htmlspecialchars($row["C$i"] ?? '') . "</td>";
                  }
                  echo "</tr>";
                  $no++;
                }
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>

      <div class="card">
        <div class="card-header"><b>Data Pengolahan</b></div>
        <div class="card-body">
          <table class="table table-sm table-bordered">
            <thead>
              <tr>
                <th>Prodi</th>
                <?php for ($i = 1; $i <= 13; $i++) { echo "<th>C$i</th>"; } ?>
              </tr>
            </thead>
            <tbody>
              <?php
              $data2 = dataolahan2($db);
              if ($data2->num_rows > 0) {
                while($row2 = $data2->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>" . htmlspecialchars($row2['prodi']) . "</td>";
                  for ($i = 1; $i <= 13; $i++) {
                    echo "<td>" . htmlspecialchars($row2["total_C$i"] ?? '') . "</td>";
                  }
                  echo "</tr>";
                }
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>

<div class="card">
        <div class="card-header"><b>Bobot Kriteria</b></div>
        <div class="card-body">
          <table class="table table-sm table-bordered">
            <thead>
              <tr>
                <?php for ($i = 1; $i <= 13; $i++) { echo "<th>C$i</th>"; } ?>
              </tr>
            </thead>
            <tbody>
              <?php
                $weights = array();
                $kriteria = array();
                $sql = 'SELECT id_criteria, weight, attribute FROM eda_criterias ORDER BY id_criteria';
                $result = $db->query($sql);

                if ($result->num_rows > 0) {
                  echo "<tr>";
                  while($row = $result->fetch_assoc()) {
                    $weights[$row['id_criteria']] = $row['weight'];
                    $kriteria[$row['id_criteria']] = $row['attribute'];
                    echo "<td>{$row['weight']}</td>";
                  }
                  echo "</tr>";
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>

      <div class="card">
    <div class="card-header"><b>Matriks Keputusan (X)</b></div>
    <div class="card-body">
        <table class="table table-sm table-bordered">
            <thead>
                <tr>
                    <th class="wide-column">Alternatif</th>
                    <?php for ($i = 1; $i <= 13; $i++) { echo "<th class='narrow-column'>C$i</th>"; } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $data3 = dataolahan3($db);
                $data = array();
                $alternatives = array();
                if ($data3->num_rows > 0) {
                    while($row3 = $data3->fetch_assoc()) {
                        $alternatives[] = $row3['prodi'];
                        echo "<tr>";
                        echo "<td class='wide-column'>" . htmlspecialchars($row3['prodi']) . "</td>";
                        for ($i = 1; $i <= 13; $i++) {
                            $formattedValue = isset($row3["total_C$i"]) ? number_format($row3["total_C$i"], 1, '.', '') : '';
                            echo "<td class='narrow-column'>" . htmlspecialchars($formattedValue) . "</td>";
                            if (!isset($data[$i])) {
                                $data[$i] = array();
                            }
                            $data[$i][] = isset($row3["total_C$i"]) ? (float)$row3["total_C$i"] : 0;
                        }
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='14'>Data tidak tersedia</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<div class="card">
    <div class="card-header"><b>Nilai Solusi Rata-Rata (AV)</b></div>
    <div class="card-body">
        <table class="table table-sm table-bordered">
            <thead>
                <tr>
                    <?php for ($i = 1; $i <= 13; $i++) { echo "<th>C$i</th>"; } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $AV = array();
                $jml_alternatif = count($alternatives);

                for ($i = 1; $i <= 13; $i++) {
                    $AV[$i] = array_sum($data[$i]) / $jml_alternatif;
                }

                echo "<tr>";
                foreach ($AV as $value) {
                    echo "<td>" . number_format($value, 2, '.', '') . "</td>";
                }
                echo "</tr>";
                ?>
            </tbody>
        </table>
    </div>
</div>

<div class="card">
    <div class="card-header"><b>Jarak Positif dari Solusi Rata-Rata (PDA)</b></div>
    <div class="card-body">
        <table class="table table-sm table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Alternatif</th>
                    <?php for ($i = 1; $i <= 13; $i++) { echo "<th>C$i</th>"; } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $PDA = array();
                for ($i = 0; $i < $jml_alternatif; $i++) {
                    $PDA[$i] = array();
                    for ($j = 1; $j <= 13; $j++) {
                        if ($AV[$j] != 0) {
                            if ($kriteria[$j] == 'benefit') {
                                $PDA[$i][$j] = max(0, ($data[$j][$i] - $AV[$j]) / $AV[$j]);
                            } else {
                                $PDA[$i][$j] = max(0, ($AV[$j] - $data[$j][$i]) / $AV[$j]);
                            }
                        } else {
                            $PDA[$i][$j] = 0;
                        }
                    }
                }

                foreach ($PDA as $i => $criteria) {
                    echo "<tr><td>" . ($i + 1) . "</td><td>{$alternatives[$i]}</td>";
                    for ($j = 1; $j <= 13; $j++) {
                        echo "<td>" . number_format($criteria[$j], 5) . "</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<div class="card">
    <div class="card-header"><b>Jarak Negatif dari Solusi Rata-Rata (NDA)</b></div>
    <div class="card-body">
        <table class="table table-sm table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Alternatif</th>
                    <?php for ($i = 1; $i <= 13; $i++) { echo "<th>C$i</th>"; } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $NDA = array();
                for ($i = 0; $i < $jml_alternatif; $i++) {
                    $NDA[$i] = array();
                    for ($j = 1; $j <= 13; $j++) {
                        if ($AV[$j] != 0) {
                            if ($kriteria[$j] == 'benefit') {
                                $NDA[$i][$j] = max(0, ($AV[$j] - $data[$j][$i]) / $AV[$j]);
                            } else {
                                $NDA[$i][$j] = max(0, ($data[$j][$i] - $AV[$j]) / $AV[$j]);
                            }
                        } else {
                            $NDA[$i][$j] = 0;
                        }
                    }
                }

                foreach ($NDA as $i => $criteria) {
                    echo "<tr><td>" . ($i + 1) . "</td><td>{$alternatives[$i]}</td>";
                    for ($j = 1; $j <= 13; $j++) {
                        echo "<td>" . number_format($criteria[$j], 5) . "</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<div class="card">
    <div class="card-header"><b>Jumlah Terbobot PDA/NDA (SP/SN)</b></div>
    <div class="card-body">
        <table class="table table-sm table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Alternatif</th>
                    <th>SP</th>
                    <th>SN</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $SP = array();
                $SN = array();
                for ($i = 0; $i < $jml_alternatif; $i++) {
                    $SP[$i] = 0;
                    $SN[$i] = 0;
                    for ($j = 1; $j <= 13; $j++) {
                        $SP[$i] += $weights[$j] * $PDA[$i][$j];
                        $SN[$i] += $weights[$j] * $NDA[$i][$j];
                    }
                }

                foreach ($SP as $i => $spValue) {
                    $spValueFormatted = number_format($spValue, 6);
                    $snValueFormatted = number_format($SN[$i], 6);
                    echo "<tr><td>" . ($i + 1) . "</td><td>{$alternatives[$i]}</td><td>$spValueFormatted</td><td>$snValueFormatted</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<div class="card">
    <div class="card-header"><b>Nilai Normalisasi SP/SN (NSP/NSN)</b></div>
    <div class="card-body">
        <table class="table table-sm table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Alternatif</th>
                    <th>NSP</th>
                    <th>NSN</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $NSP = array();
                $NSN = array();
                $maxSP = max($SP);
                $maxSN = max($SN);

                foreach ($SP as $i => $spValue) {
                    $NSP[$i] = $maxSP != 0 ? $spValue / $maxSP : 0;
                    $NSN[$i] = $maxSN != 0 ? 1 - ($SN[$i] / $maxSN) : 0;

                    $nspValueFormatted = number_format($NSP[$i], 6);
                    $nsnValueFormatted = number_format($NSN[$i], 6);
                    echo "<tr><td>" . ($i + 1) . "</td><td>{$alternatives[$i]}</td><td>$nspValueFormatted</td><td>$nsnValueFormatted</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<div class="card">
    <div class="card-header"><b>Nilai Skor Penilaian (AS)</b></div>
    <div class="card-body">
        <table class="table table-sm table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Alternatif</th>
                    <th>AS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $AS = array();

                foreach ($alternatives as $i => $name) {
                    $AS[$i] = ($NSP[$i] + $NSN[$i]) / 2;
                    $asValueFormatted = number_format($AS[$i], 6);
                    echo "<tr><td>" . ($i + 1) . "</td><td>$name</td><td>$asValueFormatted</td></tr>";
                }

                // Simpan hasil perhitungan ke dalam sesi
                $_SESSION['AS'] = $AS;
                $_SESSION['alternatives'] = $alternatives;
                ?>
            </tbody>
        </table>
    </div>
</div>

</section>
  </div>

  <?php include_once('layouts/footer.php'); ?>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>

</body>
</html>

    </section>
  </div>

  <?php include_once('layouts/footer.php'); ?>
</div>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>