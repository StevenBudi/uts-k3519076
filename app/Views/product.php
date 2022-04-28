<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Latest Product | NVIDIA</title>

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
                        <h1 class="h3 mb-0 text-gray-800">GeForce RTX 30 Series</h1>
                    </div>
                    <form method="GET" action="" class="form-group">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="cari" placeholder="Type Here...">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="Submit">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div>
                        <table class="table table-bordered">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($produk as $barang) {
                                ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $barang['nama'] ?></td>
                                        <td><a href="<?= base_url('/product/' . $barang['id']) ?>" class="btn btn-success">Detail</a></td>
                                    </tr>
                                <?php
                                    $no++;
                                }

                                ?>
                            </tbody>
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