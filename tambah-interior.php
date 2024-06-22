<?php
	include('configdb.php');
	include('tambahinterior.php');

	$nama_mobil = $_POST['nama_mobil'];
	$nopol = $_POST['nopol'];
	$I1 = $_POST['I1'];
	$I2 = $_POST['I2'];
	$I3 = $_POST['I3'];
	$I4 = $_POST['I4'];
    $I5 = $_POST['I5'];

    $total = ($I1 + $I2 + $I3 + $I4 + $I5)/5;
    if ($total >= 4.6 && $total <= 5) {
		$status = "Sangat Baik";
	} elseif ($total >= 3.6 && $total <= 4.5) {
		$status = "Baik";
	} elseif ($total >= 2.6 && $total <= 3.5) {
		$status = "Cukup Baik";
	} elseif ($total >= 1.6 && $total <= 2.5) {
		$status = "Kurang Baik";
	} else {
		$status = "Tidak Baik";
	}

	$result = $mysqli->query("INSERT INTO `interior` (`nama_mobil`, `nopol`, `I1`, `I2`, `I3`, `I4`, `I5`, `hasil_pengecekan`)
								VALUES ('".$nama_mobil."', '".$nopol."', '".$I1."', '".$I2."', '".$I3."', '".$I4."', '".$I5."', '".$status."');");
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
                      text: "Data Inspeksi Interior telah berhasil ditambahkan.",
                      confirmButtonColor: "#3085d6",
                      confirmButtonText: "OK"
                    }).then((result) => {
                      if (result.isConfirmed) {
                        window.location = "inspeksi_interior.php";
                      }
                    });
            </script>';
	}
?>
