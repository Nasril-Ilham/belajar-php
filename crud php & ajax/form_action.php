<?php

session_start();

include('koneksi_ajax.php');
include 'csrf.php';


$id_anggota = stripcslashes(strip_tags(htmlspecialchars($_POST['id_anggota'] ?? '', ENT_QUOTES)));

$nama = stripcslashes(strip_tags(htmlspecialchars($_POST['nama'] ?? '', ENT_QUOTES)));

$jenis_kelamin = stripcslashes(strip_tags(htmlspecialchars($_POST['jenis_kelamin'] ?? '', ENT_QUOTES)));

$alamat = stripcslashes(strip_tags(htmlspecialchars($_POST['alamat'] ?? '', ENT_QUOTES)));

$no_telp = stripcslashes(strip_tags(htmlspecialchars($_POST['no_telp'] ?? '', ENT_QUOTES)));




if($id_anggota == ""){
    $query = " INSERT INTO anggota(nama,jenis_kelamin,alamat,no_telp) VALUES (?,?,?,?)";
    $sql = $db1->prepare($query);
    $sql -> bind_param("ssss",$nama,$jenis_kelamin,$alamat,$no_telp);
    $sql -> execute();
}else{
  $query = " UPDATE anggota SET nama=?, jenis_kelamin=? ,alamat=?, no_telp=? WHERE id_anggota=?";
  $sql = $db1->prepare($query);
  // sssss : ikut dari berapa variable kalai varchar : s & int : i
  $sql -> bind_param("ssssi",$nama,$jenis_kelamin,$alamat,$no_telp,$id_anggota);
  $sql -> execute();
}


echo json_encode(['success' => 'sukses']);

$db1 ->close();