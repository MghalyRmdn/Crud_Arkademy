<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-center">
            <div class="btn btn-sm btn-info">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }

                    echo "<div class='alert alert-success ' role='alert'>
                    Total Belanja Anda: Rp." . number_format($grand_total, 0, ',', '.') . "</div>";
                }
                ?>
            </div>
            <br><br>
            <h3 class="text-dark"> <i class="fas fa-file-alt"></i> Input Alamat Pengiriman dan Pembayaran</h3>
            <form action="<?= base_url('dashboard/proses_pesanan') ?>" method="POST" align="left">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Masukan Nama Lengkap" class="form-control">
                </div>
                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Masukan Alamat Lengkap" class="form-control">
                </div>
                <div class="form-group">
                    <label>NO Telepon</label>
                    <input type="text" name="no_telp" placeholder="Nomor Telepon" class="form-control">
                </div>
                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control">
                        <option value="">JNE</option>
                        <option value="">J&T</option>
                        <option value="">SI CEPAT</option>
                        <option value="">POS INDONESIA</option>
                        <option value="">GOJEK</option>
                        <option value="">GRAB</option>
                        <option value="">ANTERIN</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Pilih Bank</label>
                    <select class="form-control" s>
                        <option value="">BCA - 0650 0522 312541</option>
                        <option value="">BNI - 0544 56441 2305</option>
                        <option value="">BRI - 0644 2331 20558</option>
                        <option value="">MANDIRI - 8944 6523 0554</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary">Order Sekarang</button>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>