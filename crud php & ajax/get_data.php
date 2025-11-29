<?php
// get_data.php (Mengambil satu data anggota berdasarkan ID)

session_start();

include('koneksi_ajax.php');
include 'csrf.php';

// Pastikan koneksi berhasil (asumsi $db1 dari koneksi_ajax.php)
if (!isset($db1) || $db1->connect_error) {
    echo json_encode(['error' => 'Koneksi database gagal.']);
    exit;
}

// 1. Perbaikan: Menggunakan Null Coalescing Operator untuk menghindari Warning
$id_anggota = $_POST['id_anggota'] ?? '';

// Cek ID kosong
if (empty($id_anggota)) {
    echo json_encode(['error' => 'ID Anggota kosong.']);
    exit;
}

// Mendefinisikan Query
$query = "SELECT id_anggota, nama, jenis_kelamin, alamat, no_telp FROM anggota WHERE id_anggota=?";
$sql = $db1->prepare($query);

// 2. Perbaikan: Hanya satu panggilan bind_param() yang benar
// 'i' = integer (untuk id_anggota)
$sql->bind_param('i', $id_anggota); 

$sql->execute();

// 3. Perbaikan: Perbaikan sintaks assignment (ganti -> menjadi =)
$result = $sql->get_result(); 

$h = []; // Inisialisasi array

// Karena ID unik, kita hanya perlu fetch satu baris
if ($row = $result->fetch_assoc()){
    $h['id_anggota'] = htmlspecialchars($row["id_anggota"]);
    $h['nama'] = htmlspecialchars($row["nama"]);
    $h['jenis_kelamin'] = htmlspecialchars($row["jenis_kelamin"]);
    $h['alamat'] = htmlspecialchars($row["alamat"]);
    $h['no_telp'] = htmlspecialchars($row["no_telp"]);
} else {
    $h['error'] = 'Data tidak ditemukan.';
}

echo json_encode($h);

$sql->close();
$db1->close();
?>