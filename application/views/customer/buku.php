<div class="container-fluid">
    <span class="mt-2 p-2"><?= $this->session->flashdata('pesan') ?></span>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('assets/img/slider1.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/slider2.jpg') ?>" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <div class="row text-center mt-3">

        <?php foreach ($buku as $prd) : ?>
            <div class="card mr-2 ml-2 mb-2 mt-2" style="width: 19rem;">
                <img src="<?php echo base_url() . "/upload/" . $prd->gambar ?>" class="card-img-top" style="width: 303px; height:240px;">
                <div class="card-body bg-gradient-primary">
                    <h5 class="card-title mb-1 text-light"><?php echo $prd->nama_produk; ?></h5>
                    <hr>
                    <span class="badge badge-pill badge-info mb-3">Rp.<?php echo number_format($prd->harga, 0, ',', '.');  ?></span><br>
                    <a href="<?= base_url('dashboard/to_chart/' . $prd->id) ?>" class="btn btn-sm mr-1" id="btn-cart"><i class="fas fa-cart-plus"></i> Tambah Ke Keranjang</a>
                    <a href="<?= base_url('dashboard/detail/' . $prd->id) ?>" class="btn btn-sm ml-1" id="btn-detail"><i class="fas fa-search-plus"></i> Detail</a>
                </div>
            </div>
        <?php endforeach;  ?>
    </div>
</div>