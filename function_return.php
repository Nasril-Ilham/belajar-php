<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function return</title>
</head>
<body>
    <?php

    // function return

function hitungumur($tahun_lahir , $tahun_sekarang) {
    $umur = $tahun_sekarang - $tahun_lahir ;
    return $umur;
    
}

// memanggil function menggunakan echo

echo "umur saya adalah: ". hitungumur(2005,2025) . " tahun <br>";

// ----------------------------------------------------------

echo "<br>";

function perkenalan($nama ,$salam = "assalamualkum"){
    echo "$salam <br>";
    echo "perkenalkhan nama saya : .$nama. <br>";
    echo "senang berkenalan dengan anda <br>";


    // memanggil funsi lain dalam fungsi
    echo "umur saya adalah: ". hitungumur(2005,2025) . " tahun <br>";
    echo "senang berkenlan dengan anda<br>";

}

perkenalan("elok");

    ?>
</body>
</html>