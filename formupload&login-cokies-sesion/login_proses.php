
    <?php
    
    include "koneksi.php";

    $username= $_POST["username"];
    $password= ($_POST["password"]);

    //  $password=md5 ($_POST["password"]); jika menggunakan md5 maka tidak bisa karna inputan kita bukan hash tapi string biasa
     // md5 = fungsi hash kriptografi yang digunakan 
     // terutama untuk memastikan integritas data dan keamanan password.

    // Perhatikan perubahan tanda kutip ganda di dalam query menjadi tanda kutip tunggal
     $query ="SELECT * FROM user1 WHERE username='$username' and password='$password'";
     $result = mysqli_query($connect, $query);
     $cek = mysqli_num_rows($result);

     // mysqli_num_rows :

    if($cek){
    // Gabungkan string PHP dengan HTML
    echo "Anda berhasil login. silahkan menuju "; ?>
    <a href='homeAdmin.html'>Halaman HOME</a>; <?php
    } else {
    // Gabungkan string PHP dengan HTML
    echo "Anda gagal login. silahkan "; ?>
     "<a href='login_proses.html'>Login kembali</a>"; <?php
    
    // Cetak error database
    echo mysqli_error($connect);
     }

     ?>

     <!-- code diatas menggamil dari login_proses.html dengan action file ini  -->