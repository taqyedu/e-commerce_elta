<div class="container-fluid mt-3">
    <div class="container" style="color:#000000">
        <form action="<?php echo base_url(). 'admin/data_barang/aksi_tambah';?>" method="post" enctype="multipart/form-data">
            <div class="form group">
                <label>Nama Barang</label>
                <input type="text" name="nama_brg" class="form-control">
            </div>

            <div class="form group">
                <label>Keterangan</label>
                <textarea id="keterangan" name="keterangan" class="form-control"></textarea>
            </div>

            <div class="form group">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control">
            </div>

            <div class="form group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control">
            </div>

            <div class="form group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control">
            </div>

            <div class="form group">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control">
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-md btn-primary">Simpan</button>
            </div>
        </form>

        
    </div>
</div>