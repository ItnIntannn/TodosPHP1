<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Bangun Keliling</title>
</head>
<body>
    <?php
        function luas($jr)
        {
           $luas = 3.14 * $jr * $jr;
           return $luas; 
        }

        function keliling($jr)
        {
            $keliling = 2 * 3.14 * $jr;
            return $keliling;
        }
    ?>

    <?php

        $jari = $_POST["Jari"];
        $luas = luas ($jari);

        $jari = $_POST["Jari"];
        $keliling = keliling ($jari);

    ?>

    <h3>Hasil luas lingkaran dengan jari-jari <?= $jari ?> adalah <?= $luas ?> </h3>
    <h3>Hasil keliling lingkaran dengan jari-jari <?= $jari ?> adalah <?= $keliling ?> </h3>
</body>
</html>