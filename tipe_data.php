<?php

$a = 10;
$b = 5 ;
$c = $a + 5 ;
$d = $b + (10 * 5);
$e = $d - $c;

echo " variable a: {$a} <br>";
echo " variable a: {$b} <br>";
echo " variable a: {$c} <br>";
echo " variable a: {$d} <br>";
echo " variable a: {$e} <br>";

echo "<br>";
//digunakan untuk menampilkan informasi terperinci tentang satu atau lebih
//variabel, seperti tipe data, nilai, dan struktur datanya
var_dump($e);

echo "<hr>";

$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

$rata_rata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

echo " matematika : {$nilaiMatematika} <br>";
echo " IPA : {$nilaiIPA} <br>";
echo " Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo " rata - rata : {$rata_rata} <br>";

var_dump($rata_rata);

echo "<hr>";

$apakahSiswaLulus = true ;
$apakahSiswaSudahUjian = false;

var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);

echo "<hr>";

$namaDepan = "ibnu";
$namaBelakang = "jakaria";

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . " " . $namaBelakang;

echo "Nama Depan: {$namaDepan} <br>";
echo 'Nama Belakang: ' . $namaBelakang . '<br>';

echo $namaLengkap;
echo "<br>";
echo $namaLengkap2;

echo "<hr>";

$listMahasiswa =["wahid abdullah","elmo bachtiar","lendis febri"];
echo $listMahasiswa[0];

?>