<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form input php</title>
</head>
<body>
    <h2>Form Input PHP self</h2>

    <?php

    $namaErr= "";
    $nama ="";

    // cek apakah form telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // validasi input namaErr apakah kosong
        if (empty($_POST["nama"])) {
            $namaErr = "Nama is required";
        } else {
            $nama =$_POST["nama"];
            echo "data berhasil di kirim dan di simpan<br>";
        }
    }

    ?>

    <Form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
       <lavbel for="nama">Nama :</label>
       <input type="text" name="nama" id="nama" value="<?php echo $nama;?>" placeholder="masukan nama anda" required>
       <span class="error" >* <?php echo $namaErr;?></span><br><br>

         <input type="submit" name="submit" value="submit">
    </Form>

    <!-- noted atau catatan -->

    <!--  yang terhubung dengan $_POST["nama"] itu adalah input dengan name="nama" bukan id="nama" -->
      <!-- jadi name="nama" harus sama dengan $_POST["nama"] dan jika pasword maka harus sama dengan $_POST["password"] name="password" -->
       <!--  dan yang lainya juga  -->


    <!-- untuk submit juga harus sama dengan $_POST["submit"] name="submit" -->
     <!-- kenapa name bukan id karna name yang dikirimkan ke server saat submit form adalah nilai dari atribut name, bukan id -->
      <!-- sedangkan id hanya digunakan untuk keperluan styling dan scripting -->
</body>
</html>