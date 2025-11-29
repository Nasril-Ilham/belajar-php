 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form upload ajax</title>
    <link rel="stylesheet" href="upload_ajax.css">
</head>
<body>
    <div class="upload-form-container">
        <h2>unggah file dokumen</h2>
        <form id="upload_form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
            <div class="file-input-container">
                <input type="file" name="file" id="file" class="file-input">
                <label for="file" class="file-label">pilih file</label>
            </div>
            <button type="submit" name="submit" class="upload-button" id="upload-button" disabled>unggah</button> <!-- Tambahkan disabled -->
        </form>
        <div id="status" class="upload-status"></div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> <!-- Pakai satu saja -->
    <script src="upload_ajax.js"></script> <!-- Pastikan file ini ada dan path benar -->
</body>
</html>