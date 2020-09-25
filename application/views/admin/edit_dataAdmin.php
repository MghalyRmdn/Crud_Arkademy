<div class="container-fluid">
    <div class="alert alert-primary text-center" role="alert"> <i class="fas fa-edit"></i>
        Edit Data Admin
    </div>

    <?php foreach ($admin as $adm) : ?>
        <form action="<?= base_url() . 'admin/data_admin/update' ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama Admin</label>
                <input type="hidden" name="id" value="<?= $adm->id ?>">
                <input type="text" name="nama_admin" class="form-control" value="<?= $adm->nama_admin ?>">
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?= $adm->username ?>">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" name="password" class="form-control" value="<?= $adm->password ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="<?= $adm->email ?>">
            </div>
            <div class="form-group">
                <label>Nomor Rekening</label>
                <input type="text" name="no_rekening" class="form-control" value="<?= $adm->no_rekening ?>">
            </div>
            <div class="form-group">
                <img src="<?= base_url('upload/' . $adm->photo) ?>" width="100px" class="rounded">
                <br><br>
                <label>Foto</label><br>
                <input type="file" name="photo" value="<?= $adm->photo ?>">
            </div>
            <button type="submit" class="btn btn-sm btn-primary mt-3 mb-3">Simpan</button>
        </form>
    <?php endforeach; ?>
</div>