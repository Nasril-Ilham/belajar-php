<?php
// Pastikan auth_ajax.php memulai session_start()
include 'auth_ajax.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <meta name="csrf-token" content="<?= $_SESSION['csrf_token'];?>">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <a href="index.php" class="navbar-brand" style="color: #fff;">
            CRUD dengan AJAX
        </a>
    </nav>

    <div class="container mt-4">
        <h2 class="text-center m-4">Data Anggota</h2>
        <button type="button" class="btn btn-success mb-3" id="tambah_data">Tambah Anggota</button>

        <form action="" method="post" class="form-data" id="form-data" style="display:none;">
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Nama:</label>
                        <input type="hidden" name="id_anggota" id="id_anggota">
                        <input type="text" name="nama" id="nama" class="form-control" required>
                        <p class="text-danger" id="err_nama"></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Jenis Kelamin:</label><br>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="L" class="form-check-input" required> 
                            <label class="form-check-label" for="jenis_kelamin1">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="P" class="form-check-input">
                            <label class="form-check-label" for="jenis_kelamin2">Perempuan</label>
                        </div>
                           <p class="text-danger" id="err_jenis_kelamin"></p>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Alamat:</label>
                <textarea name="alamat" id="alamat" class="form-control" required></textarea>
                   <p class="text-danger" id="err_alamat"></p>
            </div>

            <div class="form-group">
                <label>No Telp:</label>
                <input type="text" name="no_telp" id="no_telp" class="form-control" required>
                   <p class="text-danger" id="err_no_telp"></p>
            </div>

            <div class="form-group">
                <button type="submit" name="simpan" id="simpan" class="btn btn-primary">
                    <i class="fa fa-save"> </i> Simpan 
                </button>
            </div>
            <hr>
        </form>

        <!-- load dari data.php akan di keluarkan di sini  -->
        <div class="data"></div>
        <!-- penyimpanan load dari data.php -->
        
    </div>

    <div class="text-center p-3"> 
        &copy; <?= date('Y'); ?> Copyright | 
        <a href="https://google.com/">Mohammad nasril ilham Pemrograman Web</a>
    </div>
    
    <!-- cdn paling penting yang ini jika tidak ada maka tidak akan muncul -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    
    <script type="text/javascript">
    $(document).ready(function(){
        // Menampilkan/menyembunyikan form saat tombol "Tambah Anggota" diklik
        $('#tambah_data').on('click', function() {
            // yang di tuju adalah container form dan aksinya slideToggle
            $('#form-data').slideToggle();
        });

        // Mengatur Token Keamanan (CSRF)
        $.ajaxSetup({
            headers : {
                'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
            }
        });

        

         // Memuat data awal atau akan memunculkan data.php pada index bukan di tab lain
         // tapi menjadi satu pada 1 window
         //Metode jQuery .load('data.php') (Client-Side)

       $('.data').load('data.php');

        // akan meload dari data.php ke dan akan di munculkan
        // pada class="data" di atas.
        // jika tidak penampung maka tidak akan keluar
        // di data.php hanya data biasa tidak ada css di sini lah
        // css nya akan di laksanakan karna kita 


        // pelajari ini apa nanti ?

        // Jika Anda menggunakan DataTables Server-Side:
        // $('#example').DataTable({
        //     "processing": true,
        //     "serverSide": true,
        //     "ajax": {
        //         "url": "data.php",
        //         "type": "POST"
        //     }
        // });

        // logika simpan jika tidak terlaksana atau ada yang belum di isi

        $("#simpan").click(function(){
  
            var data = $('#form-data').serialize();
            // serialize :
            var jenis_kelamin1 = document.getElementById("jenis_kelamin1").value;
            var jenis_kelamin1 = document.getElementById("jenis_kelamin2").value;
            var nama = document.getElementById("nama").value;
            var alamat = document.getElementById("alamat").value;
            var no_telp= document.getElementById("no_telp").value;

    
            if (nama == "") {
                document.getElementById("err_nama").innerHTML = "nama harus di isi";
            }else{
                document.getElementById("err_nama").innerHTML = "";
            }
            if (alamat == "") {
                document.getElementById("err_alamat").innerHTML = "alamat harus di isi";
            }else{
                document.getElementById("err_alamat").innerHTML = "";
            }
            if (no_telp == "") {
                document.getElementById("err_no_telp").innerHTML = "no telp harus di isi";
            }else{
                document.getElementById("err_no_telp").innerHTML = "";
            }
            if(document.getElementById("jenis_kelamin1").checked==false && document.getElementById("jenis_kelamin2").checked==false){
                document.getElementById("err_jenis_kelamin").innerHTML = "jenis kelamin harus di pilih";
            }else{
                document.getElementById("err_jenis_kelamin").innerHTML = "";
            }

            if (nama!="" && alamat!="" && no_telp!="" && (document.getElementById("jenis_kelamin1").checked==true || document.getElementById("jenis_kelamin1").checked==true)) {
                
                //
                $.ajax({
                 
                    type : 'POST',
                    url: "form_action.php",
                    data: data,
                    success: function(){
                        loaddata();
                        $('.data').load("data.php");
                        document.getElementById("id_anggota").value = "";
                        document.getElementById("form-data").reset();
                    },
                    error: function(xhr, status, error){ // Perbaiki typo eror -> error
                    console.log(xhr.responseText);
                }
                });
                
            }

        });
        
    });
    </script>
</body>
</html>