<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form lanjutan</title>

</head>
<body>
    <form method="post" action="form_lanjutan.php">

      <label for="buah">pilih buah kesukaan:</label><br>
      <select name="buah" id="buah">
        <option value="apel">apel</option>
        <option value="jeruk">jeruk</option>
        <option value="mangga">mangga</option>
        <option value="semangka">semangka</option>
      </select>

        <br><br>

        <label for="warna">pilih warna kesukaan:</label><br>
        <input type="checkbox" name="warna[]" id="" value="merah">merah<br>
        <input type="checkbox" name="warna[]" id="" value="biru">biru<br>
        <input type="checkbox" name="warna[]" id="" value="hijau">hijau<br>

        <br><br>

        <label for="jenis_kelamin">jenis kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" id="" value="laki-laki">laki-laki<br>
        <input type="radio" name="jenis_kelamin" id="" value="perempuan">perempuan<br>

        <br><br>
        <input type="submit" value="kirim">
    </form> -->

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $select_buah = $_POST["buah"]; // select selalu memiliki nilai jika dipilih
    

     if (isset($_POST["warna"])){ // cek apakah ada checkbox yang dipilih
        $select_warna = $_POST["warna"];
     }else {
        $select_warna = []; // inisialisasi array kosong jika tidak ada warna yang dipilih
     }
 
     $select_jenis_kelamin = $_POST["jenis_kelamin"]; // radio button selalu memiliki nilai jika dipilih

     echo "buah kesukaan anda: " . $select_buah . "<br>";

     if(!empty($select_warna)){
        echo "warna kesukaan anda: " . implode(", ", $select_warna) . "<br>";
     } else {
        echo "anda tidak memilih warna kesukaan<br>";
     }

        echo "jenis kelamin anda: " . $select_jenis_kelamin . "<br>";
  
    }
    ?>
<!-- </body>
</html> -->