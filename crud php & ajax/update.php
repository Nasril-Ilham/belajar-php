<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <?php
    include('koneksi.php');
    $id_anggota = $_GET['id_anggota'];
    $query = " SELECT * FROM anggota WHERE id_anggota = $id_anggota";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
    mysqli_close($connect);
    ?>

    <div class="container mt-4">
        <h2 class="text-center">edit data anggota</h2>
        <form action="proses.php?aksi=update" method="post">
            <input type="hidden" name="id_anggota" value="<?php echo $row['id_anggota']; ?>">
            
            <div class="form-group">
                <label for="nama" class="col-sm-2 col-form-label">nama :</label>
                <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $row['nama']; ?>" required>
            </div>

            <div class="form-group mt-2">
              <label for="jenis_kelamin">jenis kelamin</label>

               <div class="form-check mt-1">
                <input type="radio" name="jenis_kelamin" id="laki" value="L" <?php if($row['jenis_kelamin'] === 'L') echo 'checked' ?> required> 
                <label class="form-check-label" for="laki" >laki-laki</label>
              </div>

                <div class="form-check">
                 <input type="radio" name="jenis_kelamin" id="perempuan" value="P" <?php if($row['jenis_kelamin'] === 'P') echo 'checked' ?>  required>
                 <label class="form-check-label" for="perempuan" >perempuan</label>
                </div>
            </div>
        

             <div class="form-group mt-1">
              <label for="alamat" class="col-sm-2 col-form-label">alamat:</label>
                <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $row['alamat']; ?>" required>
            </div>

            <div class="form-group mt-1">
                 <label for="no_telp" class="col-sm-2 col-form-label">no telpon:</label>
                <input type="text" class="form-control" name="no_telp" id="no_telp"  value="<?php echo $row['no_telp']; ?>" required>
            </div>
           
             <button type="submit" class="btn btn-primary mt-2">simpan perubahan</button>
             
        </form>
         <a class="btn btn-secondary mt-2" href="index.php" class="">kembali</a>
    </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>