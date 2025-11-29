$(document).ready(function(){
    
    // 1. Logika untuk mengaktifkan/menonaktifkan tombol (Tombol 'unggah')
    $("#file").change(function(){

        // Cek apakah ada file yang dipilih (length > 0)
        if(this.files.length > 0){
            // KONDISI TRUE: Aktifkan tombol
            $("#upload-button").prop("disabled", false).css({
                "opacity": 1, 
                "background-color": "red" // Ganti warna latar belakang saat aktif
            });
        } else {
            // KONDISI FALSE: Nonaktifkan tombol
            $("#upload-button").prop("disabled", true).css({
                "opacity": 0.5,
                "background-color": "gray" // Ganti warna latar belakang saat nonaktif
            });
        }
    });

    // PENTING: Panggil .change() agar status disabled awal segera diatur
    // Ini menjalankan fungsi di atas sekali saat halaman dimuat
    $("#file").trigger('change'); 
    
    // --- 2. Logika Pengiriman Formulir Menggunakan AJAX ---
    $("#upload_form").submit(function(e){
        
        // Mencegah browser melakukan submit tradisional (refresh halaman)
        e.preventDefault();

        // Membuat objek FormData untuk mengirim data formulir, termasuk file
        var formData = new FormData(this);

        // Kirim data menggunakan AJAX
        $.ajax({
            type: "POST",
            url: "upload_ajax.php",
            data: formData,
            cache: false,
            contentType: false, // Penting untuk FormData (agar browser yang menentukan Content-Type)
            processData: false, // Penting untuk FormData (agar data binary file tidak diubah)
            
            // Berhasil menerima respons dari server
            success: function(response){
                $("#status").html(response); // Tampilkan pesan status (sukses/gagal) dari PHP
            },
            
            // Terjadi kesalahan koneksi (misalnya, 404, 500, atau timeout)
            error: function(){
                $("#status").html("terjadi kesalahan koneksi saat mengungah file");
            }
        });
    });
});



// code di atas hanya mengarahkan dan mengambil doang dari form dan di teruskan ke
// php dimana kita melakukan logic di tempat tersebut.
// kenapa tidak langsung aja tanpa menggunakan jquery atau ajax?
//