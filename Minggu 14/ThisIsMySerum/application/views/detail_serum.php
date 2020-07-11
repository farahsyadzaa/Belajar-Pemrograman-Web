
	<div class="card">
	  <h5 class="card-header">Detail Serum</h5>
	  <div class="card-body">
	  
		<?php foreach($serum as $srm) : ?>
		<div class="row">
			<div class="col-md-4">
				<img src="<?php echo base_url().'/assets/images/'.$srm->gambar ?>" class="card-img-top">
			</div>
			<div class="col-md-8">
				<table class="table">
					<tr>
						<td>Nama Serum</td>
						<td><strong><?php echo $srm->nama_srm?></strong></td>
					</tr>
					
					<tr>
						<td>Merk Serum</td>
						<td><strong><?php echo $srm->merk_srm?></strong></td>
					</tr>
					
					<tr>
						<td>Keterangan</td>
						<td><strong><?php echo $srm->keterangan?></strong></td>
					</tr>
					
					<tr>
						<td>Kategori</td>
						<td><strong><?php echo $srm->kategori?></strong></td>
					</tr>
					
				</table>
				
				<?php echo anchor('welcome', '<div class="btn btn-sm btn-danger">Back</div>')?>
			</div>
	  </div>
	  <?php endforeach; ?>
	</div>
