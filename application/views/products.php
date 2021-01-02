<div class="container-fluid">
        <div class="row text-center">
    <br>
    <?php foreach ($barang as $brg) : ?>
    <br>
    <br>
    <br>
      <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="<?php echo base_url().'assets/images/'.$brg->gambar ?>" alt=""></a>
              <div class="down-content">
                <a href="#"><h4><?php echo $brg->nama_brg ?></h4></a>
                <h6 class="badge badge-success">Rp. <?php echo $brg->harga ?></h6>
                <p><h5 class="card-title"><?php echo $brg->keterangan ?></p>
                <?php echo anchor('dashboard/tambah_ke_keranjang/' .$brg->id_brg, '<div class= "btn btn-sm btn-primary">Tambahkan ke Keranjang</div>') ?>
                <?php echo anchor('dashboard/detail/' .$brg->id_brg, '<div class= "btn btn-sm btn-success">Detail</div>') ?>
              </div>
            </div>
          </div>
  <?php endforeach ?>
  </div>
</div>