<div class="container-fluid">
<br>    
<div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php 
                $grand_total = 0;
                if ($keranjang = $this->cart->contents())
                {
                    foreach ($keranjang as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                    }

                echo "<h4>Total Belanja Anda: Rp. ". number_format($grand_total,  0,',','.');
                 ?>
            </div><br><br>

            <h3>Input Halaman Pengiriman dan Pembayaran</h3>

            <form method="post" action="<?php echo base_url('index.php/dashboard/proses_pesanan') ?> ">

            <div class="form-group">
                <label for="">Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Alamat Lengkap</label>
                <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
            </div>

            <div class="form-group">
                <label for="">No. Telepon</label>
                <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
            </div>

            <div class="form-group">
                <label for="">REMINDER</label>
                <td>HARGA BELUM TERMASUK ONGKIR</td>
            </div>

            <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>

            </form>

            <?php 
                }else{
                echo "<h5>Keranjang Belanja anda Kosong";
            }?>
        </div>

        
        <div class="col-md-2"></div>
    </div>
</div>