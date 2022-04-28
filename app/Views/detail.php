<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NVIDIA - Product</title>

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

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?= $produk['nama'] ?></h1>
                    </div>
                    <div>
                        <table class="table table-bordered">
                            <tr>
                                <td>Cuda Cores</td>
                                <td><?= $produk['cuda_cores'] ?></td>

                            </tr>
                            <tr>
                                <td>Boost Clock (GHz)</td>
                                <td><?= $produk['boost_clock'] ?></td>

                            </tr>
                            <tr>
                                <td>Base Clock (GHz)</td>
                                <td><?= $produk['base_clock'] ?></td>

                            </tr>
                            <tr>
                                <td>Tipe Memori</td>
                                <td><?= $produk['memory_type'] ?></td>
                            </tr>
                            <tr>
                                <td>Ukuran Memori</td>
                                <td><?= $produk['memory_size'] ?></td>
                            </tr>
                            <tr>
                                <td>Temperature Maksimal (C)</td>
                                <td><?= $produk['max_temp']?></td>
                            </tr>
                            <tr>
                                <td>GPU Power (W)</td>
                                <td><?= $produk['gpu_power']?></td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>

            <?= $this->include("template/footer") ?>

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