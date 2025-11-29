<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <?php
   
    // Gunakan kurung kurawal {} untuk mengapit variabel array
    echo "favorit color is: {$_SESSION["favcolor"]} <br>"; 
    echo "favorit animal is: {$_SESSION["favanimal"]} <br>"; 
    
    ?>
</body>
</html>