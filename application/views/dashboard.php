<style>
    .banner{
        height: 60vh;
        background: url('image/cnth-banner-dark.jpg');
        background-size: cover;
    }

    .banner-text{
        height: 100%;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .product-card {
      min-height: 430px; /* Atur tinggi minimum card */
    }

</style>

<!-- Banner -->
<div class="container-fluid banner">
    <div class="container banner-text col-lg-6">
        <div class="text-center">
            <p class="fs-1">
                Selamat Datang di Elta Collection
            </p>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, ipsum.
            </p>
        </div>
    </div>
</div>
<!-- End Banner -->

<div class="container-fluid mt-3">
    <div class="container">
        <div class="row">
            <?php foreach ($barang as $brg) : ?>

                <div class="col-lg-3 col-md-4 col-sm-6 mt-3" style="cursor: pointer;" onclick="window.location='<?php echo base_url().'/dashboard/detail/'.$brg->id_brg ?>'">
                    <div class="card product-card">
                        <img class="card-img-top" src="<?php echo base_url().'/image/produk/'.$brg->gambar ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $brg->nama_brg ?></h5>
                            <p class="card-text">Rp <?php echo number_format($brg->harga, 0, ',','.') ?></p>
                        </div>
                    </div>
                </div>

                
            <?php endforeach; ?>
        </div>
    </div>
</div>