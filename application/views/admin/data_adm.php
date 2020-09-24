<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_data"><i class="fas fa-sm fa-plus-circle mr-1"></i>Tambah Data Admin</button>

    <span class="mt-2 p-2"><?= $this->session->flashdata('pesan') ?></span>
    <table class="table table-bordered table-responsive">
        <thead class="thead-dark">
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Photo</th>
                <th scope="col">Nama Admin</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">No.Rekening</th>
                <th scope="col" colspan="3">AKSI</th>
            </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($admin as $adm) : ?>
            <tbody>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><img width="120px" class="rounded" src="<?= base_url('upload/' . $adm->photo) ?>" alt="GO-Back"></td>
                    <td><?= $adm->nama ?></td>
                    <td><?= $adm->username ?></td>
                    <td><?= $adm->email ?></td>
                    <td><?= md5($adm->password)  ?></td>
                    <td><?= $adm->no_rekening ?></td>
                    <td>
                        <?= anchor('admin/data_admin/edit/' . $adm->id, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?>
                    </td>

                    <td>
                        <a onclick="return confirm('Apakah anda yakin?')" href="<?= base_url('admin/data_admin/hapus/' . $adm->id) ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            </tbody>
        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input Data Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() . 'admin/data_admin/tambah_aksi' ?>" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="Nama Admin">Nama Admin</label>
                        <input type="text" name="nama" class="form-control">
                        <?= form_error('nama', '<div class="text-danger small ml-2">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="Username">Username</label>
                        <input type="text" name="username" class="form-control">
                        <?= form_error('username', '<div class="text-danger small ml-2">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="Email">email</label>
                        <input type="text" name="email" class="form-control">
                        <?= form_error('email', '<div class="text-danger small ml-2">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="Nomor rekening">No.rekening</label><br>
                        <input type="text" name="no_rekening" class="form-control">
                        <?= form_error('no_rekening', '<div class="text-danger small ml-2">', '</div>'); ?>

                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                        <?= form_error('password', '<div class="text-danger small ml-2">', '</div>'); ?>

                    </div>
                    <div class="form-group">

                        <div class="form-group">
                            <label for="password">Role ID</label>
                            <select name="role_id">
                                <option value="1">Admin</option>
                            </select>
                            <?= form_error('password', '<div class="text-danger small ml-2">', '</div>'); ?>

                        </div>
                        <div class="form-group">
                            <label>Photo</label><br>
                            <input type="file" name="photo" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger" data-dismiss="modal">Hapus</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>