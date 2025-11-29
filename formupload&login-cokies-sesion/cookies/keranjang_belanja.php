<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>keranjang belanja</title>
</head>
<body>
    <h2>keranjang belanja</h2>

    <?php

    $beli_novel = $_COOKIE['beli_novel'];
    $beli_buku = $_COOKIE['beli_buku'];

    echo "jumalah novel: $beli_novel"; 
    echo "<br>";
    echo "jumlah buku: $beli_buku";

    ?>
</body>
</html>

<!-- belajar cookies code 3 -->