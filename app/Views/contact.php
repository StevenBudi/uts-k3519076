<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact Us | NVIDIA</title>

    <link rel="shortcut icon" href="<?= base_url("img/nvidia.ico") ?>" type="image/x-icon">
    <link href="<?= base_url("vendor/fontawesome-free/css/all.min.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i") ?>" rel="stylesheet">

    <link href="<?= base_url("css/sb-admin-2.min.css") ?>" rel="stylesheet">

    <style>
        .nvidia-title-style{
            text-align: center;
            color: #76B900;
        }
    </style>


</head>

<body id="page-top">

    <div id="wrapper">

        <?= $this->include('template/sidebar') ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content" style="min-height:100vh; display:flex; flex-direction:column; 
            justify-content:space-between;">

                <div class="container-fluid" style="padding: 2em;">

                    <div>
                        <h1 class="nvidia-title-style">NVIDIA SUPPORT</h1>
                        <p style="text-align: center;">NVIDIA’s support services are designed to meet the needs of both the consumer and enterprise customer, with multiple options to help ensure an exceptional customer experience. Please select the appropriate option below to learn more.</p>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title nvidia-title-style">Consumer Support</h5>
                                    <p class="card-text">

                                        Find support for products such as:

                                    <ul>
                                        <li>GeForce Graphics Cards</li>
                                        <li>GeForce NOW</li>
                                        <li>NVIDIA SHIELD</li>
                                        <li>Jetson Kits</li>
                                    </ul>

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title nvidia-title-style">Enterprise Support</h5>
                                    <p class="card-text">
                                        Find support for enterprise-level products such as:

                                    <ul>
                                        <li>NVIDIA DGX™ systems</li>
                                        <li>Virtual GPU (vGPU) solutions</li>
                                        <li>NGC-Ready™ servers</li>
                                    </ul>

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title nvidia-title-style">Networking Support</h5>
                                    <p class="card-text">
                                        Find support for NVIDIA Networking products such as:
                                    <ul>
                                        <li>Data Processing Unit (DPU)</li>
                                        <li>InfiniBand and Ethernet Adapters</li>
                                        <li>InfiniBand and Ethernet Switches</li>
                                        <li>Interconnect</li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title nvidia-title-style">NVIDIA Academy</h5>
                                    <p class="card-text">
                                        Access Enterprise Solutions training for IT Professionals
                                    <ul>

                                        <li>Free and For-Fee Training</li>
                                        <li>Professional Articles</li>
                                        <li>Video Tutorials</li>
                                        <li>On-site and Remote Training</li>

                                    </ul>
                                    </p>
                                </div>
                            </div>
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