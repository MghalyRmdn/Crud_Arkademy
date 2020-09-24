<div class="container-fluid">

    <div class="card" style="width: 50rem;">
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">
            <?php foreach ($produk as $prd) : ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= base_url('upload/' . $prd->gambar) ?>" class="card-img-top">
                    </div>
                    <div class="col-md-8">
                        <table class="table table-striped">
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
                </div>
            <?php endforeach; ?>

            <a href="<?= base_url('dashboard/to_chart/' . $prd->id) ?>" class="btn btn-primary mb-1"><i class="fas fa-cart-plus mr-1"></i>Tambah Ke Keranjang</a>
            <a href="<?= base_url('dashboard/index') ?>" class="btn btn-warning ml-1"> <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
    </div>
</div>