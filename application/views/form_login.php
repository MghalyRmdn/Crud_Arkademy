<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9 mt-5">
                <?php echo $this->session->flashdata('pesan') ?>

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Form Login!</h1>
                                    </div>
                                    <form class="user" method="POST" action="<?= base_url('auth/login') ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Username Anda" name="username">
                                            <?= form_error('username', '<div class="text-danger small ml-2">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                                            <?= form_error('password', '<div class="text-danger small ml-2">', '</div>'); ?>
                                        </div>
                                        <button type="submit" class="btn btn-primary form-control">Login</button>
                                    </form>
                                    <div class="text-center">
                                        <a class="btn btn-sm" href="<?= base_url('registrasi/index') ?>" id="btn-login">Membuat Akun Baru!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>



</body>

</html>