<?php
	include('configdb.php');
	include('tambahalternatif2.php');
	
	$kode = $_POST['kode'];
	$alternatif = $_POST['alternatif'];
	$nopol = $_POST['nopol'];
	$k1 = $_POST['k1'];
	$k2 = $_POST['k2'];
	$k3 = $_POST['k3'];
	$k4 = $_POST['k4'];
	$k5 = $_POST['k5'];
	$result = $mysqli->query("INSERT INTO `alternatif` (`kode`, `alternatif`, `nopol`, `k1`, `k2`, `k3`, `k4`, `k5`)
								VALUES ('".$kode."', '".$alternatif."', '".$nopol."', '".$k1."', '".$k2."', '".$k3."', '".$k4."', '".$k5."');");
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
                      text: "Data Alternatif / Inspeksi telah berhasil ditambahkan.",
                      confirmButtonColor: "#3085d6",
                      confirmButtonText: "OK"
                    }).then((result) => {
                      if (result.isConfirmed) {
                        window.location = "alternatif2.php";
                      }
                    });
            </script>'; 
	}
?> 
