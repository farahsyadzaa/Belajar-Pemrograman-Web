<div class="container-fluid">
	<h3>Edit Data Serum</h3>
	
	<?php foreach($serum as $srm) : ?>
	
		<form method="post" action="<?php echo base_url().'admin/data_serum/update' ?>">
		
		<div class="form-group">
				<label>Nama Serum</label>
				<input type="text" name="nama_srm" class="form-control"
				value="<?php echo $srm->nama_srm ?>">
		</div>
		
		<div class="form-group">
				<label>Merk Serum</label>
				<input type="text" name="merk_srm" class="form-control"
				value="<?php echo $srm->merk_srm ?>">
		</div>
		
		<div class="form-group">
				<label>Keterangan</label>
				<input type="hidden" name="id_srm" class="form-control"
				value="<?php echo $srm->id_srm ?>">
				<input type="text" name="keterangan" class="form-control"
				value="<?php echo $srm->keterangan ?>">
		</div>
		
		<div class="form-group">
				<label>kategori</label>
				<input type="text" name="kategori" class="form-control"
				value="<?php echo $srm->kategori ?>">
		</div>
		
		<button type="submit" class="btn btn-primary btn-sm mt-3"> Simpan </button>
		</form>
	
	<?php endforeach; ?>
</div>