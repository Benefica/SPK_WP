<?php
	include('configdb.php');
	include('editkriteria1.php');

	$kriteria = $_POST['kriteria'];
    $kepentingan = $_POST['kepentingan'];
	$cost_benefit = $_POST['cost_benefit'];

	$result = $mysqli->query("UPDATE kriteria SET `kriteria` = '".$kriteria."', `kepentingan` = '".$kepentingan."' , `cost_benefit` = '".$cost_benefit."' WHERE `id_kriteria` = ".$_GET['id'].";");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		echo '<script>
                    Swal.fire({
                      icon: "success",
                      title: "Data Berhasil Diubah",
                      text: "Data Kriteria telah berhasil diubah.",
                      confirmButtonColor: "#3085d6",
                      confirmButtonText: "OK"
                    }).then((result) => {
                      if (result.isConfirmed) {
                        window.location = "kriteria1.php";
                      }
                    });
            </script>';
	}
?>