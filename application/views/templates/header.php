<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $judul; ?></title>
    <!-- custom dashboard cs -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/self.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/styling.css') ?>" />

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>

<body id="page-top">
    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-gradient-dark fixed-top">
        <div class="container">
            <h3><i class="fas fa-cart-plus text-light mr-2"></i></h3>
            <a class="navbar-brand font-weight-bold" href="#">Come Shop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-4">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('dashboard/index') ?>">Beranda<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Reseller<span class="sr-only">(current)</span></a>
                    </li>


                    <li class="nav-item active">
                        <a class="nav-link" href="#">Hadiah<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Bantuan<span class="sr-only">(current)</span></a>
                    </li>
                    <?php if ($this->session->userdata('username')) { ?>
                        <li class="nav-item active">
                            <div>Selamat Datang <?= $this->session->userdata('username'); ?></div>
                        </li>
                        <li class="nav-item active"><?= anchor('auth/logout', 'Keluar') ?></li>
                    <?php } else { ?>
                        <li class="nav-item active mt-2 ml-1"><?= anchor('auth/login', 'Belum Masuk'); ?></li>
                    <?php } ?>
                    <div class="icon mt-2">
                        <h5>
                            <?php
                            $keranjang = "<i class='fas fa-cart-plus ml-3 mr-2' data-toggle='tooltip' title='Keranjang Belanja'></i> " . $this->cart->total_items() . "items"
                            ?>

                            <?php echo anchor('dashboard/detail_cart/', $keranjang)  ?>
                            <i class="fas fa-bell ml-2" data-toggle="tooltip" title="Notif"></i>
                        </h5>
                    </div>


                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->