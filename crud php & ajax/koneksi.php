<?php

$connect = mysqli_connect("localhost","root","","praktikumdb");

// periksa koneksi terhubungan atau tidak
if(mysqli_connect_errno()){
    die("koneksi database tidak terhubung " . mysqli_connect_errno());
}
// else{
//     echo "koneksi berhasil";
// }

// Pastikan file ini tidak bisa diakses langsung lewat browser

?>