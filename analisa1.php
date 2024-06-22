<?php
    include('configdb.php');
    session_start();
	// cek login
	if($_SESSION['role']=="admin"){
	} else { 
	header("location:login.php?pesan=kesalahan");
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>ERBAMA AUTO</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
        <!-- Custom styles for this template-->
        <link href="css/mystyle.min.css" rel="stylesheet" />
        <link href="css/mystyle.css" rel="stylesheet" />
    </head>

    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index1.php">
                    <div class="sidebar-brand-text mx-3">ERBAMA AUTO</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0" />

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="index1.php">
                        <i class="fas fa-home"></i>
                        <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider" />

                <!-- Heading -->
                <div class="sidebar-heading">INPUT DATA</div>

                <li class="nav-item">
                    <a class="nav-link" href="mobil.php">
                        <i class="fas fa-car"></i>
                        <span>Data Mobil</span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="kriteria1.php">
                        <i class="fas fa-list-ol"></i>
                        <span>Kriteria</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
                        <i class="fas fa-fw fa-server"></i>
                        <span>Inspeksi Mobil</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="inspeksi_mesin.php">
                                <i class="fas fa-car-battery"></i>
                                <span>Inspeksi Mesin</span>
                            </a>
                            <a class="collapse-item" href="inspeksi_body.php">
                                <i class="fas fa-car-crash"></i>
                                <span>Inspeksi Body</span>
                            </a>
                            <a class="collapse-item" href="inspeksi_interior.php">
                                <i class="fas fa-car"></i>
                                <span>Inspeksi Interior</span>
                            </a>
                        </div>
                    </div>
                </li>
                
                <!-- Nav Item - PEMBELIAN -->
                <li class="nav-item">
                    <a class="nav-link" href="alternatif1.php">
                        <i class="fas fa-clipboard-check"></i>
                        <span>Penilaian Alternatif</span>
                    </a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider" />

                <!-- Heading -->
                <div class="sidebar-heading">Hasil Perhitungan</div>
                <!-- Nav Item - MAINTENANCE -->
                <li class="nav-item active">
                    <a class="nav-link" href="analisa1.php">
                        <i class="fas fa-chart-bar"></i>
                        <span>Analisa</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="perhitungan1.php">
                        <i class="fas fa-calculator"></i>
                        <span>Perhitungan</span>
                    </a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider" />

                <!--Header-->
                <div class="sidebar-heading">OTHER</div>
                <!-- Nav Item - Buat Akun -->
                <li class="nav-item">
                    <a class="nav-link" href="akun.php">
                        <i class="fas fa-user-plus"></i>
                        <span>Buat Akun</span>
                    </a>
                </li>

                <!--Divider-->
                <hr class="sidebar-divider d-none d-md-block" />

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Navbar -->
                        <div class="judul"><b>Sistem Pendukung Keputusan Inspeksi Kelayakan Mobil</b></div>
                        <ul class="navbar-nav ml-auto">
                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nama']; ?></span>
                                    <img class="img-profile rounded-circle" src="img/acc.png" />
                                </a>
                                <!-- Dropdown - MENU LOGOUT -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Grafik Analisa</h1>
                            <div class="col-lg-6"> 
                                <a href="cetak_hasil.php" class="btn btn-primary btn-icon-split float-right" style="margin-right:15px;" target="_blank">
                                    <span class="icon text-white-50">
                                    <i class="fas fa-print"></i>
                                    </span>
                                    <span class="text">Cetak</span>
                                </a>
                            </div>
                        </div>

                        <!-- Content Row -->
                        <div class="row">
                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-lg-12 mb-4">
                            <!-- Approach -->
                                <div class="card shadow mb-4">
                                    <div class="card-body">
                                        <?php
                                            error_reporting(0);
                                            $alt = get_alternatif();
                                            if (!$alt){
                                                echo "<center><b>Lakukan Input Data Penilaian Alternatif Terlebih Dahulu !</b></center>";
                                            }
                                        ?>
                                        <div>
                                            <canvas id="canvas"></canvas>
                                        </div>
                                        <br />
                                        <center>
                                            <?php
                                                $alt = get_alternatif();
                                                $alt_name = get_alt_name();
                                                end($alt_name);
                                                $arl2 = key($alt_name)+1; //new
                                                $kep = get_kepentingan();
                                                $cb = get_costbenefit();
                                                $k = jml_kriteria();
                                                $a = jml_alternatif();
                                                $tkep = 0;
                                                $tbkep = 0;

                                                    for($i=0;$i<$k;$i++){
                                                        $tkep = $tkep + $kep[$i];
                                                    }
                                                    for($i=0;$i<$k;$i++){
                                                        $bkep[$i] = ($kep[$i]/$tkep);
                                                        $tbkep = $tbkep + $bkep[$i];
                                                    }
                                                    for($i=0;$i<$k;$i++){
                                                        if($cb[$i]=="cost"){
                                                            $pangkat[$i] = (-1) * $bkep[$i];
                                                        }
                                                        else{
                                                            $pangkat[$i] = $bkep[$i];
                                                        }
                                                    }
                                                for($i=0;$i<$a;$i++){
                                                    for($j=0;$j<$k;$j++){
                                                        $s[$i][$j] = pow(($alt[$i][$j]),$pangkat[$j]);
                                                    }
                                                    $ss[$i] = $s[$i][0]*$s[$i][1]*$s[$i][2]*$s[$i][3]*$s[$i][4];
                                                }
                                                // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> vektor S <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< //
                                                echo "<b>Hasil Akhir</b></br>";
                                                echo "<table class='table table-striped table-bordered table-hover'>";
                                                echo "<thead><tr><th>Alternatif</th><th>V</th></tr></thead>";
                                                $total = 0;
                                                for($i=0;$i<$a;$i++){
                                                    $total = $total + $ss[$i];
                                                }
                                                
                                                for($i=0;$i<$a;$i++){
                                                    echo "<tr><td><b>".$alt_name[$i]."</b></td>";
                                                    $v[$i] = round($ss[$i]/$total,6);
                                                    echo "<td>".$v[$i]."</td></tr>";
                                                }
                                                echo "</table><hr>";
                                                // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> vektor S <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< //

                                                                    function jml_kriteria(){
                                                                        include 'configdb.php';
                                                                        $kriteria = $mysqli->query("select * from kriteria");
                                                                        return $kriteria->num_rows;
                                                                    }

                                                                    function jml_alternatif(){
                                                                        include 'configdb.php';
                                                                        $alternatif = $mysqli->query("select * from alternatif");
                                                                        return $alternatif->num_rows;
                                                                    }

                                                                    function get_kepentingan(){
                                                                        include 'configdb.php';
                                                                        $kepentingan = $mysqli->query("select * from kriteria");
                                                                        if(!$kepentingan){
                                                                            echo $mysqli->connect_errno." - ".$mysqli->connect_error;
                                                                            exit();
                                                                        }
                                                                        $i=0;
                                                                        while ($row = $kepentingan->fetch_assoc()) {
                                                                            @$kep[$i] = $row["kepentingan"];
                                                                            $i++;
                                                                        }
                                                                        return $kep;
                                                                    }

                                                                    function get_costbenefit(){
                                                                        include 'configdb.php';
                                                                        $costbenefit = $mysqli->query("select * from kriteria");
                                                                        if(!$costbenefit){
                                                                            echo $mysqli->connect_errno." - ".$mysqli->connect_error;
                                                                            exit();
                                                                        }
                                                                        $i=0;
                                                                        while ($row = $costbenefit->fetch_assoc()) {
                                                                            @$cb[$i] = $row["cost_benefit"];
                                                                            $i++;
                                                                        }
                                                                        return $cb;
                                                                    }

                                                                    function get_alt_name(){
                                                                        include 'configdb.php';
                                                                        $alternatif = $mysqli->query("select * from alternatif");
                                                                        if(!$alternatif){
                                                                            echo $mysqli->connect_errno." - ".$mysqli->connect_error;
                                                                            exit();
                                                                        }
                                                                        $i=0;
                                                                        while ($row = $alternatif->fetch_assoc()) {
                                                                            @$alt[$i] = $row["alternatif"];
                                                                            $i++;
                                                                        }
                                                                        return $alt;
                                                                    }

                                                                    function get_alternatif(){
                                                                        include 'configdb.php';
                                                                        $alternatif = $mysqli->query("select * from alternatif");
                                                                        if(!$alternatif){
                                                                            echo $mysqli->connect_errno." - ".$mysqli->connect_error;
                                                                            exit();
                                                                        }
                                                                        $i=0;
                                                                        while ($row = $alternatif->fetch_assoc()) {
                                                                            @$alt[$i][0] = $row["k1"];
                                                                            @$alt[$i][1] = $row["k2"];
                                                                            @$alt[$i][2] = $row["k3"];
                                                                            @$alt[$i][3] = $row["k4"];
                                                                            @$alt[$i][4] = $row["k5"];
                                                                            $i++;
                                                                        }
                                                                        return $alt;
                                                                    }

                                                                    function cmp($a, $b){
                                                                        if ($a == $b) {
                                                                            return 0;
                                                                        }
                                                                        return ($a < $b) ? -1 : 1;
                                                                    }

                                                                    function print_ar(array $x){	//just for print array
                                                                        echo "<pre>";
                                                                        print_r($x);
                                                                        echo "</pre></br>";
                                                                    }
                                            ?>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- /.container-fluid -->
                    </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Ozmond 2023 / Dwi Prayogo 201943502333</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Apakah Yakin Ingin Keluar ?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Pilih "Logout" Di Bawah Apabila Anda Ingin Keluar.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/mystyle.min.js"></script>

        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootswatch.js"></script>
        <script src="js/Chart.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="js/ie10-viewport-bug-workaround.js"></script>

        <script>
            var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

            var barChartData = {
                labels : [
                    <?php
                        for($i=0;$i<$a;$i++){
                            echo '"'.$alt_name[$i].'",';
                        }
                    ?>
                ],
                datasets : [
                    {
                        fillColor : "rgba(120,120,120)",
                        strokeColor : "rgba(220,220,220,0.8)",
                        highlightFill: "rgba(204,0,0,0.85)",
                        highlightStroke: "rgba(220,220,220,1)",
                        data : [
                            <?php
                                for($i=0;$i<$a;$i++){
                                    echo $v[$i].',';
                                }
                            ?>
                        ]
                    },
                    /*{
                        fillColor : "rgba(151,187,205,0.5)",
                        strokeColor : "rgba(151,187,205,0.8)",
                        highlightFill : "rgba(151,187,205,0.75)",
                        highlightStroke : "rgba(151,187,205,1)",
                        data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
                    }*/
                ]

            }
            window.onload = function(){
                var ctx = document.getElementById("canvas").getContext("2d");
                window.myBar = new Chart(ctx).Bar(barChartData, {
                    responsive : true
                });
            }

        </script>
    </body>
</html>
