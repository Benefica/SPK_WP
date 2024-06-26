<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>Silahkan Login</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
        <!-- Custom styles for this template-->
        <link href="css/mystyle.min.css" rel="stylesheet" />
        <link href="css/mystyle.css" rel="stylesheet" />
    </head>

    <body class="bg-gradient-primary">
        <div class="container">
            <!-- Outer Row -->
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block"><img src="img/log.svg" style="width: 100%; height: 100%" /></div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <img src="img/ERBAMA.png" style="width: 25%; height: 25%" />
                                            <h1 class="h4 text-gray-900 mb-4">Silahkan Login !</h1>
                                        </div>
                                        <form action="cek-login.php" class="user" method="POST">
                                            <div class="form-group">
                                                <input type="text" name="username" required="required" class="form-control form-control-user" placeholder="Masukkan Username..." />
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" required="required" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" />
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck" />
                                                    <label class="custom-control-label" for="customCheck">Remember Me</label>
                                                </div>
                                            </div>
                                            <input type="SUBMIT" class="btn btn-primary btn-user btn-block" value="LOGIN" />
                                            <?php 
                                                if(isset($_GET['pesan'])){
                                                if($_GET['pesan']=="kesalahan"){
                                                echo "<b><span class='notif' style='font-size:12px;'>* Username atau password tidak sesuai.</b> </span>";
                                            }} ?>
                                        </form>
                                        <hr />
                                        <div class="text-center">
                                            <a class="small">Harap Hubungi Admin Apabila Terjadi Masalah Login</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
