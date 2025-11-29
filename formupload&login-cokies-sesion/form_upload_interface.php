<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form upload</title>
</head>
<body>
     
 <!--  action : upload : -->

 <!-- ini interface untuk form upload dan cuma memasukkan file saja atau input saja -->

    <form action="upload_interfce.php" method="post"  enctype="multipart/form-data">
        <input type="file" name="documenttoupload" id="filetoupload"><br><br>
        <input type="submit" value="upload file" name="submit">
    </form>


</body>
</html>