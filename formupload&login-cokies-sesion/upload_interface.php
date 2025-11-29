<?php
if (isset($_POST["submit"])) {
    $target_directory = "document/"; // Pastikan folder ini ada dan writable
    $target_file = $target_directory . basename($_FILES["documenttoupload"]["name"]);
    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Menentukan file apa saja yang boleh diinput
    $allowedExtension = array("txt", "pdf", "doc", "docx");

    // Max ukuran file untuk diupload jika lebih maka tidak bisa
    $max_file_size = 5 * 1024 * 1024; // 5MB

    // Perbaikan: Gunakan $file_type, bukan $document_file_type
    if (in_array($file_type, $allowedExtension) && $_FILES["documenttoupload"]["size"] <= $max_file_size) {
        // Syntax move_uploaded_file untuk memindahkan file ke tempat yang kita tuju
        if (move_uploaded_file($_FILES["documenttoupload"]["tmp_name"], $target_file)) {
            echo "Dokumen berhasil diupload";
        } else {
            echo "Dokumen gagal diupload";
        }
    } else {
        echo "Dokumen tidak bisa diupload karena melebihi batas max file atau tidak valid :)";
    }
}
?>