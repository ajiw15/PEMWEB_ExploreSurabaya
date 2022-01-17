<div class="container-fluid">

<div class="card">
  <div class="card-header" style="background-color:#2F8042; color: white;">
    Form Tambah Data Wisata
  </div>
  <div class="card-body">
  	<form action="" method="post" enctype="multipart/form-data">
  	 	<div class="row">
  	 		<div class="col-md-6">
  	 			<div class="form-group">
					<label>Nama Wisata</label>
					<input type="text" name="nama_wisata" placeholder="Masukkan Nama Wisata" class="form-control">
					<small class="form-text text-danger"><?php echo form_error('nama_wisata'); ?></small> 
				</div>
				<div class="form-group">
					<label>Deskripsi</label>
					<input type="text" name="deskripsi" placeholder="Masukkan Deskripsi" class="form-control">
					<small class="form-text text-danger"><?php echo form_error('deskripsi'); ?></small> 
				</div>
				<div class="form-group">
					<label>Kategori</label>
					<select name="kode_kategori" class="form-control">
						<option value="">--Pilih Kategori Wisata--</option>
						<?php foreach ($kategori as $k) : ?>
							<option value="<?php echo $k['kode_kategori']?>"><?php echo $k['nama_kategori']  ?></option>
						<?php endforeach;?>
					</select>
					<small class="form-text text-danger"><?php echo form_error('kode_kategori'); ?></small>
				</div>
								<div class="form-group">
					<label>Fasilitas</label>
					<select name="kode_fasilitas" class="form-control">
						<option value="">--Pilih Fasilitas Wisata--</option>
						<?php foreach ($fasilitas as $f) : ?>
							<option value="<?php echo $f['kode_fasilitas']?>"><?php echo $f['nama_fasilitas']  ?></option>
						<?php endforeach;?>
					</select>
					<small class="form-text text-danger"><?php echo form_error('kode_fasilitas'); ?></small>
				</div>
  	 		</div>
  	 		<div class="col-md-6">
				<div class="form-group">
					<label>Masukkan Waktu Buka:</label>
 					 <input type="time" id="buka" name="buka" placeholder="Masukkan Waktu Buka" class="form-control">
					<small class="form-text text-danger"><?php echo form_error('buka'); ?></small>
				</div>
				<div class="form-group">
					<label>Masukkan Waktu Tutup:</label>
 					 <input type="time" id="tutup" name="tutup" placeholder="Masukkan Waktu Tutup" class="form-control">
					<small class="form-text text-danger"><?php echo form_error('tutup'); ?></small>
				</div><br><br><br>
				<button type="submit" name="input" class="btn btn-primary float-right mt-5">Tambah Data</button>
  	 		</div>
  	 	</div>
    </form>
  </div>
</div>

</div>