<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>Edit Profile</h3>
    <?php if ($this->session->flashdata('error')) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>
    <form action="<?php echo base_url('index.php/admin/edit_profile/update') ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="1" />
        <input type="hidden" name="role" value="admin" />
        <input type="hidden" name="nama" value="Ikhsan" />
        <div class="form-group">
            <label for="username">Username*</label>
            <input class="form-control" type="text" name="username" placeholder="Username" value="admin" />
        </div>
        <div class="form-group">
            <label for="password">Password*</label>
            <input class="form-control" type="password" name="password" placeholder="Password" value="" />
        </div>
        <input class="btn btn-success" type="submit" name="btn" value="Simpan" />
    </form>
</div>