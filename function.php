<?php

// function dasar 

function perkenalan(){
    echo "assalamualaikum <br>";
    echo "perkenalkan nama saya nasril <br>";
    echo "senanag berkenalan dengan anda <br>";
}

// ini untuk memanggil funsi di atas
perkenalan();

echo "<br>";

function great(){
    echo "hallo ,welcome to php <br>";
}

great();

echo "<br>";
echo "<hr>";


// function dengan varibale tanpa nilai pada variabel

function perkenalan1($nama ,$salam){
    echo "$salam <br>";
    echo "perkenalkhan nama saya : .$nama. <br>";
    echo "senang berkenalan dengan anda <br>";

}

// memanggil function serta memasuuka nilai kepada fungsi
perkenalan1("nasril ilham","hallo");
echo "<br>";
perkenalan1("zainal abidin","assalamualaikum");

echo "<br>";
echo "<hr>";

// funnction dengan deklarasi varibel dan mengganti deklarasi variabel

function perkenalan2($nama ,$salam){
    echo "$salam <br>";
    echo "perkenalkhan nama saya : .$nama. <br>";
    echo "senang berkenalan dengan anda <br>";

}


perkenalan2("udin samsudin","hallo");

echo "<hr>";

// mengganti $nama dan $salam dengan di bawah ini

$saya = "elok";
$ucapsalam = "selamat malam";

// memanggil deklarasi variabel yang baru dengan menggunakan function yang awal

perkenalan2($saya , $ucapsalam);


echo "<br>";
echo "<hr>";

// memberikan nilai pada deklarasi variable 

function perkenalan3($nama ,$salam = "assalamualikum"){
    echo "$salam <br>";
    echo "perkenalkhan nama saya : .$nama. <br>";
    echo "senang berkenalan dengan anda <br>";

}

$saya2 = "maimunah";

perkenalan3($saya2);

?>