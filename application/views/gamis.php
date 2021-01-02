<div class="container-fluid">
  <div class="row text-center mt-3">
    <?php foreach ($data->result() as $brg) : ?>

      <div class="card ml-3" style="width: 14rem;">
        <img src="<?php echo base_url() . 'assets/images/' . $brg->gambar ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $brg->nama_brg ?></h5>
          <small><?php echo $brg->keterangan ?></small><br>
          <span class="badge badge-pill badge-success mb-3">Rp. <?php echo $brg->harga ?></span>
          <?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class= "btn btn-sm btn-primary">Tambahkan ke Keranjang</div>') ?>
          <?php echo anchor('dashboard/detail/' . $brg->id_brg, '<div class= "btn btn-sm btn-success">Detail</div>') ?>
        </div>
      </div>

    <?php endforeach ?>
  </div>
  <!-- <div class="row justify-content-md-center">
    <div class="col"> -->
      <!--Tampilkan pagination-->
      <!-- <?php echo $pagination; ?> -->
    <!-- </div>
  </div> -->
</div>