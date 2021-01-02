<div class="container-fluid">
    <h4>Konfirmasi Pemesanan</h4>
    <table class="table table-bordered">
        <tr>
            <th>ID Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th colspan="3">Aksi</th>
        </tr>


        <?php
        $no = 1;
        foreach ($invoice as $inv) : ?>

            <tr>
                <td><?php echo $inv->id ?></td>
                <td><?php echo $inv->nama ?></td>
                <td><?php echo $inv->alamat ?></td>
                <td><?php echo $inv->tgl_pesan ?></td>
                <td><?php echo $inv->batas_bayar ?></td>
                <td><a onclick="deleteConfirm('<?php echo site_url('admin/konfirmasi_pembayaran/merubah_status/' . $inv->id) ?>')" href="#!" class="btn btn-sm btn-success"><i class="fas fa-check"></i></a></td>
                <td><a onclick="deleteConfirm('<?php echo site_url('admin/konfirmasi_pembayaran/merubah_status2/' . $inv->id) ?>')" href="#!" class="btn btn-sm btn-danger"><i class="fas fa-times-circle"></i></a></td>
                <td><?php echo anchor('admin/invoices/detail/' . $inv->id, '<div class="btn btn-sm btn-info"><i class="fas fa-info-circle"</div>') ?></td>
            </tr>

        <?php endforeach; ?>
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a id="btn-delete" class="btn btn-success" href="#">Sumbit</a>
                    </div>
                </div>
            </div>
        </div>
</div>
    </table>
</div>
<script>
    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }
</script>