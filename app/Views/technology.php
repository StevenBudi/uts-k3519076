<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Latest Technologies | NVIDIA</title>

    <link rel="shortcut icon" href="<?= base_url("img/nvidia.ico") ?>" type="image/x-icon">
    <link href="<?= base_url("vendor/fontawesome-free/css/all.min.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i") ?>" rel="stylesheet">

    <link href="<?= base_url("css/sb-admin-2.min.css") ?>" rel="stylesheet">


</head>

<body id="page-top">

    <div id="wrapper">

        <?= $this->include('template/sidebar') ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <div class="container-fluid">

                    <h1 style="text-align: center;color: #76B900;">Our Technologies</h1>

                    <div style="padding: 1em;">
                        <table class="table table-bordered">
                            <thead>
                                <th>No</th>
                                <th>Product</th>
                                <th>Technology</th>
                                <th>Description</th>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($api_res as $response) {
                                ?>
                                    <tr>
                                        <td><?= $response['id'] ?></td>
                                        <td><img style="width: 200px;" src="<?= $response['thumbnail'] ?>"></td>
                                        <td><?= $response['teknologi'] ?></td>
                                        <td><?= $response['deskripsi'] ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?= $this->include("template/footer") ?>
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

</body>

</html>