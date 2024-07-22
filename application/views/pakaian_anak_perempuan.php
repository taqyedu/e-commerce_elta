<div class="container-fluid mt-3">
    <div class="container">
        <div class="row">
            <?php foreach ($pakaian_anak_perempuan as $brg) : ?>

                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo base_url().'/image/produk/'.$brg->gambar ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $brg->nama_brg ?></h5>
                            <p class="card-text">Rp <?php echo number_format($brg->harga, 0, ',','.') ?></p>
                            <?php echo anchor('dashboard/tambah_keranjang/'.$brg->id_brg,'<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                            <?php echo anchor('dashboard/detail/'.$brg->id_brg,'<div class="btn btn-sm btn-success">Detail</div>') ?>
                        </div>
                    </div>
                </div>

                
            <?php endforeach; ?>
        </div>
    </div>
</div>