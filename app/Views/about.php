<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>About Us | NVIDIA</title>

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

                    <h1 style="text-align: center;color: #76B900;">About Us</h1>
                    <p style="text-align: center;">
                        Nvidia was founded on April 5, 1993, by Jensen Huang (CEO as of 2022), a Taiwanese-American, previously director of CoreWare at LSI Logic and a microprocessor designer at Advanced Micro Devices (AMD), Chris Malachowsky, an electrical engineer who worked at Sun Microsystems, and Curtis Priem, previously a senior staff engineer and graphics chip designer at Sun Microsystems.

                        In 1993, the three co-founders believed that the proper direction for the next wave of computing was accelerated or graphics-based computing because it could solve problems that general-purpose computing could not. They also observed that video games were simultaneously one of the most computationally challenging problems and would have incredibly high sales volume. Video games became the company's flywheel to reach large markets and funding huge R&D to solve massive computational problems. With only $40,000 in the bank, the company was born. The company subsequently received $20 million of venture capital funding from Sequoia Capital and others.[27] Nvidia initially had no name and the co-founders named all their files NV, as in "next version". The need to incorporate the company prompted the co-founders to review all words with those two letters, leading them to "invidia", the Latin word for "envy". Nvidia went public on January 22, 1999.
                    </p>
                    <img style="width: 800px;" src="<?=base_url('/img/logo-nvidia.png')?>">
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