<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Invoice Pemesanan Produk</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered dataTable" id="example1" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Invoice</th>
                            <th>Nama Pemesan</th>
                            <th>Alamat Pengiriman</th>
                            <th>Tanggal Pemesanan</th>
                            <th>Batas Pembayaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($invoice as $inv) { ?>
                        <tr>
                            <td><?php echo $inv->id ?></td>
                            <td><?php echo $inv->nama ?></td>
                            <td><?php echo $inv->alamat ?></td>
                            <td><?php echo $inv->tgl_pesan ?></td>
                            <td><?php echo $inv->batas_bayar ?></td>
                            <td><?php echo anchor('admin/invoices/detail/' . $inv->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
                        </tr>
                    <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>