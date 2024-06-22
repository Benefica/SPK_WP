<?php
	include('configdb.php');
	include('editalternatif1.php');

	$alternatif = $_POST['alternatif'];
    $nopol = $_POST['nopol'];
	$k1 = $_POST['k1'];
	$k2 = $_POST['k2'];
	$k3 = $_POST['k3'];
	$k4 = $_POST['k4'];
    $k5 = $_POST['k5'];

	
	$result = $mysqli->query("UPDATE alternatif SET `alternatif` = '".$alternatif."', `nopol` = '".$nopol."' , `k1` = '".$k1."', `k2` = '".$k2."', `k3` = '".$k3."', `k4` = '".$k4."', `k5` = '".$k5."' WHERE `id` = ".$_GET['id'].";");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		echo '<script>
                    Swal.fire({
                      icon: "success",
                      title: "Data Berhasil Diubah",
                      text: "Data Alternatif / Inspeksi telah berhasil diubah.",
                      confirmButtonColor: "#3085d6",
                      confirmButtonText: "OK"
                    }).then((result) => {
                      if (result.isConfirmed) {
                        window.location = "alternatif1.php";
                      }
                    });
            </script>';
	}
?>