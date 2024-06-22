<?php
	include('configdb.php');
	include('tambahmesin.php');

	$nama_mobil = $_POST['nama_mobil'];
	$nopol = $_POST['nopol'];
	$M1 = $_POST['M1'];
	$M2 = $_POST['M2'];
	$M3 = $_POST['M3'];
	$M4 = $_POST['M4'];
    $M5 = $_POST['M5'];

    $total = ($M1 + $M2 + $M3 + $M4 + $M5)/5;
    if ($total >= 4.6 && $total <= 5) {
		$status = "Sangat Layak";
	} elseif ($total >= 3.6 && $total <= 4.5) {
		$status = "Layak";
	} elseif ($total >= 2.6 && $total <= 3.5) {
		$status = "Cukup Layak";
	} elseif ($total >= 1.6 && $total <= 2.5) {
		$status = "Kurang Layak";
	} else {
		$status = "Tidak Layak";
	}

	$result = $mysqli->query("INSERT INTO `mesin` (`nama_mobil`, `nopol`, `M1`, `M2`, `M3`, `M4`, `M5`, `hasil_pengecekan`)
								VALUES ('".$nama_mobil."', '".$nopol."', '".$M1."', '".$M2."', '".$M3."', '".$M4."', '".$M5."', '".$status."');");
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
                        window.location = "inspeksi_mesin.php";
                      }
                    });
            </script>';
	}
?>
