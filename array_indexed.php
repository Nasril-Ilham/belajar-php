<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array php</title>
</head>
<body>

<h2>array terindeks</h2>


<?php

// array 1 dimensi

// Creating an indexed array
$variable = array("Value0", "Value1", "Value2", "Value3");

// Accessing the elements of the indexed array
echo $variable[0]; // Outputs: Value0
echo $variable[1]; // Outputs: Value1

// Adding a new element
$variable[] = "Value4"; // Adds Value4 to the array jika tidak tau indeks berapa
$variable[5] = "Value5"; // adds value5 to array jika tau nomer indeks 


// bisa juga ditulis seperti ini

// Creating an indexed array
$variable[0] = "Value0";
$variable[1] = "Value1";
$variable[2] = "Value2";
$variable[3] = "Value3";

// Accessing the elements of the indexed array
echo $variable[0]; // Outputs: Value0
echo $variable[1]; // Outputs: Value1

// Adding a new element
$variable[] = "Value4"; // Adds Value4 to the array

echo "<br>";
echo "<br>";
echo "<br>";

// soal keluarkan array di bawah ini dengan menggunakan loop

$listDosen = ["elok nur hamdana", "unggul pamenang", "bagas nugraha"];

foreach ($listDosen as $dosen) {
    echo " nama dosen : $dosen <br>";
}

?>
</body>
</html>