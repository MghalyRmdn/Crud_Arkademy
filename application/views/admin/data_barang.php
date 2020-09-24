<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-sm fa-plus-circle mr-1"></i>Tambah Data Barang</button>

    <span class="mt-2 p-2"><?= $this->session->flashdata('pesan') ?></span>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">NO</th>
                <th scope="col">NAMA BARANG</th>
                <th scope="col">KETERANGAN</th>
                <th scope="col">KATEGORI</th>
                <th scope="col">HARGA</th>
                <th scope="col">STOK</th>
                <th scope="col" colspan="3">AKSI</th>
            </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($produk as $prd) : ?>
            <tbody>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $prd->nama_produk ?></td>
                    <td><?= $prd->keterangan ?></td>
                    <td><?= $prd->kategori ?></td>
                    <td><?= $prd->harga ?></td>
                    <td><?= $prd->jumlah ?></td>
                    <td>
                        <a href="<?= base_url('admin/data_barang/detail_brg/' . $prd->id) ?>">
                            <div class="btn btn-info btn-sm"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </td>
                    <td>
                        <?= anchor('admin/data_barang/edit/' . $prd->id, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?>
                    </td>

                    <td>
                        <a onclick="return confirm('Apakah anda yakin?')" href="<?= base_url('admin/data_barang/hapus/' . $prd->id) ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            </tbody>
        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() . 'admin/data_barang/tambah_aksi' ?>" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="Nama Barang">Nama Barang</label>
                        <input type="text" name="nama_produk" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Keterangan">Keterangan</label>
                        <textarea type="text" name="keterangan" class="form-control" id="tambah_barang" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Kategori">Kategori</label>
                        <select class="form-control" name="kategori">
                            <option>Buku/Novel</option>
                            <option>Elektronik</option>
                            <option>Pakaian Pria</option>
                            <option>Pakaian Wanita</option>
                            <option>Pakaian Anak-anak</option>
                            <option>Peralatan Olahraga</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Harga">Harga</label>
                        <input type="text" name="harga" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Stok">Stok</label>
                        <input type="text" name="jumlah" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Gambar">Gambar Produk</label><br>
                        <input type="file" name="gambar" class="form-control">
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