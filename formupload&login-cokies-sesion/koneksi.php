<?php

// koneksi ke database
$connect = mysqli_connect("localhost","root","","praktikumdb");

// memriksa koneksi apakah sudah terhubung atau tidak 
if(mysqli_connect_errno()){
    die("koneksi ke database gagal:" . mysqli_connect_error());
}

?>

<!-- noted -->

<!-- 

mysqli_connect adalah sebuah fungsi dalam bahasa 
pemrograman PHP yang digunakan untuk membuat koneksi antara
skrip PHP Anda dengan database MySQLi (MySQL Improved Extension).

memerlukan empat parameter dasar (argumen) 
yang mendefinisikan detail server database

contoh:
$koneksi = mysqli_connect(host, username, password, database_name);

-->