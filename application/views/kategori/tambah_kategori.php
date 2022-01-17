<div class="container-fluid">

<div class="card">
  <div class="card-header" style="background-color:#2F8042; color: white;">
    Form Tambah Data Kategori
  </div>
  <div class="card-body">
  	

	<form action="" method="post">
		<div class="form-group">
			<label>Kode Kategori</label>
			<input type="text" name="kode_kategori" placeholder="Masukkan Kode Kategori" class="form-control">
			<small class="form-text text-danger"><?php echo form_error('kode_kategori'); ?></small>
		</div>
		<div class="form-group">
			<label>Nama Kategori</label>
			<input type="text" name="nama_kategori" placeholder="Masukkan Nama Kategori" class="form-control">
			<small class="form-text text-danger"><?php echo form_error('nama_kategori'); ?></small>
		</div>

		<button type="submit" name="input" class="btn btn-primary float-right">Tambah Data</button>
	</form>
    
  </div>
</div>

</div>