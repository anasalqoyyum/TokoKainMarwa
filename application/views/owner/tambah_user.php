<div class="container-fluid">
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
  <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_user"><i class="fas fa-plus fa-sm"></i> Tambah User</button>
  <table class="table table-bordered">
    <tr>
      <th>No</th>
      <th>Nama User</th>
      <th>Username</th>
      <th>Password</th>
      <th>Role</th>
      <th>Aksi</th>
    </tr>


    <?php
    $no = 1;
    foreach ($user as $user) : ?>

      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $user->nama ?></td>
        <td><?php echo $user->username ?></td>
        <td><?php echo $user->password ?></td>
        <td><?php echo $user->role ?></td>
        <td><a onclick="deleteConfirm('<?php echo site_url('owner/tambah_user/hapus/' . $user->id) ?>')" href="#!" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a></td>
      </tr>

    <?php endforeach; ?>

  </table>
</div>

<div class="modal fade" id="tambah_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url() . 'index.php/owner/tambah_user/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label for="">Nama User</label>
            <input type="text" name="nama" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="text" name="password" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Role</label>
            <select class="form-control" name="role">
              <option>admin</option>
              <option>owner</option>
            </select>
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