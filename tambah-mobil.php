<?php
	include('configdb.php');
	include('tambahmobil.php');

	$nama_mobil = $_POST['nama_mobil'];
	$nopol = $_POST['nopol'];
	$harga = $_POST['harga'];
	$tahun = $_POST['tahun'];
	$warna = $_POST['warna'];
	$wiraniaga = $_POST['wiraniaga'];

	$result = $mysqli->query("INSERT INTO `mobil` (`nama_mobil`, `nopol`, `harga`, `tahun`, `warna`, `wiraniaga`)
								VALUES ('".$nama_mobil."', '".$nopol."', '".$harga."', '".$tahun."', '".$warna."', '".$wiraniaga."');");
	if(!$result){
		// echo "Gagal";
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		echo '<script>
                    Swal.fire({
                      icon: "success",
                      title: "Data Berhasil Ditambahkan",
                      text: "Data Mobil telah berhasil ditambahkan.",
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
