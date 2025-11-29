<?php

// rgex atau regular expression adalah pola yang digunakan untuk mencocokkan karakter dalam string


$pattern = "/hello/"; // pola regex untuk mencari kata "hello"
$text = "hello world"; // teks yang akan diperiksa

// tidak sensitif huruf besar/kecil dan tidak perlu garis baru hanya dengan menambahkan 'i' di akhir pola
// contoh: $pattern = "/hello/i" ; untuk mengabaikan besar kecil huruf jika tidak ada 'i' maka hanya 'hello' yang cocok, tapi jika ada 'i'
//  maka 'Hello', 'HELLO', 'hElLo' juga cocok

// contoh lain menambahkan 'm' di akhir pola untuk mencocokkan teks multi-baris
// contoh: $pattern = "/^hello/m" ; untuk mencocokkan 'hello ' di awal setiap baris dalam teks multi-baris contohya adalah 

// yang di cocokkan adalah hello saja tidak dengan spasi dan world

// preg_match : fungsi untuk memeriksa apakah pola regex cocok dengan teks tertentu

// mencocokan pola dengan teks
if (preg_match($pattern, $text)) {
    echo "Cocok ditemukan!" ;
} else {
    echo "Cocok tidak ditemukan." ;
}

echo "<br><hr>" ;

// mencocokan pola dengan pattern 

$pattern2 = "/[0-9]/" ; // pola regex untuk mencari angka 0-9
$text2 = "there are 3 lemon" ; // teks yang akan diperiksa

if (preg_match($pattern2, $text2)) {
    echo "digit ditemukan!" ;
} else {
    echo "digit tidak ditemukan." ;
}


// contoh lain regex untuk validasi email
$pattern_email = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/"; // pola regex untuk memvalidasi format email
$email_to_check = "example@example.com"; // email yang akan diperiksa

if (preg_match($pattern_email, $email_to_check)) {
    echo "Email valid!" ;
} else {
    echo "Email tidak valid." ;
}

echo "<hr> <br>" ;

// noted 

// contoh sintax regex di PHP

// preg_match() : fungsi untuk memeriksa apakah pola regex cocok dengan teks tertentu Hanya yang Pertama
// preg_match_all() : fungsi untuk memeriksa semua kecocokan pola regex dalam teks tertentu Semua Kecocokan
// preg_replace() : fungsi untuk mengganti bagian dari teks yang cocok dengan pola regex dengan teks lain
// preg_split() : fungsi untuk memecah teks menjadi array berdasarkan pola regex tertentu
// preg_grep() : fungsi untuk memfilter elemen array yang cocok dengan pola regex tertentu
// preg_last_error() : fungsi untuk mendapatkan kode kesalahan terakhir yang terjadi selama operasi regex

// Simbol dasar dalam regex :

// + dalam regex berarti satu atau lebih kemunculan dari karakter sebelumnya
// * dalam regex berarti nol atau lebih kemunculan dari karakter sebelumnya
// ? dalam regex berarti nol atau satu kemunculan dari karakter sebelumnya
// [] dalam regex digunakan untuk mendefinisikan kumpulan karakter yang diinginkan
// ^ dalam regex digunakan untuk menunjukkan awal dari string
// $ dalam regex digunakan untuk menunjukkan akhir dari string
// . dalam regex digunakan untuk mencocokkan karakter apa pun kecuali baris baru
// i dalam regex digunakan untuk membuat pencocokan tidak sensitif terhadap huruf besar/kecil
// m dalam regex digunakan untuk mencocokkan teks multi-baris
// n dalam regex digunakan untuk mencocokkan teks tanpa memperhatikan spasi putih
// s dalam regex digunakan untuk mencocokkan karakter baris baru juga

// soal 

$pattern3 ="/[a-z]/" ; // pola regex untuk mencari huruf kecil a-z
$text3 = "this is a semple text" ; // teks yang akan diperiksa

if(preg_match($pattern3, $text3)){
    echo "huruf kecil ditemukan!" ;
} else {
    echo "huruf kecil tidak ditemukan." ;
};

echo "<br><hr>" ;

$pattern4 = "/[0-9]+/" ; // + pola regex untuk mencari satu atau lebih digit angka
$text4 = "there are 123 apples." ; // teks yang akan diperiksa

if(preg_match($pattern4,$text4, $matches)){  //$matches menyimpan hasil yang cocok ke dalam array $matches
    echo "cocokkan :" .$matches[0] ;  // menampilkan hasil yang cocok pertama
}else {
    echo "tidak ditemukan." ;
}

echo "<br><hr>" ;
$pattern5 = "/apple/" ; // pola regex untuk mencari kata "apple
$replacement = "banana" ; // teks pengganti
$text5 = "I like apple pie." ; // teks yang akan diperiksa

$result = preg_replace($pattern5, $replacement, $text5) ; // mengganti "apple" dengan "banana"
echo $result; // Output: I like banana pie.

echo "<br><hr>" ;

$pattern6 = "/go*d/" ; // pola regex untuk mencari "gd" dengan nol atau lebih "o" di antara g dan d berapa banyak o atau paling banyak o
// contoh: "gd", "god", "good", "goood", dll.
$text6 = "The god is good." ; // teks yang akan diperiksa

if(preg_match($pattern6, $text6, $matches2)){
    echo "cocokkan : " .$matches2[0] ;
} else {
    echo "tidak ditemukan." ;
}

echo "<br><hr>" ;

$pattern7 = "/go?d/" ; // pola regex untuk mencari "gd" dengan nol atau satu "o" lebih sedikit o atau tidak ada o
// contoh: "gd" atau "god"
$text7 = "The gd is good." ; // teks yang akan diperiksa

if(preg_match($pattern7, $text7, $matches3)){
    echo "cocokkan : " .$matches3[0] ;
} else {
    echo "tidak ditemukan." ;
}

echo "<br><hr>" ;

$pattern8 = "/go*od/m" ; // pola regex untuk mencari "gd" dengan nol atau lebih "o" dalam mode multi-baris
// multi baris adalah teks yang memiliki beberapa baris, garis yang dimulai dengan "go" dan diakhiri dengan "d"
// contoh: "gd", "god", "good", "goood", dll.
$text8 = "The goooood is good." ; // teks yang akan diperiksa

if(preg_match($pattern8, $text8, $matches4)){
    echo "cocokkan : " .$matches4[0] ;
} else {
    echo "tidak ditemukan." ;
}
?>