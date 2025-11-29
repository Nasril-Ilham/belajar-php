<?php

include "koneksi_session.php";

 $username= $_POST["username"];
 $password= $_POST["password"];

 $query ="SELECT * FROM user1 WHERE username='$username' and password='$password'";
     $result = mysqli_query($connect, $query);
     $cek = mysqli_num_rows($result);


if($cek > 0){
     session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
    ?>
    <p>anda berhasil silakan menuju</p>
    <a href="homesession.php">halaman session</a>
    <?php
}else{
   ?>
   <p>anda gagal login, silahkan login lagi</p>
   <a href="sessionlogin.html"></a>
   <?php
   echo mysqli_error($connect);
}

?>
  
