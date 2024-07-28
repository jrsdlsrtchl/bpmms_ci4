<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BP Monitoring Management System | ?? </title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>public/css/sb-admin-2.min.css" rel="stylesheet">
    <style type="text/css">
        label {
            font-size: 16px;
            font-weight: bold;
            color: #000;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?= $this->include("layout/sidebar") ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?= $this->include("layout/topbar") ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">BP Monitoring Management System | User Login</h1>
                    <form name="newtesting" method="post">
                        <div class="row">

                            <div class="col-lg-6">

                                <!-- Basic Card Example -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">User Login</h6>
                                    </div>
                                    <div class="card-body">

                                        <div class="form-group">
                                            <label>Email id</label>
                                            <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Enter your email id" required="true">
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" id="userpassword" name="userpassword" placeholder="Enter your paassword" required="true">
                                            <a href="<?= site_url('forgotpassword') ?>">Forgot Password</a>
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary btn-user btn-block" name="login" id="submit">
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </form>

                    <?= $this->include("layout/footer") ?>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>BP Monitoring Management System</span>
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

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>public/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>public/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url() ?>public/js/sb-admin-2.min.js"></script>

</body>

</html>