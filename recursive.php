<?php

// code di bawah ini melakukan perulangan yang tidak ada akhir  

// function tampilkandunia(){
//     echo "hello dunia <br>";

//     tampilkandunia();
// }

// tampilkandunia();


// tutup

// perulangan biasa

for ($i=1; $i <= 25 ; $i++) { 
    echo "perulangan ke : $i <br>";
}

// perulanga dengan function

function tampilkanangka(int $jumlah, int $index = 1 ) {
    echo "perulangan ke - $index <br>";


    //
    if($index < $jumlah){
        tampilkanangka($jumlah , $index = 1);
    }


}

tampilkanangka(20);

?>