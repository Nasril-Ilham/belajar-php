<?php

$x = 75;
$y = 25;

function adition() {
    $GLOBALS["z"] = $GLOBALS["x"] + $GLOBALS["y"];
}

adition();
echo $z;

?>