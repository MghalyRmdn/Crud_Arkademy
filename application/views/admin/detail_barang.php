<div class="container-fluid">

    <div class="jumbotron">
        <?php foreach ($produk as $prd) : ?>
            <h1 class="display-5"> <i class="fas fa-info-circle"></i>Admin/Detail Produk </h1>
            <div class="row mt-2">
                <div class="col-md-4">
                    <img src="<?= base_url('upload/' . $prd->gambar) ?>" class="card-img-top">
                </div>
                <div class="col-md-8">
                    <table class="table table-striped table-active">
                        <tr>
                            <td>Nama Produk</td>
                            <td><strong><?= $prd->nama_produk ?></strong></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td><strong><?= $prd->keterangan ?></strong></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td><strong><?= $prd->kategori ?></strong></td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td><strong><?= $prd->jumlah ?></strong></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><strong>
                                    <div class="btn btn-sm btn-success">Rp. <?= number_format($prd->harga, 0, ',', '.') ?></div>
                                </strong></td>
                        </tr>
                    </table>
                </div>

                <?= anchor('admin/data_barang/edit/' . $prd->id, '<div class="btn btn-primary btn-sm ml-2 mt-3"><i class="fas fa-edit"></i>Update Barang</div>') ?>

                <a onclick="return confirm('Apakah anda yakin?')" href="<?= base_url('admin/data_barang/hapus/' . $prd->id) ?>">
                    <div class="btn btn-sm btn-danger ml-2 mt-3"><i class="fas fa-trash-alt"></i> Hapus Barang</div>
                </a>

            </div>
        <?php endforeach; ?>
    </div>
</div>