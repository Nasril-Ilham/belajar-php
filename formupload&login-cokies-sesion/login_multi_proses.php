<?php
include "koneksi.php";

    $username= $_POST["username"];
    $password= ($_POST["password"]);

    $query ="SELECT * FROM user1 WHERE username='$username' and password='$password'";
     $result = mysqli_query($connect, $query);
     $row = mysqli_fetch_assoc($result);


     if($row['LEVEL'] == '1'){
        echo " anda berhasil login. silakan meunuju" ; ?>
        <a href='homeAdmin.html'>Halaman HOME</a>; <?php
     }else if($row['LEVEL'] == '2'){
         echo " anda berhasil login. silakan meunuju" ; ?>
        <a href='homeGuest.html'>Halaman HOME</a>; <?php
     }else {
    // Gabungkan string PHP dengan HTML
    echo "Anda gagal login. silahkan "; ?>
     "<a href='login_proses.html'>Login kembali</a>"; <?php
    
    // Cetak error database
    echo mysqli_error($connect);
     }
?>