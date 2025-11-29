<?php

include("koneksi.php");
// rawan undifind kata ai kenapa ?? tidak tau
$aksi = $_GET['aksi'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_tlp = $_POST['no_telp'];


// logika untuk menambahkan data / create

if ($aksi == 'tambah') {
    // jika tipe data pada db varchar atau string gunakan '' pada values 
      $query = "INSERT INTO anggota(nama, jenis_kelamin, alamat, no_telp) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_tlp')";

    if (mysqli_query($connect, $query)) {
        header("location: index.php");
        exit();
    }else{
        echo "gagal menambahkan data " . mysqli_error($connect);
    }

    //logika untuk mengupdate
}elseif ($aksi == 'update') {
   if(isset($_POST['id_anggota'])){
    $id_anggota = $_POST['id_anggota'];

    $query = "UPDATE anggota SET nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_telp='$no_tlp' where id_anggota=$id_anggota";

    if (mysqli_query($connect, $query)) {
        header("location: index.php");
        exit();
    }else{
        echo "gagal mengupdate data " . mysqli_error($connect);
    }
   }else{
    echo "id tidak valid";
   }

}elseif($aksi == 'hapus'){
    if(isset($_GET['id_anggota'])){
        $id_anggota = $_GET['id_anggota'];

        $query = "DELETE  FROM anggota WHERE id_anggota = $id_anggota";

        if(mysqli_query($connect, $query)){
            header("location: index.php");
            exit();
        }else{
            echo "gagal menghapus data " . mysqli_error($connect);
        }
    }else{
        echo "id tidak valid ";
    }

}else{
    header("location; index.php");
}

mysqli_close($connect);


?>
