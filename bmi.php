<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>

</head>

<body>
    
        <a href="index.php">Home</a>
        <a href="bmi.php">Perhitungan BMI</a>
        <a href="bangun_segitiga.php">Perhitungan Bangun Segitiga</a>
        <a href="bangun_lingkaran.php">Lingkaran</a>
           

    <form action="hasil_bmi.php" method="POST">
        <div>
            <label for="nama">Masukkan Nama : </label><br>
            <input type="text" id="nama" name="nama"><br>
        </div>

        <div>
            <label for="tinggi">Masukkan Tinggi(Cm) : </label><br>
            <input type="number" id="tinggi" name="tinggi"><br>
        </div>

        <div>
            <label for="berat">Masukkan Berat(Kg) : </label><br>
            <input type="number" id="berat" name="berat"><br>
        </div>

        <input type="submit" value="Kirim">

    </form>






</body>
</html>