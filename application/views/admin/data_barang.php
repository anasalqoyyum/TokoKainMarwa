<div class="container-fluid">
  <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
    </div>

    <?php if ($this->session->flashdata('success')) : ?>
      <div class="alert alert-success" role="alert">
        <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span></button>
        <?php echo $this->session->flashdata('success'); ?>
      </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata('form_error')) : ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $this->session->flashdata('form_error'); ?>
      </div>
    <?php endif; ?>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered dataTable" id="example1" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Barang</th>
              <th>Kategori</th>
              <th>Keterangan</th>
              <th>Harga</th>
              <th>Stok</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($barang as $brg) : ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $brg->nama_brg ?></td>
                <td><?php echo $brg->kategori ?></td>
                <td><?php echo $brg->keterangan ?></td>
                <td><?php echo $brg->harga ?></td>
                <td><?php echo $brg->stok ?></td>
                <td>
                  <a href="<?php echo site_url('admin/data_barang/edit/' . $brg->id_brg) ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                  <a onclick="deleteConfirm('<?php echo site_url('admin/data_barang/hapus/' . $brg->id_brg) ?>')" href="#!" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Input Barang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url() . 'index.php/admin/data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label for="">Nama Barang</label>
              <input type="text" name="nama_brg" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Kategori</label>
              <select class="form-control" name="keterangan">
                <option>Daster</option>
                <option>Sedress</option>
                <option>Longdress</option>
                <option>Gamis</option>
              </select>
            </div>
            <div class="form-group">
              <label for="">Keterangan</label>
              <input type="text" name="kategori" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Harga</label>
              <input type="text" name="harga" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Stok</label>
              <input type="text" name="stok" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Gambar Produk</label><br>
              <input type="file" name="gambar" class="form-control">
            </div>


            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>

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