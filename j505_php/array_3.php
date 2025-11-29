<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
    <title>testing</title>
</head>
<body>
    <h1>halooo dunia</h1>
<h2> multidimensional array</h2>

<table>
    <tr>
        <th>judul film</th>
        <th>tahun</th>
        <th>rating</th>
    </tr>
    <?php
    $movie = array(
        //    0 0                       // 0 1  // 0 2  
        array("avengger : infinit wars", 2018 , 8.7),

        array("the avengers", 2012 , 8.1),

        array("guardian of galaxy", 2014 , 8.1),

        array("iron man", 2008 , 7.9)

    );

    echo "<tr>";
    echo "<td>". $movie[0][0] ."</td>";
    echo "<td>". $movie[0][1] ."</td>";
    echo "<td>". $movie[0][2] ."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>". $movie[1][0] ."</td>";
    echo "<td>". $movie[1][1] ."</td>";
    echo "<td>". $movie[1][2] ."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>". $movie[2][0] ."</td>";
    echo "<td>". $movie[2][1] ."</td>";
    echo "<td>". $movie[2][2] ."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>". $movie[3][0] ."</td>";
    echo "<td>". $movie[3][1] ."</td>";
    echo "<td>". $movie[3][2] ."</td>";
    echo "</tr>";

    ?>
</table>
</body>
</html>