<body>		
    <header role="banner">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand " href="">ThisIsMySerum</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav pl-md-5">
              <li class="nav-item">
                <a class="nav-link active" href="welcome">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="services.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="<?php echo base_url('kategori/dry_skin/') ?>">Dry Skin</a>
                  <a class="dropdown-item" href="<?php echo base_url('kategori/oily_skin/') ?>">Oily Skin</a>
                  <a class="dropdown-item" href="<?php echo base_url('kategori/combination_skin/') ?>">Combination Skin</a>
                </div>
              </li>
            </ul>

			<ul class= "navbar-nav ml-auto">
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
	  <div class="slider-item" style="background-image: url('assets/images/slider-3.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center"> 
            <div class="col-md-10 text-center col-sm-12 element-animate">
              <h1>ThisIsMySerum</h1>
              <p class="mb-5 sub-text">Find everything you want to know about skincare serum on ThisIsMySerum</p>
            </div>
          </div>
        </div>

      </div>

      <div class="slider-item" style="background-image: url('assets/images/slider-4.jpg');">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-10 text-center col-sm-12 element-animate">
              <h1>ThisIsMySerum</h1>
              <p class="mb-5 sub-text">We are here to be your friendly solution to all things beauty, inside and out!</p>
            </div>
          </div>
        </div>
        
      </div>

    </section>
    <!-- END slider -->
    