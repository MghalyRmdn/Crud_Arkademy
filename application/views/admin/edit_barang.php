<div class="container-fluid">
    <div class="alert alert-primary text-center" role="alert"> <i class="fas fa-edit"></i>
        Edit Data Barang
    </div>

    <?php foreach ($produk as $prd) : ?>
        <form action="<?= base_url() . 'admin/data_barang/update' ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>NAMA BARANG</label>
                <input type="hidden" name="id" value="<?= $prd->id ?>">
                <input type="text" name="nama_produk" class="form-control" value="<?= $prd->nama_produk ?>">
            </div>
            <div class="form-group">
                <label>KETERANGAN</label>
                <textarea type="text" name="keterangan" rows="3" id="tambah_barang" class="form-control"><?= $prd->keterangan ?></textarea>
            </div>
            <div class="form-group">
                <label>KATEGORI</label>
                <input type="text" name="kategori" class="form-control" value="<?= $prd->kategori ?>">
            </div>
            <div class="form-group">
                <label>HARGA</label>
                <input type="text" name="harga" class="form-control" value="<?= $prd->harga ?>">
            </div>
            <div class="form-group">
                <label>STOK</label>
                <input type="text" name="jumlah" class="form-control" value="<?= $prd->jumlah ?>">
            </div>
            <div class="form-group">
                <img src="<?= base_url('upload/' . $prd->gambar) ?>" width="25%">
                <br><br>
                <label>Foto</label><br>
                <input type="file" name="gambar" value="<?= $prd->gambar ?>">
            </div>
            <button type="submit" class="btn btn-sm btn-primary mt-3 mb-3">Simpan</button>
        </form>
    <?php endforeach; ?>
</div>