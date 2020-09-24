<div class="container-fluid">
    <div class="alert alert-primary text-center" role="alert"> <i class="fas fa-eye"></i>
        Detail Pesanan <div class="badge badge-pill badge-success ml-2">No. Invoice: <?= $invoice->id; ?></div>
    </div>

    <table class="table table-striped table-bordered table-hover">
        <thead class="thead-light">
            <tr>
                <th scope="col">Id Barang</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Jumlah Pesanan</th>
                <th scope="col">Harga Satuan</th>
                <th scope="col">SUB-TOTAL</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $total = 0;
            foreach ($pesanan as $ps) :
                $subtotal = $ps->jumlah * $ps->harga;
                $total += $subtotal;
            ?>
                <tr>
                    <td><?= $ps->id_brg ?></td>
                    <td><?= $ps->nama_brg ?></td>
                    <td><?= $ps->jumlah ?></td>
                    <td>Rp.<?= number_format($ps->harga, 0, ',', '.') ?></td>
                    <td>Rp.<?= number_format($subtotal, 0, ',', '.') ?></td>
                </tr>
            <?php endforeach; ?>

            <tr>
                <td colspan="4" align="right">Grand Total</td>
                <td align="right">RP. <?= number_format($total, 0, ',', '.') ?></td>
            </tr>
        </tbody>
    </table>

    <a href="<?= base_url('admin/invoice/index') ?>">
        <div class="btn btn-sm btn-warning">Kembali</div>
    </a>
</div>