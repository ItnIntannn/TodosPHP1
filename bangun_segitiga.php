<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Bangun Ruang Segitiga</title>
</head>

<body>

    <a href="index.php">Home</a>
    <a href="bmi.php">Perhitungan BMI</a>
    <a href="bangun_segitiga.php">Perhitungan Bangun Segitiga</a>
    <a href="bangun_lingkaran.php">Lingkaran</a>
    <a href="bangun_persegi_panjang.php">Persegi Panjang</a>
    <a href="bangun_persegi.php">Persegi</a>
    
    <form action="hasil_bangun_segitiga.php" method="post">
        <div>
            <label for="Tinggi">Masukkan Tinggi (cm)</label>
            <input type="number" name="Tinggi">
        </div>

        <div>
            <label for="Alas">Masukkan Alas (cm)</label>
            <input type="number" name="Alas">
        </div>

        <div>
            <label for="Sisi1">Masukkan Sisi 1 (cm)</label>
            <input type="number" name="Sisi1">
        </div>

        <div>
            <label for="Sisi2">Masukkan Sisi 2 (cm)</label>
            <input type="number" name="Sisi2">
        </div>
        
        <input type="submit" value="kirim">
    </form>

</body>
</html>