<div class="container-fluid mt-3">
    <div class="container">
        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/data_barang/tambah_barang') ?>">Tambah Barang <i class="bi bi-plus"></i></a>

        <table class="mt-3 table table-bordered table-hover table-striped">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Keterangan</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th colspan="3">Aksi</th>
            </tr>

            <?php
            $no=1;
            foreach ($barang as $brg) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $brg->nama_brg ?></td>
                <td><?php echo $brg->keterangan ?></td>
                <td><?php echo $brg->kategori ?></td>
                <td><?php echo $brg->harga ?></td>
                <td><?php echo $brg->stok ?></td>
                <td><?php echo anchor('admin/data_barang/edit/'.$brg->id_brg, '<div class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i></div>') ?></td>
                <td><?php echo anchor('admin/data_barang/hapus/'.$brg->id_brg, '<div class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></div>') ?></td>
                <td><div class="btn btn-sm btn-success"><i class="bi bi-search"></i></div></td>
                
            </tr>

            <?php endforeach; ?>
        </table>
    </div>
</div>