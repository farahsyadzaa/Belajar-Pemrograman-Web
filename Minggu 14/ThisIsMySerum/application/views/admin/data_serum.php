<div class="container-fluid">

	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>Nama Serum</th>
			<th>Merk Serum</th>
			<th>Keterangan</th>
			<th>Kategori</th>
			<th colspan="3">AKSI</th>
		</tr>
		
		<?php
		$no=1;
		foreach($serum as $srm) : ?>
		
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $srm->nama_srm ?></td>
			<td><?php echo $srm->merk_srm ?></td>
			<td><?php echo $srm->keterangan ?></td>
			<td><?php echo $srm->kategori ?></td>
			<td><div class="btn btn-success btn-sm">CARI</div></td>
			<td><?php echo anchor('admin/data_serum/edit/' .$srm->id_srm, '<div class="btn btn-primary btn-sm">EDIT</div>') ?></td>
			<td><?php echo anchor('admin/data_serum/hapus/' .$srm->id_srm, '<div class="btn btn-danger btn-sm">HAPUS</div>') ?></td>
		</tr>
		
		<?php endforeach; ?>
	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_serum" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Serum</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_serum/tambah_aksi';?>" method="post" enctype="multipart/form-data">
			
			<div class="form-group">
				<label>Nama Serum</label>
				<input type="text" name="nama_srm" class="form-control">
			</div>
			
			<div class="form-group">
				<label>Merk Serum</label>
				<input type="text" name="merk_srm" class="form-control">
			</div>
			
			<div class="form-group">
				<label>Keterangan</label>
				<input type="text" name="keterangan" class="form-control">
			</div>
			
			<div class="form-group">
				<label>Kategori</label>
				<input type="text" name="kategori" class="form-control">
			</div>
			
			<div class="form-group">
				<label>Gambar Serum</label><br>
				<input type="file" name="gambar" class="form-control">
			</div>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
	  </form>
    </div>
  </div>
</div>