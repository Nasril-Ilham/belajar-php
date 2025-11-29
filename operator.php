<?php

$angka1 = 4 ;
$angka2 = 11 ;

$pertambahan = $angka1 + $angka2 ;
$pengurangan = $angka1 - $angka2 ;
$perkalian = $angka1 * $angka2 ;
$pembagian = $angka1 / $angka2 ;
$sisa = $angka1 % $angka2 ;
$pangkat = $angka1 ** $angka2 ;

echo "hasil dari pertambahan $angka1 dan $angka2 : $pertambahan <br>";
echo "hasil dari pengurangan $angka1 dan $angka2 : $pengurangan  <br>";
echo "hasil dari perkalian $angka1 dan $angka2 : $perkalian  <br>";
echo "hasil dari pembagian $angka1 dan $angka2 : $pembagian  <br>";
echo "hasil dari sisa $angka1 dan $angka2 : $sisa  <br>";
echo "hasil dari pangkat $angka1 dan $angka2 : $pangkat  <br>";


echo "<hr>";

$angka1 = 4 ;
$angka2 = 11 ;

$hasilsama = $angka1 == $angka2;
$hasiltidaksama = $angka1 != $angka2;
$hasillebihkecil = $angka1 < $angka2;
$hasillebihbesar = $angka1 > $angka2;
$hasillebihkecilsama = $angka1 <= $angka2;
$hasillebihbesarsama = $angka1 >= $angka2;



echo "hasil dari hasilsama $angka1 dan $angka2 : $hasilsama <br>";
echo "hasil dari hasiltidaksama $angka1 dan $angka2 : $hasiltidaksama  <br>";
echo "hasil dari hasillebihkecil $angka1 dan $angka2 : $hasillebihkecil  <br>";
echo "hasil dari hasillebihbesar  $angka1 dan $angka2 : $hasillebihbesar   <br>";
echo "hasil dari hasillebihkecilsama $angka1 dan $angka2 : $hasillebihkecilsama  <br>";
echo "hasil dari hasillebihbesarsama $angka1 dan $angka2 : $hasillebihbesarsama  <br>";

echo "<hr>";
echo "<br>";

$hasilor = $angka1 || $angka2;
$hasilnotA = !$angka1;
$hasilnotB =  !$angka2;
$hasiland = $angka1 && $angka2;

echo "hasil dari hasiland $angka1 dan $angka2 : $hasiland <br>";
echo "hasil dari hasilor  $angka1 dan $angka2 : $hasilor  <br>";
echo "hasil dari hasilnotA $angka1 : $hasilnotA <br>";
echo "hasil dari hasilnotB $angka2 : $hasilnotB <br>";

echo "<hr>";
echo "<br>";

$angka1 += $angka2;
echo "\$angka1 setelah += \$angka2: $angka1 <br>";
$angka1 -= $angka2;
echo "\$angka1 setelah -= \$angka2: $angka1 <br>";
$angka1 *= $angka2;
echo "\$angka1 setelah *= \$angka2: $angka1 <br>";
$angka1 /= $angka2;
echo "\$angka1 setelah /= \$angka2: $angka1 <br>";
$angka1 %= $angka2;
echo "\$angka1 setelah %= \$angka2: $angka1 <br>";

echo "<hr>";
echo "<br>";

$hasilidentik = $angka1 === $angka2;
$hasiltidakidentik = $angka1 !== $angka2;

echo "hasil dari asilidentik $angka1 dan $angka2 : $hasilidentik <br>";
echo "hasil dari hhasiltidakidentik  $angka1 dan $angka2 : $hasiltidakidentik <br>";

echo "<hr>";


$KursiRestoran = 45 ;
$KursiTerpakai = 28 ;

$SisaKursi = $KursiRestoran - $KursiTerpakai;

echo"sisa kursi yang masih koaong ada : $SisaKursi kursi";




// gemini ai yang bawah

// --- Initialization for Arithmetic Operators ---
// $angka1 = 4;
// $angka2 = 11;

// $pertambahan = $angka1 + $angka2;
// $pengurangan = $angka1 - $angka2;
// $perkalian = $angka1 * $angka2;
// $pembagian = $angka1 / $angka2;
// $sisa = $angka1 % $angka2;
// $pangkat = $angka1 ** $angka2;

// echo "## 🔢 Hasil Operator Aritmatika\n";
// echo "hasil dari pertambahan $angka1 dan $angka2 : $pertambahan <br>"; // 21
// echo "hasil dari pengurangan $angka1 dan $angka2 : $pengurangan <br>"; // -1
// echo "hasil dari perkalian $angka1 dan $angka2 : $perkalian <br>"; // 110
// echo "hasil dari pembagian $angka1 dan $angka2 : $pembagian <br>"; // 0.909090...
// echo "hasil dari sisa $angka1 dan $angka2 : $sisa <br>"; // 10
// echo "hasil dari pangkat $angka1 dan $angka2 : $pangkat <br>"; // 100000000000

// echo "<hr>";
// echo "## ⚖️ Hasil Operator Relasi (Perbandingan)\n";
// // Re-initialize for comparison, though the values are unchanged here

// // $angka1 = 4;
// // $angka2 = 11;

