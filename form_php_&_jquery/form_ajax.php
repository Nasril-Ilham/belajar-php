<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form lanjutan</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

</head>
<body>
    <h2>form menggunakan ajax</h2>
    <form id="myform" >

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
    </form>

    <div id="result" style="margin-top:20px; text-align:center;">
      <!-- // hasil akan ditampilkan disini, hasil dari form dan ajax --> 
    </div>

   <script>

$(document).ready(function(){ // fungsi jquery agar kode di dalamnya berjalan setelah dokumen siap

  $("#myform").submit(function(e){  // event ketika form di submit , (e) adalah event object 
 
    e.preventDefault();  // mencegah form di submit secara default

    // ambil data dari form
    var formData = $("#myform").serialize(); //serialize() berfungsi mengubah data form menjadi format yang dapat dikirim ke server = form_lanjutan.php.

    // kirim data menggunakan ajax ke server php atau tempat pemrosesan data contohnya form_lanjutan.php 
    // karna di sana ada kode php untuk memproses data dari form 
    // dan ajax disini cuma mengirihkan data kesana dan hasilnya ditangkap dan ditampilkan di halaman ini setelah di proses di form_lanjutan.php

    $.ajax({
  
      url : "form_lanjutan.php",  // alamat file php yang akan memproses data atau 
      type: "POST",           // metode pengiriman data
      data : formData,       // data yang akan dikirim ke server

      success: function(respon){  // fungsi yang akan dijalankan jika pengiriman berhasil

          // tampilkan hasil dari server di div result
          $("#result").html(respon);
      }
    });
  });
});
</script>


</body>
</html>
