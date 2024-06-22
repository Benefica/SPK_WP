<?php
    include 'configdb.php';

    $id = $_POST['id'];
    $query = $mysqli->query("SELECT * FROM mobil WHERE id = '$id'");
    $data = mysqli_fetch_array($query);
    echo json_encode($data);
?>