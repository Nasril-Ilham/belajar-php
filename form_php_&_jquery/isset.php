<?php

$umur ;

// isset : menegecek apakah sebuah variabel sudah diset atau belum 

if (isset($umur) && $umur >= 18) {
    echo "anda sudah dewasa.";
} else {
    echo "anda belum dewasa. atau variabel umur tidak diset.";
}

echo "<br>";
echo "<hr>";

$data = array("nama" => "andi", "umur" => 20);

if(isset($data["nama"])){
    echo " nama :" .$data["nama"];
}else{
    echo "variael nama tidak tersedia";
}
?>