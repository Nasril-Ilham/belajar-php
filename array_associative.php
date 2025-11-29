<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array associative</title>
</head>
<body>
      <h2>aray associative</h2>
    <?php

    $dosen = [
        "nama" => "Elok Nur Hamdana",
        "alamat" => "Malang",
        "jenis_kelamin" => "Perempuan",
    ];

    echo "nama : {$dosen["nama"]} <br> ";
    echo "alamat : {$dosen["alamat"]} <br> ";
    echo "jenis kelamin: {$dosen["jenis_kelamin"]} <br> ";


    echo "<hr>";
    echo "<br>";


// Creating an multidimensional array
$variable = array(
array('value00', 'value01', 'value02'),
array('value10', 'value11', 'value12'),
array('value20', 'value21', 'value22' )
);

// Accessing the elements
echo $variable[0][0]; echo "<br>"; // Outputs: value00
echo $variable[1][1]; echo "<br>"; // Outputs: value11
echo $variable[2][2]; echo "<br>"; // Outputs: value22


echo "<hr>";
    echo "<br>";


// Creating a multidimensional array
//  vertikal dari atas ke bawah atas 0 dan kebawah 1 - ?
$students = array(
array("name" => "John", "age" => 20, "grade" => "A"),
array("name" => "Sarah", "age" => 19, "grade" => "B"),
array("name" => "Mike", "age" => 21, "grade" => "A")
);

// Accessing elements of the multidimensional array
echo $students[0]["name"]; // Outputs: John
echo $students[1]["name"];
echo $students[2]["name"];
echo $students[0]["age"];
echo $students[1]["age"];
echo $students[2]["age"];

// Outputs: Sarah
// Outputs: Mike
// Outputs: 20
// Outputs: 19
// Outputs: 21


    ?>

</body>
</html>