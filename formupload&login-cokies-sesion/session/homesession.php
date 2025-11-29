<?php

session_start();

if( $_SESSION['status'] = 'login'){
    echo "selama datang " . $_SESSION['username'];
    ?>
    <br>
    <a href="sessionlogout.php">log out</a>
    <?php
}else {
    echo "anda belum login, silakan" ?>
    <a href="sessionlogin.html">log in</a>
    <?php
}

?>