<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: ../index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>INDOSTAT - Dashboard Admin</title>

    <link rel="icon" href="../assets/favicon.png" type="">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="../plugin/datepicker/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../plugin/datepicker/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../plugin/smartwizard/dist/css/smart_wizard_arrows.min.css">
    <link rel="stylesheet" href="../plugin/datepicker/jquery-datetimepicker/build/jquery.datetimepicker.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../plugin/bs5/dist/js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include_once 'tools/sidebar.php' ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include_once 'tools/topbar.php' ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <?php
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                    if ($page == "dashboard") {
                        include_once 'content/dashboard.php';
                    } elseif ($page == "profile") {
                        include_once 'content/profile.php';
                    } elseif ($page == "input-data") {
                        include_once 'content/inputdata.php';
                    } elseif ($page == "kelola-data") {
                        include_once 'content/keloladata.php';
                    } elseif ($page == "kelola-pertanyaan") {
                        include_once 'content/kelolapertanyaan.php';
                    } elseif ($page == "hasil-survei") {
                        include_once 'content/hasilsurvei.php';
                    }
                } else {
                    include_once 'content/dashboard.php';
                }
                ?>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include_once 'tools/footer.php' ?>
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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="php/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Form Modal-->
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Keluarga</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="php/inputdatakeluarga.php">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nomor Induk Kependudukan</label>
                            <input type="identitynumber" class="form-control" id="exampleFormControlInput1" name="identitynumber">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                            <input type="fullname" class="form-control" id="exampleFormControlInput1" name="fullname">
                        </div>
                        <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                        <div class="mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Gender" id="exampleRadios1" value="Laki-Laki">
                                <label class="form-check-label" for="inlineCheckbox1">Laki - Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Gender" id="exampleRadios1" value="Perempuan">
                                <label class="form-check-label" for="inlineCheckbox2">Perempuan</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                            <input type="borncity" class="form-control" id="exampleFormControlInput1" name="borncity">
                        </div>
                        <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                        <div class="mb-3">
                            <input class="input--style-2 js-datepicker" type="text" placeholder="Tanggal lahir" name="birthday">
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar icon"></i>
                        </div>
                        <label for="exampleFormControlInput1" class="form-label">Status</label>
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example" name="familystatus">
                                <option selected>Pilih salah satu...</option>
                                <option value="Istri">Istri</option>
                                <option value="Anak">Anak</option>
                                <option value="Saudara">Saudara/Keponakan</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="submit" name="savedata">Save Changes</button>
                        </div>
                    </form>
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
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <!-- Main JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="../plugin/smartwizard/dist/js/jquery.smartWizard.min.js"></script>
    <script src="../plugin/datepicker/jquery-datetimepicker/build/jquery.datetimepicker.full.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/smartwizard.js"></script>
    <script src="js/datepicker.js"></script>
    <script src="js/datatable.js"></script>


</body>

</html>