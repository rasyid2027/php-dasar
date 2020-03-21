<?php
    require 'functions.php';

    if( isset($_POST["register"]) ) {

        if( registrasi($_POST) > 0 ) {
            echo "<script>
                    alert('user baru sudah ditambahkan');
                </script>";
        } else {
            echo mysqli_error($conn);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="new2.css">
    <title>login</title>
</head>
<body>
    <div class="topbar">
        <h1>MoBa</h1>
    </div>
    <div class="container">
        <h2>Sign Up</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td><input type="text" name="namaDepan" id="namaDepan" placeholder="Nama Depan" required></td>
                    <td><input type="text" name="namaBelakang" id="namaBelakang" placeholder="Nama Belakang" required></td>
                </tr>
                <tr>
                    <td colspan="2" class="email"><input type="text" name="username" id="username" placeholder="username" required></td>
                </tr> 
                <tr>
                    <td colspan="2" class="email"><input type="text" name="email" id="nama" placeholder="Email atau telepon" required></td>
                </tr>
                <tr>
                    <td colspan="2" class="email"><input type="password" name="password" id="password" placeholder="Kata Sandi" required></td>
                </tr>
                <tr>
                    <td colspan="2" class="email"><input type="password" name="password2" id="password2" placeholder="Konfirmasi Kata Sandi"></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" name="register">Daftar</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>