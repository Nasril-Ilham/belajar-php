<?php

// MENGGUNAKAN IF DAN ELSEIF
 
 $nilaiNumerik = 92;

 if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
    echo"niali = A";
 }elseif($nilaiNumerik >= 80 && $nilaiNumerik <= 90){
    echo"niali = B";
 }elseif($nilaiNumerik >= 70 && $nilaiNumerik <= 80){
    echo "nilai = C";
 }elseif ($nilaiNumerik <= 70) {
    echo"nilai = D";
 }

 echo "<br>";

 // MENGGUNAKAN WHILE

 $jaraksaatini = 0;
 $jarakTarget = 500;
 $peningkatanHarian = 30;
 $hari = 0;

 while($jaraksaatini < $jarakTarget){
    $jaraksaatini += $peningkatanHarian ;
    $hari++;

    // memberhentikan perulang while : akan berhenti ketika dia mencapai 300 km

    // if($jaraksaatini == 300){
    //     break;
    // }
 }

 echo "atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 km";

 echo "<br>";

// MENGGUNAKAN FOR

$jumlahlahan = 10 ;
$tanamanperlahan = 5 ;
$buahpertanaman = 10 ;
$jumlahbuah = 0 ;

for ($i = 0; $i < $jumlahlahan ; $i++){ 
    $jumlahbuah += ($tanamanperlahan * $buahpertanaman);
}

echo "jumlah buah yang akan di panen adalah : $jumlahbuah";

 echo "<br>";

 // MENGGUNAKAN FOREACH

 $skorujian = [85, 92, 78, 96, 88];
 $totalskor= 0 ;


foreach ($skorujian as $skor) {
    $totalskor += $skor;
}

echo "total skor adalah : $totalskor";

 echo "<br>";

 // MENGGUNAKAN FOREXH DENGAN IF 

 $nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

 foreach ($nilaiSiswa as $nilai) {
    if ($nilai <= 60) {
       echo"nilai : $nilai (tidak lulus) <br>";
       continue;
    }
    echo"nilai : $nilai (lulus) <br>";
 }

  echo "<br>";
   echo "<br>";
    echo "<br>";
     echo "<br>";



     // soal

//Ada seorang guru ingin menghitung total nilai dari 
//10 siswa dalam ujian matematika. Guru ini ingin mengabaikan dua
// nilai tertinggi dan dua nilai terendah.


// hasil benar tetapi salah untuk perhitungan 

$jumlahSiswa = 6 ;
$nilaiDariSiswa = [85, 78, 90, 75, 88, 79];
$nilairata_rata = 0;
//abaikan dua nilai tinggi = 96 dan 92
//abaikan dua nilai = 70 dan 64

for ($i = 0; $i  < $jumlahSiswa; $i++) { 
    $nilairata_rata += $nilaiDariSiswa[$i] / 6 ;
}

echo "nilai rata rata : $nilairata_rata";

// salah di atas

echo"<br>";
echo"<br>";

// yang benar

$jumlahSiswa = 6;
$nilaiDariSiswa = [85, 78, 90, 75, 88, 79];
$totalSkor = 0; // Mengubah nama variabel untuk kejelasan

// 1. Loop untuk menghitung TOTAL SKOR
// Dimulai dari indeks 0, berjalan 6 kali (untuk i = 0, 1, 2, 3, 4, 5)
for ($i = 0; $i < $jumlahSiswa; $i++) { 
    $totalSkor += $nilaiDariSiswa[$i]; // HANYA PENJUMLAHAN
}

// 2. Hitung Rata-rata setelah loop selesai
$nilaiRata_rata = $totalSkor / $jumlahSiswa;

echo "Total skor adalah : $totalSkor <br>";
echo "Nilai rata-rata adalah : $nilaiRata_rata";


  echo "<br>";
   echo "<br>";
    echo "<br>";
     echo "<br>";


// soal


// Ada soal cerita : Seorang pelanggan ingin membeli sebuah produk dengan harga Rp 120.000. Toko
// tersebut menawarkan diskon sebesar 20% untuk pembelian di atas Rp 100.000. Bantu
// pelanggan ini untuk menghitung harga yang harus dibayar setelah mendapatkan diskon.


$totalBelanja = 200000 ;

if ($totalBelanja >= 100000) {
   $payment = $totalBelanja * 0.8 ;
}else{
   $payment = $totalBelanja;
}


echo " total yang harus di bayarkan adalah : $payment";


echo "<br>";
   echo "<br>";
    echo "<br>";
     echo "<br>";



// soal

$totalskorPoint = 650; 

$hadiahTambahan = ($totalskorPoint > 500) ? "YA" : "TIDAK";

echo "Total skor pemain adalah: ($totalskorPoint) <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? ($hadiahTambahan)";






?>