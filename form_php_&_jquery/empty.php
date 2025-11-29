<?php

// contoh penggunaan empty dalam variabel 

$nama="" ; // variabel dengan string kosong
$nilai = 0 ; // variabel dengan nilai 0

// empty : mengecek apakah sebuah variabel kosong atau tidak

if (empty($nama)) {
    echo "Variabel 'nama' kosong.";
} else {
    echo "Variabel 'nama' tidak kosong.";
}

echo "<br>";
echo "<hr>";

// contoh penggunaan empty dalam array

$myarray = array(); // array kosong

if (empty($myarray)) {
    echo "Array 'myarray' kosong.";
} else {
    echo "Array 'myarray' tidak kosong.";
}

echo "<br>";
echo "<hr>";

// contoh penggunaan empty pada variabel yang tidak terdefinisi atau tidak 
// ada deklarasi sebelumnya

if(empty($nonexistentVar)){
    echo "Variabel tidak terdefinisi atau kosong.";
} else {
    echo "Variabel terdefinisi dan tidak kosong.";
}
?>