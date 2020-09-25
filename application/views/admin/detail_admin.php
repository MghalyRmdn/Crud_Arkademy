<div class="container-fluid">

    <div class="jumbotron">
        <?php foreach ($admin as $adm) : ?>
            <h1 class="display-5"> <i class="fas fa-info-circle"></i>Admin/Detail Data Admin </h1>
            <div class="row mt-2">
                <div class="container mb-2">
                    <img src="<?= base_url('upload/' . $adm->photo) ?>" class="rounded-circle">
                </div>
                <div class="col-md-8">
                    <table class="table table-striped table-active">
                        <tr>
                            <td>Nama Admin</td>
                            <td><strong><?= $adm->nama_admin ?></strong></td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td><strong><?= $adm->username ?></strong></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><strong><?= $adm->email ?></strong></td>
                        </tr>
                        <tr>
                            <td>No Rekening</td>
                            <td><strong><?= $adm->no_rekening ?></strong></td>
                        </tr>
                        <tr>
                            <td>Role</td>
                            <td><strong>
                                    <?php if ($adm->role_id == 1) { ?>
                                        <div class="text text-success">Sebagai Admin</div>
                                    <?php } else { ?>
                                        <div class="btn btn-sm btn-danger">Role Belum ada</div>
                                    <?php } ?>
                                </strong></td>
                        </tr>
                        <tr>
                            <td><?= anchor('admin/data_admin/edit/' . $adm->id, '<div class="btn btn-primary btn-sm ml-2 mt-3"><i class="fas fa-edit"></i>Update Data</div>') ?></td>
                            <td><a onclick="return confirm('Apakah anda yakin?')" href="<?= base_url('admin/data_admin/hapus/' . $adm->id) ?>">
                                    <div class="btn btn-sm btn-danger ml-2 mt-3"><i class="fas fa-trash-alt"></i> Hapus Admin</div>
                                </a></td>
                        </tr>
                    </table>
                </div>
            <?php endforeach; ?>
            </div>
    </div>