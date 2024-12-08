<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POLISURVEI</title>
    <style>
        body {
            margin: 0;
            background-image: url('https://siprokmrk.polinema.ac.id/assets/img/gedung-sipil.jpg'); /* URL gambar sebagai background */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif; /* Matching font-family */
        }

        .container {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: rgba(0, 0, 0, 0.5); /* Optional: to add a dark overlay */
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(68, 91, 153, 0.8); /* Semi-transparent background */
            color: #fff;
            padding: 5px 20px;
        }

        header .logo {
            font-size: 1.5em; /* Matching font-size */
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

        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }

        .Survey-section {
            background: rgba(250, 250, 250, 0.9); /* Semi-transparent background */
            padding: 10px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 75%;
            max-width: 500px;
            color: #1a3d7c;
        }
        
        .btn-logout {
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #1452a6;
            border: none;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-bottom: 10px; /* Reduced margin-bottom */
        }

        .btn-logout:hover {
            background-color: #0d3a85;
        }

        footer {
            background: rgba(68, 91, 153, 0.8); /* Semi-transparent background */
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
            <div class="Survey-section">
                <div class="Survey-header">
                    <h1>Terima Kasih!</h1>
                    <p>Terima kasih telah mengisi Survei Kepuasan Pelanggan Politeknik Negeri Malang Tahun 2024. Jawaban Anda sangat berarti bagi kami dan akan membantu Politeknik Negeri Malang dalam meningkatkan kualitas layanan.</p>
                    <form action="../login.php" method="post">
                        <button type="submit" class="btn-logout">Logout</button>
                    </form>
                </div>
            </div>
        </main>
        <footer>
            <span> <b> Copyright &copy; 2024 Politeknik Negeri Malang Kelompok 1</b></span>
        </footer>
    </div>
</body>
</html>
