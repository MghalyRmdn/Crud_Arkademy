<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion mt-5" id="accordionSidebar">
            <br>
            <br>

            <!-- Sidebar - Brand -->
            <div class="col-md-14">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Produk" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-info" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                    </div>
                </div>


                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('dashboard') ?>">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Kategori
                </div>



                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('kategori/elektronik') ?>">
                        <i class="fas fa-fw fa-tv"></i>
                        <span>Elektronik</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('kategori/buku') ?>">
                        <i class="fas fa-fw fa-tv"></i>
                        <span>Buku/Novel</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('kategori/pakaian_pria') ?>">
                        <i class="fas fa-fw fa-tshirt"></i>
                        <span>Pakaian Pria</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('kategori/pakaian_wanita') ?>">
                        <i class="fab fa-fw fa-shopify"></i>
                        <span>Pakaian Wanita</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('kategori/pakaian_anak2') ?>">
                        <i class="fas fa-fw fa-child"></i>
                        <span>Pakaian Anak-Anak</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('kategori/peralatan_olahraga') ?>">
                        <i class="fas fa-fw fa-futbol"></i>
                        <span>Peralatan Olahraga</span></a>
                </li>
            </div>
        </ul>
        <!-- End of Sidebar -->