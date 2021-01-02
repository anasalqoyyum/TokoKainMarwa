<div class="container-fluid">
    <br>
    <h4>Cart</h4>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Subtotal</th>
            <th>Action</th>
        </tr>

        <?php
        $no = 1;
        foreach ($this->cart->contents() as $items) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $items['name'] ?></td>
                <td><?php echo $items['qty'] ?></td>
                <td align="right">Rp<?php echo number_format($items['price'], 0, ',', '.') ?></td>
                <td align="right">Rp<?php echo number_format($items['subtotal'], 0, ',', '.') ?></td>
                <td><a onclick="deleteConfirm('<?php echo base_url('index.php/dashboard/hapus_keranjang_select/' . $items['rowid']) ?>')" href="#!" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a></td>
            </tr>


        <?php endforeach; ?>
        <tr>
            <td colspan="5"></td>
            <td align="right">Rp<?php echo number_format($this->cart->total(), 0, ',', '.') ?></td>
        </tr>
    </table>

    <div align="right">
        <a onclick="deleteConfirm('<?php echo base_url('index.php/dashboard/hapus_keranjang') ?>')" href="#!">
            <div class="btn btn-sm btn-danger">Hapus Keranjang</div>
        </a>
        <a href="<?php echo base_url('index.php/dashboard') ?>">
            <div class="btn btn-sm btn-primary">Lanjut Belanja</div>
        </a>
        <a href="<?php echo base_url('index.php/dashboard/pembayaran') ?>">
            <div class="btn btn-sm btn-success">Pembayaran</div>
        </a>
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Ingin Menghapus?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }
</script>