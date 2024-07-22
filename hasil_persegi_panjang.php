<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Persegi Panjang</title>
</head>

<body>

    <?php
        function luas($p, $l)
        {
            $luas = $p * $l;
            return $luas;
        }

        function keliling($p, $l)
        {
            $keliling = 2 * $p +  $l;
            return $keliling;
        }
    ?>

    <?php 
        $Panjang = $_POST["Panjang"];
        $Lebar = $_POST["Lebar"];

        $luas = luas($Panjang, $Lebar);
        $keliling = keliling($Panjang, $Lebar);
    ?>

    <h3>Luas Persegi Panjang dengan panjang <?= $Panjang ?> dan lebar <?= $Lebar ?> adalah <?= $luas ?> </h3>
    <h3>Keliling Persegi Panjang dengan panjang <?= $Panjang ?> dan lebar <?= $Lebar ?> adalah <?= $keliling ?> </h3>
</body>
</html>