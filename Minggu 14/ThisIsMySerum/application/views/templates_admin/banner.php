  <body>
		
		
    <header role="banner">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand " href="">Admin ThisIsMySerum</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
		  
		<div class="collapse navbar-collapse" id="navbarsExample05">
           <ul class="navbar-nav pl-md-6">
		   
			<li class="nav-item">
               <a class="nav-link" href="<?php echo base_url('admin/dashboard_admin/') ?>">Home</a>
            </li>
			 
			<li class="nav-item">
               <a class="nav-link" href="<?php echo base_url('admin/data_serum/') ?>">Data Serum</a>
             </li>
			</ul>
			 
            <ul class="navbar-nav ml-auto">
              <button class="btn btn-primary px-3 py-2"data-toggle="modal" data-target="#tambah_serum">Tambah Serum</a></li></button>
				<?php if($this->session->userdata('username')) { ?>
					<li><?php echo anchor('auth/logout','<div class="btn btn-white btn-outline-white px-3 py-3">LOGOUT</div>') ?></li>
				<?php } else { ?>
					<li><?php echo anchor('auth/login','<div class="btn btn-white btn-outline-white px-3 py-3">LOGIN</div>') ?></li>
				<?php } ?>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('assets/images/aa.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-10 text-center col-sm-12 element-animate">
			<div class="col-lg-12 element-animate">
			<div class="media block-10 d-block text-center">
			<div class="icon mb-3"><span class="ion-ios-heart-outline"></span></div>
              <h1>ThisIsMySerum</h1>
			  <h3 class="heading">Serums That Will Help You Reach Your Dream Glow</h3>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- END slider -->