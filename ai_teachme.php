<?php

// array dengan perulangan foreach

$colors = array("merah", "hijau", "biru");

foreach ($colors as $value) {
    echo $value . "<br>";
}


echo "<hr>";

// array foreach dengan array mempunyai nilai atau 


$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($age as $key => $value) {
    echo $key . " is " . $value . " years old.<br>";
}


echo "<hr>";

// perulangan array tapi kita mencari tau dulu untuk panjang array


$colors = array("merah", "hijau", "biru");
$arrlength = count($colors); // Menggunakan count() untuk mengetahui jumlah elemen

for ($x = 0; $x < $arrlength; $x++) {
    echo $colors[$x] . "<br>";
}

echo "<hr>";

// perulangan array forech dan continue : melewati
// continue : melompati sisa blok kode dalam iterasi saat ini dan langsung melanjutkan ke iterasi berikutnya.

// melewati satu 
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8);

foreach ($numbers as $value) {

    // continue atau 5 tidak akan keluar dan lanjut ke 6 cuma satu yang di leati
    if ($value == 5) {
        continue; // Lewati iterasi saat ini jika nilai adalah 5
    }
    
    // Kode di bawah ini hanya akan dieksekusi jika nilai BUKAN 5
    echo "Nomor saat ini: " . $value . "<br>";
}


//meleewati > 1  menggunakan or : ||
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

foreach ($numbers as $value) {
    // Jika nilai adalah 3 ATAU 5 ATAU 7
    if ($value == 3 || $value == 5 || $value == 7) {
        continue; // Lewati iterasi saat ini
    }
    
    echo "Nomor saat ini: " . $value . "<br>";
}


// melewati > 1 lebih simple lagi
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
// Array berisi nilai yang ingin dihilangkan
$excluded_numbers = array(3, 5, 7);

foreach ($numbers as $value) {
    // Periksa apakah $value ada di dalam $excluded_numbers
    if (in_array($value, $excluded_numbers)) {
        continue; // Jika ada, lewati iterasi
    }
    
    echo "Nomor saat ini: " . $value . "<br>";
}

echo "<hr>";

// continue: Menghentikan iterasi saat ini, lalu pindah ke iterasi berikutnya.
// break: Menghentikan seluruh perulangan sekaligus.h


echo "<hr>";

// perulangan array forech dan break
// pahami logic di bawah ini 


$names = array("Alice", "Bob", "Charlie", "David", "Eve");
$search_name = "Charlie";
$found = false;

foreach ($names as $name) {
    if ($name == $search_name) {
        echo "Nama " . $search_name . " ditemukan! Menghentikan pencarian.<br>";
        $found = true;
        break; // Menghentikan perulangan sepenuhnya
    }
    echo "Masih mencari, nama saat ini: " . $name . "<br>";
}

if ($found) {
    echo "Proses selesai, nama ditemukan.";
} else {
    echo "Proses selesai, nama tidak ditemukan.";
}

?>