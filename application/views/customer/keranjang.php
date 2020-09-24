<div class="container-fluid">
    <div class="alert alert-primary text-center" role="alert"> <i class="fas fa-shopping-cart"></i>
        Keranjang Belanja
    </div>

    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-light">
            <tr>
                <th scope="col">NO</th>
                <th scope="col">NAMA PRODUK</th>
                <th scope="col">JUMLAH</th>
                <th scope="col">HARGA</th>
                <th scope="col">Sub-Total</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($this->cart->contents() as $items) :
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $items['name'] ?></td>
                    <td><?php echo $items['qty'] ?></td>
                    <td align="right">Rp.<?php echo number_format($items['price'], 0, ',', '.') ?></td>
                    <td align="right">Rp.<?php echo number_format($items['subtotal'], 0, ',', '.') ?></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="4" class="text-right">Total Semua :</td>
                <td align="right">RP.<?php echo number_format($this->cart->total(), 0, ',', '.')  ?></td>
            </tr>
        </tbody>
    </table>

    <div align="right">
        <a href="<?= base_url('dashboard/delete_chart') ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Hapus Keranjang</a>
        <a href="<?= base_url('dashboard/index') ?>" class="btn btn-sm btn-primary"><i class="fas fa-cart-arrow-down"></i> Lanjutkan Belanja</a>
        <a href="<?= base_url('dashboard/pembayaran') ?>" class="btn btn-sm btn-success"><i class="fas fa-money-bill"></i> Pembayaran</a>
    </div>
</div>