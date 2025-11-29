<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambahkan anggota</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center">tambahkan anggoota</h2>
        <!-- aksi = tambah : ini di if proses pertama -->
        <form action="proses.php?aksi=tambah" method="post">
           <div class="form-group mt-2">
            <label for="nama">nama :</label>
            <input class="form-control" type="text" name="nama" id="nama" required>
           </div>

           <div class="form-group">
             <label for="jenis_kelamin">jenis kelamin</label>
            <div class="form-check">
                <input type="radio" name="jenis_kelamin" id="laki" value="L" required> 
                <label class="form-check-label" for="laki">laki-laki</label>
            </div>
            <div class="form-check">
                 <input type="radio" name="jenis_kelamin" id="perempuan" value="P" required>
                 <label class="form-check-label" for="perempuan">perempuan</label>
            </div>
           </div>

           <div class="form-group">
            <label for="alamat">alamat:</label>
            <input type="text" class="form-control" name="alamat" id="alamat" required>
           </div>
            
           <div class="form-group">
                 <label for="no_telp">no telpon:</label>
            <input type="text" class="form-control" name="no_telp" id="no_telp" required>
           </div>
           
           <div>
            <button type="submit" class="btn btn-primary">simpan data</button>
           </div>
           
        </form>
        <a class="btn btn-secondary mt-2" href="index.php" class="">kembali</a>
    </div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</body>
</html>