<div class="container-fluid mt-3">
    <div class="container">
        <h4><div class="btn btn-sm btn-secondary">Detail Pesanan untuk Nomor Invoice : <?php echo $invoices->id ?></div></h4>

        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th>ID BARANG</th>
                <th>NAMA PRODUK</th>
                <th>JUMLAH PESANAN</th>
                <th>HARGA SATUAN</th>
                <th>SUB TOTAL</th>
            </tr>

            <?php
            $total = 0;
            foreach ($pesanan as $psn):
                $subtotal = $psn->jumlah * $psn->harga;
                $total += $subtotal;
            ?>

            <tr>
                <td><?php echo $psn->id_brg ?></td>
                <td><?php echo $psn->nama_brg ?></td>
                <td><?php echo $psn->jumlah ?></td>
                <td>Rp <?php echo number_format($psn->harga,0,',','.') ?></td>
                <td>Rp <?php echo number_format($subtotal,0,',','.') ?></td>
            </tr>

            <?php endforeach; ?>

            <tr>
                <td colspan="4" align="right">Jumlah Total</td>
                <td align="right">Rp <?php echo number_format($total,0,',','.') ?></td>
            </tr>
        </table>

        <a href="<?php echo base_url('admin/invoices/index') ?>"><button class="btn btn-sm btn-danger">Kembali</button></a>
    </div>
</div>