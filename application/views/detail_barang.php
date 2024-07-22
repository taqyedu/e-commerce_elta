<div class="container-fluid mt-3">
    <div class="container">
        <div class="card">
            <h5 class="card-header">Detail Produk</h5>
            <div class="card-body">
                <?php foreach($barang as $brg): ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo base_url().'/image/produk/'.$brg->gambar ?>" class="card-img-top">
                    </div>

                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td><strong>Nama Produk</strong></td>
                                <td>
                                    <?php echo $brg->nama_brg ?>
                                </td>
                            </tr>

                            <tr>
                                <td><strong>Kategori</strong></td>
                                <td>
                                    <?php echo $brg->kategori ?>
                                </td>
                            </tr>

                            <tr>
                                <td><strong>Stok</strong></td>
                                <td>
                                    <?php echo $brg->stok ?>
                                </td>
                            </tr>

                            <tr>
                                <td><strong>Harga</strong></td>
                                <td>
                                    <div class="btn btn-secondary">
                                        Rp <?php echo number_format($brg->harga,0,',','.') ?>
                                    </div>
                                </td>
                            </tr>

                        </table>
                        <div class="mt-4">
                            <?php echo anchor('dashboard/tambah_keranjang/'.$brg->id_brg,'<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                        </div>

                        <div class="mt-5" style="white-space: pre"><strong>Keterangan</strong><br><br><?php echo $brg->keterangan ?>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>