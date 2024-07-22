<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Bangun Persegi</title>
</head>

<body>
    <a href="index.php">Home</a>
    <a href="bmi.php">Perhitungan BMI</a>
    <a href="bangun_segitiga.php">Segitiga</a>
    <a href="bangun_lingkaran.php">Lingkaran</a>
    <a href="bangun_persegi_panjang.php">Persegi Panjang</a>

    <form action="hasil_persegi.php" method="post">
        <div>
            <label for="Sisi">Masukkan Sisi (cm) </label>
            <input type="number" name="Sisi">
        </div>

        <input type="submit" value="kirim">
    </form>
    
</body>
</html>