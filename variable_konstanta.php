<?php

$angka1 = 10;
$angka2 = 5 ;
$hasil = $angka1 + $angka2;

echo "hasil dari penjumlahan $angka1 dan $angka2 adalah $hasil.";

echo "<hr>";

 $benar = true ;
 $salah = false ;

 echo"varibale benar: $benar, varibale salah : $salah ";

 echo "<hr>";


 // mendefisinikan konstanta untuk nilai tetap
 
 define("NAMA_SITUS","WebsiteKu.com");
 define("TAHUN_PENDIRIAN",2023);

 echo"selamat datang di " . NAMA_SITUS . ", situs yang di dirikan pada tahun" . TAHUN_PENDIRIAN . ".";

?>