<div class="container-fluid">

<div class="card">
  <div class="card-header" style="background-color:#2F8042; color: white;">
    Form Edit Data Kategori
  </div>
  <div class="card-body">
  	

	<form action="" method="post">
		 <input type="hidden" name="id_kategori" value="<?php echo $kategori['id_kategori']; ?>">
		<div class="form-group">
			<label>Kode Kategori</label>
			<input type="text" name="kode_kategori" placeholder="Mauskkan Kode Kategori" class="form-control" value="<?php  echo $kategori['kode_kategori'];?>">
			<small class="form-text text-danger"><?php echo form_error('kode_kategori'); ?></small>
		</div>
		<div class="form-group">
			<label>Nama Kategori</label>
			<input type="text" name="nama_kategori" placeholder="Mauskkan Nama Kategori" class="form-control" value="<?php  echo $kategori['nama_kategori'];?>">
			<small class="form-text text-danger"><?php echo form_error('nama_kategori'); ?></small>
		</div>

		<button type="submit" name="ubah" class="btn btn-primary float-right">Edit Data</button>
	</form>
    
  </div>
</div>

</div>