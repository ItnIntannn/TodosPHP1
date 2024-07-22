<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 php</title>

    <style>
        span {
            width: 180px;
            display: inline-block;           
        }

        p {
          font-family: 'Times New Roman', Times, serif;
        }


    </style>
</head>
<body>
    
    <a href="index.php">Home</a>
    <a href="bmi.php">Perhitungan BMI</a>
    <a href="bangun_segitiga.php">Segitiga</a>
    <a href="bangun_lingkaran.php">Lingkaran</a>
    <a href="bangun_persegi_panjang.php">Persegi Panjang</a>
    <a href="bangun_persegi.php">Persegi</a>


    <?php
        $judul = "BIODATA SAYA";
        $nama = "Intan Nuraini";
        $alamat = "Jl.Singosari No.108 Ds.Sidokare Kab.Nganjuk";
        $kelas = "Infomatika 2";
        $citacita = "Jodohnya Rn";
        $motivasi = "Semua";
        $jk = "Perempuan";

        echo "<h1 style = 'text-align : center'>$judul</h1>";
        echo "<p><span>Nama</span> : $nama </p>";
        echo "<p><span>Alamat</span> : $alamat </p>";
        echo "<p><span>Kelas</span> : $kelas </p>";
        echo "<p><span>Cita-cita</span> : $citacita </p>";
        echo "<p><span>Motivasi</span> : $motivasi </p>";
        echo "<p><span>Jenis Kelamin</span> : $jk </p>";

    ?>


</body>
</html>