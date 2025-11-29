<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form input dengan Validasi</h1>

    <form action="form_validasi.php" method="POST" >
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama =$_POST['nama'];
    $email =$_POST['email'];
    $errors =array();

    // Validasi Nama
    if (empty($nama)) {
        $errors[] = "Nama tidak boleh kosong.";
    }

    // Validasi Email
    if (empty($email)) {
        $errors[] = "Email tidak boleh kosong.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }
    
     //jik ada kesalahan validasi
    // ...
if (!empty($errors)) { // ⬅️ Ini adalah kondisi yang benar (jika errors TIDAK kosong)
    foreach($errors as $error) { // ⬅️ Tanda kurung dan tanda seru dihilangkan
        echo "<p style='color:red;'>$error</p>";
    } // ⬅️ Tidak perlu });
} else {
        echo "<h2>Data yang Dikirim:</h2>";
        echo "Nama: " . htmlspecialchars($nama) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
    }
}

    ?>
</body>
</html>