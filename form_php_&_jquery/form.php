<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form input php</title>
</head>
<body>
    <h2>Form Input PHP</h2>
    <Form action="form.php" method="POST">
       <lavbel for="nama">Nama :</label>
       <input type="text" name="nama" id="nama" placeholder="masukan nama anda" required><br><br>

         <lavbel for="email">Email :</label>
         <input type="email" name="email" id="email" placeholder="masukan email anda" required><br><br>
         <input type="submit" name="submit" value="Kirim">
    </Form>

    <?php

    // Memeriksa apakah form telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama =$_POST['nama'];
        $email =$_POST['email'];

        //jika di isi form maka akan di proses dan di tampilkan

        // Menampilkan data yang dikirim dari form
        echo "<h3>Data yang Dikirim:</h3>";
        echo "Nama: " . $nama . "<br>";
        echo "Email: " . $email . "<br>";
    }
    ?>
</body>
</html>