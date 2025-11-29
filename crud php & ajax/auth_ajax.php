<?php

//MEMBUAT TOKEN KEAMANAN AJAX
session_start();
if(empty($_SESSION['csrf_token'])){
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

<!-- otentifikasi untuk keamanan -->