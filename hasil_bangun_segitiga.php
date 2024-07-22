<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Bangun Segitiga</title>

</head>

<body>
    <?php

        function luas($t, $a)
        {
            $luas = 0.5 * $t * $a;
            return $luas;
        }

        function keliling($s1, $s2, $a)
        {
            $keliling = $s1 + $s2 + $a;
            return $keliling;
        }
    ?>

    <?php
        $tinggi = $_POST["Tinggi"];
        $alas = $_POST["Alas"];
        $sisi1 = $_POST["Sisi1"];
        $sisi2 = $_POST["Sisi2"];

        $luas = luas($tinggi, $alas);
        $keliling = keliling($alas, $sisi1, $sisi2)
    ?>

    <h3>Luas segitiga dengan tinggi <?= $tinggi ?> dan panjang alas <?= $alas ?> adalah <?= $luas ?> </h3>
    <h3>Keliling segitiga dengan alas <?= $alas ?> , sisi a <?= $sisi1 ?> dan sisi b <?= $sisi2 ?> adalah <?= $keliling ?></h3>
</body>
</html>