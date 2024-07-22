<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Bangun Persegi Panjang</title>
</head>

<body>
    <a href="index.php">Home</a>
    <a href="bmi.php">Perhitungan BMI</a>
    <a href="bangun_segitiga.php">Segitiga</a>
    <a href="bangun_lingkaran.php">Lingkaran</a>
    <a href="bangun_persegi_panjang.php">Persegi Panjang</a>
    <a href="bangun_persegi.php">Persegi</a>

    <form action="hasil_persegi_panjang.php" method="post">
        <div>
            <label for="Panjang">Masukkan Panjang (cm)</label>
            <input type="number" name="Panjang">
        </div>

        <div>
            <label for="Lebar">Masukkan Lebar (cm)</label>
            <input type="number" name="Lebar">
        </div>

        <input type="submit" value="kirim">
    </form>
</body>
</html>