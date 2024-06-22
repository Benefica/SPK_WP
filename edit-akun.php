<?php
	include('configdb.php');
	include('editakun.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		// Mendapatkan password dari input form
		$password = $_POST['password'];
	
		// Mengenkripsi password
		$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
		$nama = $_POST['nama'];
		$username = $_POST['username'];
		$role = $_POST['role'];

		$result = $mysqli->query("UPDATE user SET `nama` = '".$nama."', `username` = '".$username."' , `password` = '".$hashedPassword."', `role` = '".$role."' WHERE `id` = ".$_GET['id'].";");
		if(!$result){
			// echo "Gagal";
			echo $mysqli->connect_errno." - ".$mysqli->connect_error;
			exit();
		}
		else{
			echo '<script>
                    Swal.fire({
                      icon: "success",
                      title: "Data Berhasil Diubah",
                      text: "Data Akun telah berhasil diubah.",
                      confirmButtonColor: "#3085d6",
                      confirmButtonText: "OK"
                    }).then((result) => {
                      if (result.isConfirmed) {
                        window.location = "user.php";
                      }
                    });
            </script>';
		}
	}
?>