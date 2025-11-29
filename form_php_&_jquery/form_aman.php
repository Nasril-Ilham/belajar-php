<?php

// di bawah ini adalah contoh dari sanitasi saja tidak ada validasi 


// ?? : digunakan untuk mengecek apakah variabel ada atau tidak, 
// jika tidak ada maka akan memberikan nilai default
// " " : string kosong setelah tanda ?? akan digunakan sebagai nilai default jika $_POST['input'] tidak ada

// jika "" diisi maka input akan ada contoh " nasril " ini tidak di perukan karna kita meninputkan dari form bukan kita beri sendiri

$input = $_POST['input'] ?? '' ; 

// htmlspecialchars : digunakan untuk mengonversi karakter khusus menjadi entitas HTML
// sehingga mencegah serangan XSS (Cross-Site Scripting)
// ENT_QUOTES : mengonversi tanda kutip tunggal dan ganda menjadi entitas HTML
// 'UTF-8' : menentukan set karakter yang digunakan untuk konversi 

$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8') ;

echo "Input yang aman: " . $input ;


?>

<form method="POST" action="">
         <!-- name="input" terhubung dengan $_POST['input'] -->
    <input type="text" name='input' />
    <input type="submit" name="submit" value="Submit" />
</form>

<!-- biisa di simpulkan kalau text juga perlu disanitasi beberapa kali dan habis itu di validasi  -->
 <!-- agar mengamankan dari serangan XSS atau Cross-Site Scripting -->

<hr>
<br>


<?php
// contoh lain sanitasi email
$email = $_POST['email2'] ?? '' ;


// filter_var : digunakan untuk memfilter dan memvalidasi data seperti email, URL, dll.
// FILTER_SANITIZE_EMAIL : filter untuk membersihkan input email dari karakter yang tidak valid seperti spasi, koma, dll.
if (filter_var($email, FILTER_SANITIZE_EMAIL)) {
    echo "Email yang disanitasi: " . $email ;
}else {
    echo "Email tidak valid." ;
}


?>
<form method="POST" action="">
         <!-- name="input" terhubung dengan $_POST['input'] -->
    <input type="text" name='email2' />
    <input type="submit" name="submit" value="Submit"/>
</form>

<!-- batas  -->

<br>
<hr>

<!-- contoh dari sanitasi saja  -->

<?php
// Mendapatkan input dari form
$email_mentah1 = $_POST['email1'] ?? ''; 

// 🎯 Filter 1 Kali: Hanya Sanitasi
// Membersihkan input dari karakter ilegal seperti spasi, tanda kurung, dll.
// Koma (,) biasanya TIDAK dihapus.
$email_sanitasi = filter_var($email_mentah1, FILTER_SANITIZE_EMAIL); 

echo "### 1. Filter 1 Kali (Sanitasi Saja) ###\n";

// Cek hanya apakah input tidak kosong setelah dibersihkan
// empty() mengembalikan true jika variabel kosong atau email_sanitasi adalah string kosong
if (!empty($email_sanitasi)) {
    echo "Hasil Sanitasi: **" . $email_sanitasi . "**\n";
    echo "⚠️ Perhatian: Meskipun disanitasi, formatnya belum tentu email valid (e.g., 'hanya_teks' akan lolos).\n";
} else {
    echo "Input kosong.\n";
}
?>

<form method="POST" action="">
    <!-- echo htmlspecialchars untuk mencegah XSS atau Cross-Site Scripting -->
    <input type="text" name='email1' value="<?php echo htmlspecialchars($email_mentah); ?>" />
    <input type="submit" name="submit" value="Submit" />

<br>
<hr>

<!-- contoh dari ai untuk pembersihan atau filrter sanitasi dan validasi -->

<?php

// 1. Dapatkan input dengan aman
$email_mentah = $_POST['email3'] ?? ''; 

// 2. SANITASI: Bersihkan email dari karakter-karakter yang tidak seharusnya
// Simpan hasil pembersihan ke variabel baru, e.g., $email_bersih
$email_bersih = filter_var($email_mentah, FILTER_SANITIZE_EMAIL); 

// 3. VALIDASI: Cek apakah email yang sudah bersih memiliki format yang valid
if (filter_var($email_bersih, FILTER_VALIDATE_EMAIL)) {
    // Jika valid, tampilkan email yang sudah bersih
    echo "Email berhasil divalidasi dan disanitasi: **" . $email_bersih . "**";
} else {
    // Jika tidak valid
    echo "Email **tidak valid** (Contoh: tidak mengandung '@' atau '.').";
}
?>
<form method="POST" action="">
    <input type="text" name='email3' value="<?php echo htmlspecialchars($email_mentah); ?>" />
    <input type="submit" name="submit" value="Submit" />
</form> 



   