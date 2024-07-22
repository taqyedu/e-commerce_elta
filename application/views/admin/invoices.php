<div class="container-fluid mt-3">
    <div class="container">
        <h4>Invoice Pemesanan</h4>

        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th>Id Invoice</th>
                <th>Nama Pemesanan</th>
                <th>Alamat Pengiriman</th>
                <th>Tanggal Pemesanan</th>
                <th>Batas Pemabayaran</th>
                <th>Aksi</th>
            </tr>

            <?php foreach ($invoices as $inv): ?>
            <tr>
                <td><?php echo $inv->id ?></td>
                <td><?php echo $inv->nama ?></td>
                <td><?php echo $inv->alamat ?></td>
                <td><?php echo $inv->tgl_pesan ?></td>
                <td><?php echo $inv->batas_bayar ?></td>
                <td><?php echo anchor('admin/invoices/detail/'.$inv->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>