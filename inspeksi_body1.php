<?php
    include('configdb.php');
    session_start();
	// cek login
	if($_SESSION['role']=="sales"){
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

        <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />

        <!-- Alert -->
        <link rel="stylesheet" href="vendor/sweetalert2.min.css">
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
                    <a class="nav-link" href="index2.php">
                        <i class="fas fa-home"></i>
                        <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider" />

                <!-- Heading -->
                <div class="sidebar-heading">INPUT DATA</div>

                <li class="nav-item">
                    <a class="nav-link" href="mobil1.php">
                        <i class="fas fa-car"></i>
                        <span>Data Mobil</span>
                    </a>
                </li>
                
                <li class="nav-item active">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
                        <i class="fas fa-fw fa-server"></i>
                        <span>Inspeksi Mobil</span>
                    </a>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="inspeksi_mesin1.php">
                                <i class="fas fa-car-battery"></i>
                                <span>Inspeksi Mesin</span>
                            </a>
                            <a class="collapse-item active" href="inspeksi_body1.php">
                                <i class="fas fa-car-crash"></i>
                                <span>Inspeksi Body</span>
                            </a>
                            <a class="collapse-item" href="inspeksi_interior1.php">
                                <i class="fas fa-car"></i>
                                <span>Inspeksi Interior</span>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="alternatif2.php">
                        <i class="fas fa-clipboard-check"></i>
                        <span>Penilaian Alternatif</span>
                    </a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider" />

                <!-- Heading -->
                <div class="sidebar-heading">Hasil Perhitungan</div>
                <!-- Nav Item - MAINTENANCE -->
                <li class="nav-item">
                    <a class="nav-link" href="analisa2.php">
                        <i class="fas fa-chart-bar"></i>
                        <span>Analisa</span>
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
                            <h1 class="h3 mb-0 text-gray-800">Inspeksi Body Mobil</h1>
                        </div>

                        <!-- Content Row -->
                        <div class="row">
                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-lg-12 mb-4">
                            <!-- Approach -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                			            <div class="row">
                				            <div class="col-lg-6">
                					            <h6 class="m-0 font-weight-bold text-primary">Data Inspeksi Body Mobil</h6>
                				            </div>
                                            <div class="col-lg-6">
                                                <a href="tambahbody1.php" class="btn btn-success btn-icon-split float-right">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-plus"></i>
                                                    </span>
                                                    <span class="text">Tambah Data</span>
                                                </a>
                                            </div>
                			            </div>
                		            </div>
                                    <div class="card-body">
                                        <?php
							                //include 'config.php';
                                            $body = $mysqli->query("SELECT * from body");
                                            if(!$body){
                                                echo $mysqli->connect_errno." - ".$mysqli->connect_error;
                                                exit();
                                            }
                                            $i=0;
                                        ?>

                                        <div class="panel-body table-responsive">
                                            <table class="table table-striped table-bordered" id="dataTable"  width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Nama Mobil</th>
                                                        <th>Nopol</th>
                                                        <th>Plat Body</th>
                                                        <th>Rangka Mobil</th>
                                                        <th>Aksesoris</th>
                                                        <th>Kualitas Cat</th>
                                                        <th>Suspensi Mobil</th>
                                                        <th>Status Inspeksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $i = 1;
                                                        while ($row = $body->fetch_assoc()) {
                                                            echo '<tr>';
                                                            echo '<td>'.$i++.'</td>';
                                                            echo '<td>'.ucwords($row["nama_mobil"]).'</td>';
                                                            echo '<td>'.$row["nopol"].'</td>';
                                                            echo '<td>'.$row["B1"].'</td>';
                                                            echo '<td>'.$row["B2"].'</td>';
                                                            echo '<td>'.$row["B3"].'</td>';
                                                            echo '<td>'.$row["B4"].'</td>';
                                                            echo '<td>'.$row["B5"].'</td>';
                                                            echo '<td>'.$row["hasil_pengecekan"].'</td>';
                                                            echo '</tr>';
                                                            }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
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

        <!-- Alert -->
        <script src="vendor/sweetalert2.min.js"></script>
        <script src="vendor/myalert.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/mystyle.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/datatables-demo.js"></script>
    </body>
</html>
