<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
         <!-- ini adalah header yang akan ada di atas atau nama coloumn -->
            <td>No</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Alamat</td>
            <td>No Telp</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php
        // menghubungkandengan db
        include 'koneksi_ajax.php';
        $no = 1;
        $query = "SELECT * FROM anggota ORDER BY id_anggota DESC";
        $sql = $db1->prepare($query);
        $sql->execute();
        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $id_anggota = $row['id_anggota'];
                $nama = $row['nama'];
                $jenis_kelamin = ($row['jenis_kelamin'] == 'L') ? 'Laki-Laki' : 'Perempuan';
                $alamat = $row['alamat'];
                $no_telp = $row['no_telp'];
        ?>
        <tr>
         <!-- akan mengisi coloum no atau baris 1 -->
            <td><?php echo $no++; ?></td> 
            
         <!-- akan mengisi coloum nama atau baris 1 -->
            <td><?php echo $nama; ?></td>

         <!-- akan mengisi coloum jenis kelamin atau baris 1 -->
            <td><?php echo $jenis_kelamin; ?></td>

         <!-- akan mengisi coloum alamat atau baris 1 -->
            <td><?php echo $alamat; ?></td>

         <!-- akan mengisi coloum no telp atau baris 1 -->
            <td><?php echo $no_telp; ?></td>

         <!-- ini akan mengisi coloumn action baris 1  -->
            <td>
              <!-- edit pada table  -->
                <button id="<?php echo $id_anggota; ?>" class="btn btn-success btn-sm edit_data"><i class="fa fa-edit">Edit</i></button>
               <!-- hapus pada table -->
                <button id="<?php echo $id_anggota; ?>" class="btn btn-danger btn-sm hapus_data"><i class="fa fa-trash"> Hapus</i></button>
            </td>
        </tr>
        <?php
            }
        } else {
        ?>
        <tr>
            <td colspan="6">Tidak ada data ditemukan</td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<!-- ini untuk apa? -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();

        function reset(){
         document.getElementById("err_nama").innerHTML = "";
          document.getElementById("err_jenis_kelamin").innerHTML = "";
           document.getElementById("err_alamat").innerHTML = "";
            document.getElementById("err_no_telp").innerHTML = "";
        }

        // LOGIKA KLIK TOMBOL EDIT / mengirimkan kan lokasi untuk update
        $(document).on('click', '.edit_data', function() {
            // Scroll ke atas
            $('html, body').animate({ scrollTop: 0 }, 'slow');
            
            // Ambil ID dari tombol yang diklik
            var id_anggota= $(this).attr('id'); 
            
            // Kirim permintaan AJAX untuk mengambil data anggota
            $.ajax({
                type: 'POST',
                url: 'get_data.php', // Harus membuat file ini
                data: { id_anggota: id_anggota },
                dataType: 'json',
                success: function(response) {
                    reset(); // Panggil fungsi reset error
                    
                    // Isi data ke form
                    $('#id_anggota').val(response.id_anggota);
                    $('#nama').val(response.nama);
                    $('#alamat').val(response.alamat);
                    $('#no_telp').val(response.no_telp);
                    
                    // Cek Jenis Kelamin
                    if (response.jenis_kelamin === 'L') {
                        document.getElementById("jenis_kelamin1").checked = true;
                    } else if (response.jenis_kelamin === 'P') {
                        document.getElementById("jenis_kelamin2").checked = true;
                    }

                    // Tampilkan form
                    $('#form-data').slideDown();
                },
                error: function(xhr, status, error) {
                    console.log("Error mengambil data: " + status + " - " + error);
                    alert("Gagal mengambil data untuk di-edit.");
                }
            });
        });


        // logika untuk menghapus atau mengirimkan ke hapus_data.php
         // jika di click maka code ini akan mengarahkan ke logika dan menjalankan logika.
$(document).on('click', '.hapus_data', function(){ // FIX A: Tambahkan titik (.)
    var id_anggota = $(this).attr('id');
    
    // Konfirmasi penghapusan (sangat disarankan)
    if (!confirm('Anda yakin ingin menghapus data ini?')) {
        return; 
    }
    
    $.ajax({
        type: 'POST',
        url: "hapus_data.php",
        data: {id_anggota: id_anggota},
        
        // FIX B & C: Perbaiki typo success dan error, dan panggil loadData()
        success: function(response){ 
             // Panggil fungsi yang memuat data dan DataTables (asumsi namanya loadData)
             if (typeof loadData === 'function') {
                 loadData();
             } else {
                 // Alternatif jika loadData() tidak terdefinisi:
                 $('.data').load("data.php"); 
             }
             alert("Data berhasil dihapus!");
        },
        error: function(xhr, status, error){ 
            console.log(xhr.responseText);
            alert("Gagal menghapus data!");
        }
    });
});
    });
</script>