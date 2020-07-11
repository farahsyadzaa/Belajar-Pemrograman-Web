<div class="container-fluid">
	<ul class= "navbar-nav ml-4 mt-4">
		<?php echo anchor('welcome', '<div class="btn btn-sm btn-danger">Back</div>')?>
     </ul>
	<div class="row text-center mt-2">
	
		<?php foreach ($oily_skin as $srm) : ?>
			<div class="card ml-4 mt-4" style="width: 19rem;">
				<img src="<?php echo base_url().'/assets/images/'.$srm->gambar ?>" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title mb-1"><?php echo $srm->nama_srm ?></h5>
					<p><?php echo $srm->merk_srm ?></p>
					<?php echo anchor('dashboard/detail/'.$srm->id_srm,'<div class="btn btn-secondary">Detail Serum</div>')?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>


    

    <footer class="site-footer" role="contentinfo">
      <div class="container">



            

        <div class="row">
          <div class="col-12  text-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script> Farah Syadza <i class="fa fa-heart"
                  aria-hidden="true"></i><a href="https://colorlib.com" target="_blank"></a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->