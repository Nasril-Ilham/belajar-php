<?php

$targetDirectory = "documents/";

// --- TAHAP 1: Pengecekan Submit ---
// Pastikan kode upload hanya berjalan setelah tombol submit ditekan
if (isset($_POST["submit"])) {

    // Periksa atau buat direktori penyimpanan
    if (!is_dir($targetDirectory)) { 
        if (!mkdir($targetDirectory, 0777, true)) {
            die("Gagal membuat direktori penyimpanan.");
        }
    }
    
    // --- TAHAP 2: Pengecekan Keberadaan File yang Lebih Aman ---
    // Cek apakah array file ada, dan error code pada file pertama BUKAN "UPLOAD_ERR_NO_FILE" (Kode 4)
    if (isset($_FILES['file']) && $_FILES['file']['error'][0] !== UPLOAD_ERR_NO_FILE) {
        
        $totalFiles = count($_FILES['file']['tmp_name']); 
        $success_count = 0;

        // Loop melalui semua file
        for ($i = 0; $i < $totalFiles; $i++) {
            
            // Cek error per file
            if ($_FILES['file']['error'][$i] !== UPLOAD_ERR_OK) {
                echo "❌ Gagal mengunggah file ke-" . ($i + 1) . " (Kode Error: " . $_FILES['file']['error'][$i] . ").<br>";
                continue;
            }

            // [LOGIKA PEMINDAHAN FILE DI SINI...]
            $fileName = basename($_FILES['file']['name'][$i]);
            $tempPath = $_FILES['file']['tmp_name'][$i]; 
            $targetFile = $targetDirectory . $fileName;

            if (move_uploaded_file($tempPath, $targetFile)) {
                echo "✅ File **$fileName** berhasil diunggah. <br>";
                $success_count++;
            } else {
                echo "❌ Gagal memindahkan file **$fileName**. <br>";
            }
        }
        
        if ($success_count > 0) {
            echo "<hr>Total **$success_count** file berhasil diunggah.";
        }
        
    } else {
        // Blok ini dieksekusi jika submit ditekan, tetapi TIDAK ADA file yang dipilih
        echo "❌ **Tidak ada file yang diunggah.** Mohon pilih satu atau lebih file.";
    }

} else {
    // Blok ini dieksekusi jika halaman diakses langsung (bukan dari form submit)
    echo "Akses ditolak. Mohon unggah melalui formulir.";
}
?>