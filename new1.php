<?php
require 'functions2.php';

if( isset($_POST["registrasi"]) ) {
    var_dump($_POST);
    
    if( registarsi($_POST) > 0 ) {
        echo "
                <script>
                    alert('User baru berhasil ditambahkan!')
                </script>
            ";
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
    <title>MoBa</title>
    <link rel="stylesheet" href="new1.css">
</head>
<body>
    <div class="topbar"></div>
    <div class="container">
        <div class="header cf">
            <h1 class="judul">MoBa</h1>
            <form action="" method="post" class="login">
                <table>
                    <tr class="caption">
                        <td><label for="usernameLogin">Username</label></td>
                        <td><label for="passwordLogin">Password</label></td>
                    </tr>
                    <tr class="textbox">
                        <td><input type="text" name="usernameLogin" id="usernameLogin"></td>
                        <td><input type="password" name="passwordLogin" id="passwordLogin"></td>
                        <td><button type="submit" name="login">masshook!!</button></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="content cf">
            <div class="main">
                <h3>MoBa membantu anda terhubung dan berbagi berbagai hal tentang backpacker dengan orang lain di dunia ini.</h3>
                <div class="image"></div>
            </div>
            <div class="sidebar">
                <h2>Daftar</h2>
                <p>ini cepat dan mudah.</p>
                <form action="" method="post" class="registrasi">
                    <table>
                        <tr>
                            <td><input type="text" name="namaDepan" placeholder="Nama depan"></td>
                            <td><input type="text" name="namaBelakang" placeholder="Nama belakang"></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="username_email"><input type="text" name="username" placeholder="Username" id="nomor"></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="username_email"><input type="text" name="email" placeholder="Email atau Nomor Telepon"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="password" name="password" placeholder="Masukan Password"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="password" name="password2" placeholder="Konfirmasi Password"></td>
                        </tr>
                    </table>
                    <!-- <h3>Tanggal lahir</h3>
                    <select name="tanggal" id="tanggal">
                        <option value="tanggal">01</option>
                        <option value="tanggal">02</option>
                        <option value="tanggal">03</option>
                        <option value="tanggal">04</option>
                        <option value="tanggal">05</option>
                    </select>
                    <select name="bulan" id="bulan">
                        <option value="bulan">jan</option>
                        <option value="bulan">feb</option>
                        <option value="bulan">mar</option>
                        <option value="bulan">apr</option>
                        <option value="bulan">mei</option>
                    </select>
                    <select name="tahun" id="tahun">
                        <option value="tahun">2020</option>
                        <option value="tahun">2021</option>
                        <option value="tahun">2022</option>
                        <option value="tahun">2023</option>
                        <option value="tahun">2024</option>
                    </select>
                    <br>
                    <h3>Jenis kelamin</h3>
                    <input type="radio" id="pria" name="jeniskelamin"><label for="pria">Pria</label>
                    <input type="radio" id="wanita" name="jeniskelamin"><label for="wanita">Wanita</label>
                    <br> -->
                    <button type="submit" name="registrasi">Daftar</button>
                </form>
            </div>
        </div>
        <div class="footer cf">
            <div class="profil">
                <h3>Lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus illo iste, voluptate fugit tenetur veniam accusamus. Vero totam neque facilis, optio, consequatur illum aut cum itaque libero dolore sed ipsum.</p>
            </div>
            <div class="opsi">
                <h3>Dolor sit</h3>
                <p>Amet consevture adispicing elit</p><hr>
                <p>Repellendus illo iste</p><hr>
                <p>Voluptate fugit tenetur veniam accusamus</p><hr>
                <p>Consequatur illum aut cum itaque libero</p>
            </div>
            <div class="sosmed">
                <h3>Follow us</h3>
                <p>Twitter</p>
                <p>Instagram</p>
                <p>Facebook</p>
            </div>
        </div>
        <div class="footer-copy">
            <hr>
            <div class="copy">&copy; Copyright 2020. halimurrasyid.</div>
        </div>
    </div>
    <div class="bot-bar"></div> 
</body>
</html>