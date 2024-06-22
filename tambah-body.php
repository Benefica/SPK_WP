<?php
	include('configdb.php');
	include('tambahbody.php');

	$nama_mobil = $_POST['nama_mobil'];
	$nopol = $_POST['nopol'];
	$B1 = $_POST['B1'];
	$B2 = $_POST['B2'];
	$B3 = $_POST['B3'];
	$B4 = $_POST['B4'];
    $B5 = $_POST['B5'];

    $total = ($B1 + $B2 + $B3 + $B4 + $B5)/5;
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

	$result = $mysqli->query("INSERT INTO `body` (`nama_mobil`, `nopol`, `B1`, `B2`, `B3`, `B4`, `B5`, `hasil_pengecekan`)
								VALUES ('".$nama_mobil."', '".$nopol."', '".$B1."', '".$B2."', '".$B3."', '".$B4."', '".$B5."', '".$status."');");
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
                      text: "Data Inspeksi Mesin telah berhasil ditambahkan.",
                      confirmButtonColor: "#3085d6",
                      confirmButtonText: "OK"
                    }).then((result) => {
                      if (result.isConfirmed) {
                        window.location = "inspeksi_body.php";
                      }
                    });
            </script>';
	}
?>
