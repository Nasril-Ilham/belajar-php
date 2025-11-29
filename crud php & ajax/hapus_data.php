<?php

session_start();
include('koneksi_ajax.php');
include 'scrf.php';

if (!isset($db1) || $db1->connect_error) {
    echo json_encode(['error' => 'Koneksi database gagal.']);
    exit;
}

$id_anggota = $_POST['id_anggota'];

$query = " DELETE FROM anggota WHERE id_anggota=?";
$sql = $db1->prepare($query);
$sql->bind_param('i',$id_anggota);
$sql-> execute();

echo json_encode(['succes' => 'sukses']);

$sql->close();
$db1->close();
?>