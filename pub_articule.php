<?php
// require 'controllers/securiteCon.php';
require 'controllers/pub_articuleCon.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pages / Login - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
    body {
        position: relative;
        right: -180px;
        margin-top: 35px;
    }
</style>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">
    <!-- faire appel à header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-toggle="">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="menu/index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="menu/blog.php" class="nav-link">Blog de vous</a>
                    </li>
                    <li class="nav-item">
                        <a href="menu/profil.php" class="nav-link">Profil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- faire appel à header -->

    <main>
        <div class="container ">

            <section class="section py-5">
                <div class="row">
                    <div class="col-lg-8">

                        <div class="card ">
                            <div class="card-body">
                                <h5 class="card-title text-center">Publication des articules</h5>

                                <!-- Advanced Form Elements -->
                                <form class="" method="post" enctype="multipart/form-data">
                                    <?php
                                    //code script php uniquement pour afficher le message d'erreur dans le code html
                                    if (isset($errorMsg)) {
                                        echo '<p style="color:red;">' . $errorMsg . '</p>';
                                    } elseif (isset($successMsg)) {
                                        echo '<p style="color: teal;">' . $successMsg . '</p>';
                                    }
                                    ?>
                                    <div class="row mb-5 ">
                                        <div class="input-group">
                                            <span class="input-group-text">Titre de l'article</span>
                                            <input type="text" name="titre" id="titre" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="input-group">
                                            <span class="input-group-text">Description</span>
                                            <textarea rows="5" cols="5" name="description" class="form-control"></textarea>
                                            <!-- <input type="datetime-local" name="dateVoyage" id="dateVoyage" class="form-control"> -->
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="input-group">
                                            <span class="input-group-text">Image</span>
                                            <input type="file" name="image" id="image" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="input-group">
                                            <button type="submit" class="btn btn-secondary" name="valider">Envoyer</button>
                                        </div>
                                    </div>

                            </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>

                </div>
        </div>
        </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <script>

    </script>

</body>

</html>
