<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB1', 'praktikumdb'); // Jangan lupa titik koma!

// BUAT KONEKSINYA
$db1 = new mysqli(HOST, USER, PASS, DB1);

// Opsional: Pengecekan koneksi untuk menampilkan pesan error jika gagal
if ($db1->connect_error) {
    die("Koneksi gagal: " . $db1->connect_error);
}

// Catatan: Variabel koneksi yang Anda buat adalah $db1, bukan $dbl. 
// Pastikan konsisten dalam menggunakan $db1 di seluruh aplikasi Anda.
?>