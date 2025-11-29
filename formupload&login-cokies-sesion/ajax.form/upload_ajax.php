<?php

if(isset($_FILES["file"])){
    $errors = array();
    $file_name = $_FILES["file"]["name"];
    $file_size = $_FILES["file"]["size"];
    $file_tmp = $_FILES["file"]["tmp_name"];
    $file_type = $_FILES["file"]["type"];
    $explode_nama = explode(".", $file_name);
    $file_ext = strtolower(end($explode_nama));

    // pilihan file apa yang mau di akses
    $extensions = array("pdf", "doc", "docx", "txt");
    $extensions2 = array("jpg", "png", "jpeg", "gif");

    // ini untuk 
    if (in_array($file_ext, $extensions2) === false){
        $errors[] = "maaf gagal upload ekstens file yang di izikan adalah: jpg, png, jpeg, gif";

    }

    // ini digunakan untuk mempertanyakan apakah file size over atau tidak
    if($file_size > 2097152){
        $errors[] = "ukuran file tidak bole lebih dari 2 MB";
    }

    // 
    if(empty($errors) == true){
        move_uploaded_file($file_tmp, "documents/" . $file_name);
        echo " file berhasil di unggah";
    }else{
        echo implode("",$errors);
    }

}
?>