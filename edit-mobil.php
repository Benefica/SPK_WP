<?php
	include('configdb.php');
	include('editmobil.php');

	$nama_mobil = $_POST['nama_mobil'];
	$nopol = $_POST['nopol'];
	$harga = $_POST['harga'];
	$tahun = $_POST['tahun'];
	$warna = $_POST['warna'];
	$wiraniaga = $_POST['wiraniaga'];
	
	$result = $mysqli->query("UPDATE mobil SET `nama_mobil` = '".$nama_mobil."', `nopol` = '".$nopol."', `harga` = '".$harga."', `tahun` = '".$tahun."', `warna` = '".$warna."', `wiraniaga` = '".$wiraniaga."' WHERE `id` = ".$_GET['id'].";");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		echo '<script>
                    Swal.fire({
                      icon: "success",
                      title: "Data Berhasil Diubah",
                      text: "Data Mobil telah berhasil diubah.",
                      confirmButtonColor: "#3085d6",
                      confirmButtonText: "OK"
                    }).then((result) => {
                      if (result.isConfirmed) {
                        window.location = "mobil.php";
                      }
                    });
            </script>';
	}
?>