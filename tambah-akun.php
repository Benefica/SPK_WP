<?php
include('configdb.php');
include('akun.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mendapatkan password dari input form
    $password = $_POST['password'];

    // Mengenkripsi password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $role = $_POST['role'];

    // Mengecek apakah username telah digunakan sebelumnya
    $checkUsername = $mysqli->query("SELECT * FROM `user` WHERE `username` = '".$username."'");
    if ($checkUsername->num_rows > 0) {
        echo '<script>
                Swal.fire({
                  icon: "error",
                  title: "Username Sudah Digunakan",
                  text: "Username yang Anda masukkan telah digunakan. Silakan masukkan username lain.",
                  confirmButtonColor: "#3085d6",
                  confirmButtonText: "OK"
                }).then((result) => {
                  if (result.isConfirmed) {
                    window.location = "akun.php";
                  }
                });
              </script>';
        exit();
    } else {
        $result = $mysqli->query("INSERT INTO `user` (`nama`, `username`, `password`, `role`)
                                VALUES ('".$nama."', '".$username."', '".$hashedPassword."', '".$role."');");
        if(!$result){
            // echo "Gagal";
            echo $mysqli->connect_errno." - ".$mysqli->connect_error;
            exit();
        } else {
            echo '<script>
                    Swal.fire({
                      icon: "success",
                      title: "Data Berhasil Ditambahkan",
                      text: "Data akun telah berhasil ditambahkan.",
                      confirmButtonColor: "#3085d6",
                      confirmButtonText: "OK"
                    }).then((result) => {
                      if (result.isConfirmed) {
                        window.location = "akun.php";
                      }
                    });
                  </script>';
        }
    }
}
?>
