<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input dengan Validasi AJAX</title>
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    <style>
        /* CSS Tambahan untuk membantu melihat error */
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Form input dengan Validasi</h1>

    <form action="form_validasi_ajax.php" method="POST" id="myform" >
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        <span id="nama-eror" class="error"></span> 
        <br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <span id="email-eror" class="error"></span>
        <br><br>
        
        <label for="password">Password (min 8 karakter):</label>
        <input type="password" id="password" name="password" required>
        <span id="password-eror" style="color: red"></span>
        <br><br>

        <input type="submit" value="Submit">
    </form>

    <div id="result">
        </div>

    <script>
        // Menggunakan huruf kecil (document)
        $(document).ready(function(){
            
           // ... di dalam $(document).ready(function(){ ...
    $("#myform").submit(function(event){
        
        event.preventDefault(); 

        var nama = $("#nama").val().trim(); 
        var email = $("#email").val().trim();
        var password = $("#password").val(); // <-- Tambahkan variabel password
        var valid = true; 

        // Reset pesan error
        $("#nama-eror").text("");
        $("#email-eror").text("");
        $("#password-eror").text(""); // <-- Reset pesan error password

        // --- VALIDASI NAMA ---
        if (nama === ""){
            $("#nama-eror").text("Nama harus diisi.");
            valid = false; 
        } 

        // --- VALIDASI EMAIL ---
        if (email === ""){
            $("#email-eror").text("Email harus diisi."); 
            valid = false;
        } 

        // --- VALIDASI BARU: PASSWORD ---
        if (password === ""){
            $("#password-eror").text("Password harus diisi.");
            valid = false;
        } else if (password.length < 8) { // <-- Logika min 8 karakter
            $("#password-eror").text("Password minimal 8 karakter.");
            valid = false;
        } else {
            $("#password-eror").text("");
        }


        // Jika validasi client-side berhasil
        if (valid){
            var formData = $("#myform").serialize();
            
            $.ajax({
                url: "form_validasi_ajax.php", 
                type: "POST",
                data: formData,
                success: function(response){
                    $("#result").html(response);
                },
                error: function(){
                    $("#result").html("<p style='color:red;'>Terjadi kesalahan saat menghubungi server.</p>");
                }
            });
        } 
    });

});
    </script>
</body>
</html>