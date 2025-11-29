<?php

include 'auth_ajax.php';

?>

<!DOCTYPE html>
<html lang="en">
<>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

     <!-- csrf token -->
         <meta name="csrf_token" content="<?= $_SESSION$_SESSION['csrf_token']?>">
         
         <!-- boostrap -->
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmDCqUf4kL8kLykL9L9L7L5mOQStJskc4pDpQbqyi/RrhN/udI9RwhkKmipVibllG95r" crossorigin="anonymous">

        <!-- datable -->
         <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
         
         <!--  -->
           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

</head>
<body>
    <nav class="naavbar navbar-dark bg-primary">
        <a href="index.php" class="navbar-brand" style="color: #fff;">
            CRUD dengan ajax
        </a>
    </nav>

    <div class="container mt-4">

        <h2 class="text-center m-4">Data Anggota</h2>
        <a href="create.php" class="btn btn-success mb-3">Tambah Anggota</a>

        <form action=""></form>

        

        <?php
        include("koneksi.php");
        // Inisialisasi nomor urut
        $no = 1; 

        $query = "SELECT * FROM anggota ORDER BY id_anggota DESC";
        $result = mysqli_query($connect, $query);

        if (mysqli_num_rows($result) > 0) {
        ?>
        <table class="table table-hover table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row = mysqli_fetch_array($result)){
                    $jenis_kelamin = ($row["jenis_kelamin"] === "L" ) ? 'Laki-laki' : 'Perempuan';
                ?>
                <tr>
                    <td>
                        <?= $no++; ?> 
                    </td>
                    <td>
                        <?= htmlspecialchars($row["nama"]) ?>
                    </td>
                    <td>
                        <?= $jenis_kelamin ?>
                    </td>
                    <td>
                        <?= htmlspecialchars($row["alamat"]) ?>
                    </td>
                    <td>
                        <?= htmlspecialchars($row["no_telp"]) ?>
                    </td>
                    
                    <td> 
                        <a class="btn btn-sm btn-primary" href="update.php?id_anggota=<?= $row["id_anggota"] ?>">Edit</a> 
                        
                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $row['id_anggota'] ?>">
                            Hapus
                        </button>
                    </td>
                </tr>
                
                <div class="modal fade" id="hapusModal<?= $row['id_anggota'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="hapusModalLabel">Konfirmasi Hapus</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Apakah Anda yakin ingin menghapus data dengan nama: **<?= htmlspecialchars($row["nama"]) ?>**?
                            </div>
                            <div class="modal-footer">
                                <a href="proses.php?aksi=hapus&id_anggota=<?= $row["id_anggota"] ?>" class="btn btn-danger">Ya, Hapus</a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php
                }
                ?>
            </tbody>
        </table>
        <?php
        } else {
            echo '<div class="alert alert-info">Tidak ada data anggota.</div>';
        }
        mysqli_close($connect);
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>