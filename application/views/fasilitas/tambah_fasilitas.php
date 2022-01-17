<div class="container-fluid">

<div class="card">
  <div class="card-header" style="background-color:#2F8042; color: white;">
    Form Tambah Data Fasilitas
  </div>
  <div class="card-body">
  	 	

	<form action="" method="post">
		<div class="form-group">
			<label>Kode Fasilitas</label>
			<input type="text" name="kode_fasilitas" placeholder="Masukkan Kode Fasilitas" class="form-control">
			<small class="form-text text-danger"><?php echo form_error('kode_fasilitas'); ?></small>
		</div>
		<div class="form-group">
			<label>Nama Fasilitas</label>
			<input type="text" name="nama_fasilitas" placeholder="Masukkan Nama Fasilitas" class="form-control">
			<small class="form-text text-danger"><?php echo form_error('nama_fasilitas'); ?></small>
		</div>

		<button type="submit" name="input" class="btn btn-primary float-right">Tambah Data</button>
	</form>
    
  </div>
</div>

</div>