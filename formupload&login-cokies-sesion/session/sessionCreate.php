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
     
     $_SESSION["favcolor"] = "green";
     $_SESSION["favanimal"] = "cat";
     echo "session variable are set / sudah di set"

    ?>
</body>
</html>