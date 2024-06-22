<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan conn database
include 'configdb.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username yang sesuai
$login = $mysqli->query("SELECT * from user where username='$username'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username ditemukan
if($cek > 0) {
    $data = mysqli_fetch_assoc($login);

    // verifikasi password
    if (password_verify($password, $data['password'])) {
        // Password valid

        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['role'] = $data['role'];

        // alihkan ke halaman dashboard berdasarkan peran (role) pengguna
        if ($data['role'] == "admin") {
            header("location: index1.php");
        } else if ($data['role'] == "sales") {
            header("location: index2.php");
        } else {
            // peran (role) tidak valid
            header("location: login.php?pesan=kesalahan");
        }
    } else {
        // Password tidak valid
        header("location: login.php?pesan=kesalahan");
    }
} else {
    // Username tidak ditemukan
    header("location: login.php?pesan=kesalahan");
}
?>
