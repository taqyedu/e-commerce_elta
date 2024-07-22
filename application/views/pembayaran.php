<div class="container-fluid">
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="text-center">
                    <div class="btn btn-sm btn-success">
                        <?php
                        $grand_total =0;
                        if ($keranjang = $this->cart->contents()){
                            foreach ($keranjang as $items){
                                $grand_total = 20000 + $grand_total + $items['subtotal'];
                            }
                            echo "<h4>Total Belanja Anda Rp ".number_format($grand_total, 0, ',','.');
                        
                        
                        ?>
                    </div>
                </div><br><br>
                
                <h3 class="text-start" style="color:black">Input alamat pengiriman dan pembayaran</h3>

                <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">
                    <div class="form-group mt-3">
                        <label class="text-start" style="color:black">Nama Lengkap</label>
                        <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap Anda">
                    </div>

                    <div class="form-group mt-3">
                        <label class="text-start" style="color:black">Alamat Lengkap</label>
                        <input class="form-control" type="text" name="alamat" placeholder="Alamat Lengkap Anda">
                    </div>

                    <div class="form-group mt-3">
                        <label class="text-start" style="color:black">No Telepon</label>
                        <input class="form-control" type="text" name="no_tlpn" placeholder="Nomor Telepon Anda">
                    </div>

                    <div class="form-group mt-3">
                        <label class="text-start" style="color:black">Jasa Pengiriman</label>
                        <select class="form-control" name="ekpedisi">
                            <option>JNE</option>
                            <option>JNT</option>
                            <option>TIKI</option>
                            <option>POS Indonesia</option>
                        </select>
                    </div>

                    <div class="form-group mt-3">
                        <label class="text-start" style="color:black">Pilih Bank</label>
                        <select class="form-control" name="pembayaran">
                            <option>BCA - xxxxx</option>
                            <option>BNI - xxxxx</option>
                            <option>BRI - xxxxx</option>
                            <option>Mandiri - xxxxx</option>
                        </select>
                    </div>

                    <div class="form group mt-3">
                        <label class="text-start" style="color:black">Foto Bukti Pembayaran</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>

                    <button type="submit" class="text-start btn btn-sm btn-primary mt-3">Pesan</button>

                </form>
                <?php
            } else{
                echo "<h4>Keranjang Belanja Anda Masih Kosong";
            }
                ?>
            </div>

            
            <div class="col-md-2"></div>
        </div>
    </div>
</div>