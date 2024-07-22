<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil BMI</title>

</head>

<body>

    <?php
        $nama = $_POST["nama"];
        $tinggi = $_POST["tinggi"];
        $berat = $_POST["berat"];

        $bmi = $berat / ( $tinggi * $tinggi );
    ?>

    <h3>Nilai BMI Kamu adalah : <h?= $bmi; ?></h3>

    <?php
        $hasil = "";
        
        if($bmi < 18.5) {
            $hasil = "Berat badan kurang";
        }
        else if($bmi < 22.9) {
            $hasil = "Berat badan normal";
        }
        else if($bmi < 29.9) {
            $hasil = "Berat badan berlebih (Kecenderungan obesitas) ";
        }
        else {
            $hasil = "Obesitas";
        }
    ?>

    <p>Standar kategori berat badan pria dan wanita menurut WHO : <?= $hasil ?> </p>


    
</body>
</html>