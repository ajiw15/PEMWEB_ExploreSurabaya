<div class="container-fluid">
	
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> <i class="fas fa-chart-pie mr-3"></i></i>Kategori</h1>
    </div>
    <?php if($this->session->flashdata('pesan') ):?>
	    <div class="alert alert-success alert-dismissible fade show" role="alert">
	  Data Kategori<strong> Berhasil</strong> <?php echo $this->session->flashdata('pesan');?>.
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
<?php endif; ?>
   <!--  <a href="<?php echo base_url()?>kategori/input" class="btn btn-sm btn-primary mb-4" style="float:right;"><i class="fas fa-plus fa-sm"></i> Tambah Kategori</a> -->

	<table class="table table-striped table-bordered table-hover">
	  <thead style="background-color:#2F8042; color: white;">
	    <tr>
	     <th>No</th>
    		<th>Kode Kategori</th>
    		<th>Nama Kategori</th>
    		<th>Aksi</th>
	    </tr>
	  </thead>

	  <tbody>
	  	 	<?php
	  	 	$no = 1;
	  		foreach ($kategori as $k) : 
	  			?>
    <tr>
      <th scope="row"><?php echo $no++  ?></th>
      <td><?php echo $k['kode_kategori']  ?></td>
      <td><?php echo $k['nama_kategori']  ?></td>
      <td width="150px">
      	<a href="<?php echo base_url(); ?>kategori/ubah/<?php echo $k['id_kategori'];?>" class="btn btn-sm btn-warning mr-3"><i class="fa fa-edit">
      </i></a>
      	<a href="<?php echo base_url(); ?>kategori/hapus/<?php echo $k['id_kategori'];?>" onclick="return confirm('Yakin ingin hapus data ?');" class="btn btn-sm btn-danger"><i class="fa fa-trash">
      </i></a></td>
    </tr>
	</tbody>
<?php endforeach; ?>
    </table>
</div>