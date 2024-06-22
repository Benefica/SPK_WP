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
        <link href="vendor/dist/css/select2.min.css" rel="stylesheet" />

        <!-- Alert -->
        <link rel="stylesheet" href="vendor/sweetalert2.min.css">
        <script src="vendor/sweetalert2.min.js"></script>
        
        <script src="js/jquery-3.5.1.min.js"></script>
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

                <li class="nav-item active">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
                        <i class="fas fa-fw fa-server"></i>
                        <span>Inspeksi Mobil</span>
                    </a>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item active" href="inspeksi_mesin.php">
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
                <li class="nav-item">
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
                            <h1 class="h3 mb-0 text-gray-800">Data Inspeksi Mesin</h1>
                        </div>

                        <!-- Content Row -->
                        <div class="row">
                            <!-- Earnings (Monthly) Card Example -->
                            <?php
                                    $mesin = $mysqli->query("SELECT * from mesin");
                                    if(!$mesin){
                                        echo $mysqli->connect_errno." - ".$mysqli->connect_error;
                                        exit();
                                    }
                                    $i=0;
											while ($row = $mesin->fetch_assoc()) {
												@$a[$i] = $row["kode"];
												$i++;
											}
                                    
                                    $mobil = $mysqli->query("SELECT * FROM mobil");
                                    if(!$mobil){
                                        echo $mysqli->connect_errno." - ".$mysqli->connect_error;
                                        exit();
                                    }
                                ?>
                            <div class="col-lg-12 mb-4">
                            <!-- Approach -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                			            <div class="row">
                				            <div class="col-lg-6">
                					            <h6 class="m-0 font-weight-bold text-primary">Ubah Data Inspeksi Mesin</h6>
                				            </div>
                			            </div>
                		            </div>
                                    <div class="card-body">
                                        <?php
                                            $result = $mysqli->query("SELECT * from mesin where id = ".$_GET['id']."");
                                            if(!$result){
                                                echo $mysqli->connect_errno." - ".$mysqli->connect_error;
                                                exit();
                                            }
                                            while($row = $result->fetch_assoc()){
                                        ?>
                                        <form role="form" method="POST" action="edit-mesin.php?id=<?php echo $_GET['id'];?>">
                                            <center>
                                                <h6 class="m-0 font-weight-bold text-primary">Pilih Data Mobil</h6>
                                                <br>
                                            </center>
                                           
                                            <table class="table table-striped">
                                                <tr>
                                                    <td>Nama Mobil</td>
                                                    <td><input type="text" value="<?php echo $row["nama_mobil"]?>" required readonly class="form-control" name="nama_mobil" id="nama_mobil"/></td>
                                                </tr>
                                                <tr>
                                                    <td>Nomor Polisi</td>
                                                    <td><input type="text" value="<?php echo $row["nopol"]?>" required readonly class="form-control" name="nopol" id="nopol"/></td>
                                                </tr>
                                            </table>
                                            <center>
                                                <h6 class="m-0 font-weight-bold text-primary">Inspeksi Mesin Mobil</h6>
                                                <br>
                                            </center>
                                            <table class="table table-striped">
                                                <tr>
                                                    <th>Jenis Pengecekan</th>
                                                    <th>Hasil Pengecekan</th>
                                                </tr>
                                                <tr>
                                                    <td>Pengecekan Suara Mesin</td>
                                                    <td>
                                                        <select name="M1" id="M1" class="form-control" required>
                                                            <option value="" selected="selected" disabled>Silahkan Pilih Hasil Pengecekan</option>
                                                            <option value="1" class="form-control">Tidak Layak</option>
                                                            <option value="2" class="form-control">Kurang Layak</option>
                                                            <option value="3" class="form-control">Cukup Layak</option>
                                                            <option value="4" class="form-control">Layak</option>
                                                            <option value="5" class="form-control">Sangat Layak</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Pengecekan Hasil Pembakaran Mesin</td>
                                                    <td>
                                                        <select name="M2" id="M2" class="form-control" required>
                                                            <option value="" selected="selected" disabled>Silahkan Pilih Hasil Pengecekan</option>
                                                            <option value="1" class="form-control">Tidak Layak</option>
                                                            <option value="2" class="form-control">Kurang Layak</option>
                                                            <option value="3" class="form-control">Cukup Layak</option>
                                                            <option value="4" class="form-control">Layak</option>
                                                            <option value="5" class="form-control">Sangat Layak</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Pengecekan Air Radiator</td>
                                                    <td>
                                                        <select name="M3" id="M3" class="form-control" required>
                                                            <option value="" selected="selected" disabled>Silahkan Pilih Hasil Pengecekan</option>
                                                            <option value="1" class="form-control">Tidak Layak</option>
                                                            <option value="2" class="form-control">Kurang Layak</option>
                                                            <option value="3" class="form-control">Cukup Layak</option>
                                                            <option value="4" class="form-control">Layak</option>
                                                            <option value="5" class="form-control">Sangat Layak</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Pengecekan Block Mesin</td>
                                                    <td>
                                                        <select name="M4" id="M4" class="form-control" required>
                                                            <option value="" selected="selected" disabled>Silahkan Pilih Hasil Pengecekan</option>
                                                            <option value="1" class="form-control">Tidak Layak</option>
                                                            <option value="2" class="form-control">Kurang Layak</option>
                                                            <option value="3" class="form-control">Cukup Layak</option>
                                                            <option value="4" class="form-control">Layak</option>
                                                            <option value="5" class="form-control">Sangat Layak</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Pengecekan Suspensi Mobil</td>
                                                    <td>
                                                        <select name="M5" id="M5" class="form-control" required>
                                                            <option value="" selected="selected" disabled>Silahkan Pilih Hasil Pengecekan</option>
                                                            <option value="1" class="form-control">Tidak Layak</option>
                                                            <option value="2" class="form-control">Kurang Layak</option>
                                                            <option value="3" class="form-control">Cukup Layak</option>
                                                            <option value="4" class="form-control">Layak</option>
                                                            <option value="5" class="form-control">Sangat Layak</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </table>
                                            <button type="reset" class="btn btn-info">Reset</button>
                                            <a href="inspeksi_mesin.php" type="cancel" class="btn btn-warning">Batal</a>
                                            <button type="submit" class="btn btn-primary">Ubah</button>
                                        </form>
                                        <?php
                                            }
                                        ?>
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
    </body>
</html>
