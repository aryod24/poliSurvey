<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POLISURVEI</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('asset/Poltek.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }

        .container {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: rgba(0, 0, 0, 0.35); /* Optional: to add a dark overlay */
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(68, 91, 153, 1); /* Semi-transparent background */
            color: #fff;
            padding: 5px 20px;
        }

        header .logo {
            font-size: 1.5em;
            font-weight: bold;
        }

        header .foto {
            width: 30px;
        }

        header .tes {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        header .profile {
            display: flex;
            gap: 15px;
        }

        header .profile a,
        header .profile span {
            text-decoration: none;
            color: white;
            cursor: pointer;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background 0.3s, color 0.3s;
        }

        header .profile .active {
            background: #fff;
            color: black;
        }

        header .profile a:hover,
        header .profile span:hover {
            background: #1452a6;
            color: white;
        }

        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }

        .survey-section {
            background: rgba(250, 250, 250, 0.9); /* Semi-transparent background */
            padding: 8px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 75%;
            max-width: 920px;
            color: #1a3d7c;
        }

        .survey-header h2 {
            margin: 0 0 10px;
            font-size: 1.5em;
        }

        .survey-title {
            font-size: 2.5em;
            margin-bottom: 5px;            
            margin-top: -10px; /* Adjust the value as needed */
            text-align: center;
            font-weight: bold;
        }

        .survey-options {
            display: flex;
            justify-content: space-around;
            gap: 20px;
            flex-wrap: nowrap;
        }

        .survey-options .option {
            background: #f4f4f4;
            border: 1px solid #ccc;
            border-radius: 10px;
            text-decoration: none;
            padding: 20px;
            width: 200px;
            text-align: center;
            transition: background 0.3s, border-color 0.3s;
            flex-shrink: 0;
        }

        .survey-options .option:hover {
            background: #e0e0e0;
            border-color: #1452a6;
        }

        .survey-options .option img {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
            object-fit: contain; /* To ensure aspect ratio is maintained */
        }

        .survey-options .option .title {
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .survey-options .option .button {
            background: #445B99;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
            transition: background 0.3s;
        }

        .survey-options .option .button:hover {
            background: #1452a6;
        }

        footer {
            background: rgba(68, 91, 153, 1); /* Semi-transparent background */
            color: #fff;
            text-align: center;
            padding: 10px;
        }

    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="tes">
                <img src="asset/polinema.png" class="foto" alt="polinema">
                <div class="logo">POLISURVEI</div>
            </div>
        </header>
        
        <main>
            <div class="survey-title">
            Survei Kepuasan Pelanggan <br> Politeknik Negeri Malang Tahun 2024
            </div>
            <div class="survey-section">
                <div class="survey-header">
                    <h2>Login Sebagai...</h2>
                </div>
                <div class="survey-options">
                    <div class="option">
                        <img src="asset/mahasiswa1.png" alt="mahasiswa">
                        <div class="title">Mahasiswa</div>
                        <a href="formMahasiswa/index.php" class="button">Lakukan Survei</a>
                    </div>
                    <div class="option">
                        <img src="asset/dosen.png" alt="dosen">
                        <div class="title">Dosen</div>
                        <a href="formDosen/index.php" class="button">Lakukan Survei</a>
                    </div>
                    <div class="option">
                        <img src="asset/tendik.png" alt="tendik">
                        <div class="title">Tenaga Kependidikan</div>
                        <a href="formTendik/index.php" class="button">Lakukan Survei</a>
                    </div>
                </div>
                <br>
                <div class="survey-options">
                    <div class="option">
                        <img src="asset/alumni.png" alt="alumni">
                        <div class="title">Alumni</div>
                        <a href="formAlumni/index.php" class="button">Lakukan Survei</a>
                    </div>
                    <div class="option">
                        <img src="asset/ortu.png" alt="ortu">
                        <div class="title">Orang Tua/Wali</div>
                        <a href="formOrtu/index.php" class="button">Lakukan Survei</a>
                    </div>
                    <div class="option">
                        <img src="asset/industri.png" alt="industri">
                        <div class="title">Industri</div>
                        <a href="formIndustri/index.php" class="button">Lakukan Survei</a>
                    </div>
                </div>
            </div>
        </main>
        <footer>
        <span> <b> Copyright &copy; 2024 Politeknik Negeri Malang Kelompok 1</b></span>
        </footer>
    </div>
</body>
</html>
