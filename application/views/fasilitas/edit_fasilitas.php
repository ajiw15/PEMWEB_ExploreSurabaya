<div class="container-fluid">

<div class="card">
  <div class="card-header" style="background-color:#2F8042; color: white;">
    Form Edit Data Fasilitas
  </div>
  <div class="card-body">
  	

	<form action="" method="post">
		 <input type="hidden" name="id_fasilitas" value="<?php echo $fasilitas['id_fasilitas']; ?>">
		<div class="form-group">
			<label>Kode Fasilitas</label>
			<input type="text" name="kode_fasilitas" placeholder="Mauskkan Kode Fasilitas" class="form-control" value="<?php  echo $fasilitas['kode_fasilitas'];?>">
			<small class="form-text text-danger"><?php echo form_error('kode_fasilitas'); ?></small>
		</div>
		<div class="form-group">
			<label>Nama Fasilitas</label>
			<input type="text" name="nama_fasilitas" placeholder="Mauskkan Nama Fasilitas" class="form-control" value="<?php  echo $fasilitas['nama_fasilitas'];?>">
			<small class="form-text text-danger"><?php echo form_error('nama_fasilitas'); ?></small>
		</div>

		<button type="submit" name="ubah" class="btn btn-primary float-right">Edit Data</button>
	</form>
    
  </div>
</div>

</div>