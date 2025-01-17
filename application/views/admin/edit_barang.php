<div class="container-fluid mt-3">
    <div class="container" style="color:#000000">
        <h3>Edit Data Barang</h3>
        <?php foreach($barang as $brg) : ?>
            <form method="post" action="<?php echo base_url().'admin/data_barang/update' ?>">
                <div class="form group">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg ?>">
                </div>

                <div class="form group">
                    <label>Keterangan</label>
                    <input type="hidden" name="id_brg" class="form-control" value="<?php echo $brg->id_brg ?>">
                    <textarea id="keterangan" name="keterangan" class="form-control" style="height:200px;"><?php echo $brg->keterangan ?></textarea>
                </div>

                <div class="form group">
                    <label>Kategori</label>
                    <input type="text" name="kategori" class="form-control" value="<?php echo $brg->kategori ?>">
                </div>

                <div class="form group">
                    <label>Harga</label>
                    <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
                </div>

                <div class="form group">
                    <label>Stok</label>
                    <input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                </div>
            </form>
        <?php endforeach; ?>
    </div>
</div>