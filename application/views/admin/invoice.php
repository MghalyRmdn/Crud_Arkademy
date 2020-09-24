<div class="container-fluid">
    <div class="alert alert-primary text-center" role="alert"> <i class="fas fa-invoice"></i>
        Invoice Pemesanan Produk
    </div>
    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id Invoice</th>
                <th scope="col">Nama Pemesan</th>
                <th scope="col">Alamat Pengiriman</th>
                <th scope="col">Tanggal Pemesanan</th>
                <th scope="col">Batas Pembayaran</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($invoice as $inv) : ?>
                <tr>
                    <td><?= $inv->id ?></td>
                    <td><?= $inv->nama ?></td>
                    <td><?= $inv->alamat ?></td>
                    <td><?= $inv->tgl_pesan ?></td>
                    <td><?= $inv->batas_bayar ?></td>
                    <td>
                        <?= anchor('admin/invoice/detail/' . $inv->id, '<div class="btn btn-sm btn-info"> <i class="fas fa-eye mr-1"></i> detail</div>')  ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>