<?php

if(isset($_POST["beli_novel"]) && isset($_POST["beli_buku"])){
    setcookie("beli_novel", $_POST["beli_novel"]);
     setcookie("beli_buku", $_POST["beli_buku"]);
     header("Location: keranjang_belanja.php");
}
?>

<!-- belajar cookies code 2 -->