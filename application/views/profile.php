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
    <form action="<?php echo base_url('admin/edit_profile') ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $user->id ?>" />
        <input type="hidden" name="role" value="<?php echo $user->role ?>" />
        <input type="hidden" name="nama" value="<?php echo $user->nama ?>" />
        <div class="form-group">
            <label for="username">Username*</label>
            <input class="form-control" type="text" name="username" placeholder="Username" value="<?php echo $user->username ?>" />
        </div>
        <div class="form-group">
            <label for="password">Password*</label>
            <input class="form-control" type="password" name="password" placeholder="Password" value="" />
        </div>
        <input class="btn btn-success" type="submit" name="btn" value="Simpan" />
    </form>
</div>