// // Use ternary operator for clear Boolean output (true/false)
// $hasilsama = $angka1 == $angka2 ? 'true' : 'false'; // false
// $hasiltidaksama = $angka1 != $angka2 ? 'true' : 'false'; // true
// $hasillebihkecil = $angka1 < $angka2 ? 'true' : 'false'; // true
// $hasillebihbesar = $angka1 > $angka2 ? 'true' : 'false'; // false
// $hasillebihkecilsama = $angka1 <= $angka2 ? 'true' : 'false'; // true

// // FIXED: Changed = (Assignment) to >= (Comparison)
// $hasillebihbesarsama = $angka1 >= $angka2 ? 'true' : 'false'; // false


// echo "hasil dari hasilsama ($angka1 == $angka2) : $hasilsama <br>";
// echo "hasil dari hasiltidaksama ($angka1 != $angka2) : $hasiltidaksama <br>";
// echo "hasil dari hasillebihkecil ($angka1 < $angka2) : $hasillebihkecil <br>";
// echo "hasil dari hasillebihbesar ($angka1 > $angka2) : $hasillebihbesar <br>";
// echo "hasil dari hasillebihkecilsama ($angka1 <= $angka2) : $hasillebihkecilsama <br>";
// echo "hasil dari hasillebihbesarsama ($angka1 >= $angka2) : $hasillebihbesarsama <br>";

// echo "<hr>";
// echo "## 💡 Hasil Operator Logika\n";
// // In PHP, any non-zero number is considered TRUE in a boolean context.
// // 10 is TRUE, 11 is TRUE.
// $hasiland = ($angka1 && $angka2) ? 'true' : 'false'; // true && true = true
// $hasilor = ($angka1 || $angka2) ? 'true' : 'false'; // true || true = true
// $hasilnotA = (!$angka1) ? 'true' : 'false'; // NOT(true) = false
// $hasilnotB = (!$angka2) ? 'true' : 'false'; // NOT(true) = false

// echo "hasil dari hasiland ($angka1 && $angka2) : $hasiland <br>";
// echo "hasil dari hasilor ($angka1 || $angka2) : $hasilor <br>";
// echo "hasil dari hasilnotA (!$angka1) : $hasilnotA <br>";
// echo "hasil dari hasilnotB (!$angka2) : $hasilnotB <br>";

// echo "<hr>";
// echo "## 🔨 Hasil Operator Penugasan (Compound Assignment)\n";
// // The results are not echoed here, but the values of $angka1 are modified.
// // To properly demonstrate, you should echo the value AFTER each operation.

// $angka1 = 4;
// $angka2 = 11;

// echo "\$angka1 saat ini: $angka1 <br>";

// $angka1 += $angka2; // $angka1 = 10 + 11 = 21
// echo "\$angka1 setelah += \$angka2: $angka1 <br>";

// $angka1 -= $angka2; // $angka1 = 21 - 11 = 10
// echo "\$angka1 setelah -= \$angka2: $angka1 <br>";

// $angka1 *= $angka2; // $angka1 = 10 * 11 = 110
// echo "\$angka1 setelah *= \$angka2: $angka1 <br>";

// $angka1 /= $angka2; // $angka1 = 110 / 11 = 10.0
// echo "\$angka1 setelah /= \$angka2: $angka1 <br>";

// $angka1 %= $angka2; // $angka1 = 10 % 11 = 10 (and becomes an integer again)
// echo "\$angka1 setelah %= \$angka2: $angka1 <br>";

// echo "<hr>";
// echo "## ≡ Hasil Operator Identitas\n";
// // Re-initialize variables before using them again
// $angka1 = 4;
// $angka2 = 11;
// $angka3 = "10"; // New variable for type difference demonstration

// // === (Identical) checks if VALUE and TYPE are the same.
// $hasilidentik = ($angka1 === $angka2) ? 'true' : 'false'; // false (value differs)
// $hasilidentik_with_string = ($angka1 === $angka3) ? 'true' : 'false'; // false (type differs: int vs string)

// // !== (Not Identical) checks if VALUE or TYPE are different.
// $hasiltidakidentik = ($angka1 !== $angka2) ? 'true' : 'false'; // true (value differs)
// $hasiltidakidentik_with_string = ($angka1 !== $angka3) ? 'true' : 'false'; // true (type differs)


// echo "hasil dari identik (\$angka1 === \$angka2) : $hasilidentik <br>";
// echo "hasil dari tidak identik (\$angka1 !== \$angka2) : $hasiltidakidentik <br>";
// echo "hasil dari identik (\$angka1 = 10, \$angka3 = '10') : $hasilidentik_with_string <br>";
// echo "hasil dari tidak identik (\$angka1 = 10, \$angka3 = '10') : $hasiltidakidentik_with_string <br>";




// end gemini ai karna sedikit ada kesalah dan setelah di compare ternyata cuma kurang >


// OPERATOR DALAM PHP

// aritmatika dasar : "+" , "-" , "*" , "/" , "%"

// PEMBANDING : "== ":  , "!=" :  , "<" : , ">": , "<=" : , ">=" :

//LOGIKA : && : and , || : or , ! : not

//PENUGASAN

//INCRIMINT & DECREMENT

//BITWISE

//PEMANGKATAN

//IDENTIK

//TEMARY

// ARRAY
?>