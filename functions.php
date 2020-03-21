<?php

    $conn = mysqli_connect('localhost', 'root', 'password', 'phpdasar');

    function registrasi($data) {
        global $conn;
        //ambil data
        $namaDepan = stripslashes($data["namaDepan"]);
        $namaBelakang = stripslashes($data["namaBelakang"]);
        $username = strtolower(stripslashes($data["username"]));
        $email = mysqli_real_escape_string($conn, $data["email"]);
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);
        //panggil query
        $result = mysqli_query($conn, "SELECT username FROM user_moba WHERE username = '$username'");
        //cek apakah username sudah digunakan
        if( mysqli_fetch_assoc($result) ) {
            echo "<script>
                    alert('username sudah terdaftar')
                </script>";

            return false;
        }

        //cek konfirmasi pw
        if( $password !== $password2 ) {
            echo "<script>
                    alert ('kata sandi tidak sesuai')
                </script>";

            return false;
        }

        //enskripsi pw
        $password = password_hash($password, PASSWORD_DEFAULT);
        
        //masukan data user baru ke database
        $query = "INSERT INTO user_moba VALUES(NULL, '$namaDepan', '$namaBelakang', '$username', '$email', '$password')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>