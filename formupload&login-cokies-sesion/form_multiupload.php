<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>unggah dokumen</title>
</head>
<body>
    <h2>unggah dokumen</h2>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data"><br>
        
        <input 
            type="file" 
            name="file[]" 
            multiple="multiple" 
            accept=".jpg, .jpeg, .png, .gif"
        />
        <br><br>
        
        <input type="submit" value="unggah" name="submit">
    </form>
</body>
</html>