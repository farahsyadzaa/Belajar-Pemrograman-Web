    <section class="section bg-light">
      <div class="container mb-1">
          
          <div class="col-lg-12 element-animate ">
            <div class="media block-6 d-block text-center">
              <div class="icon mb-3"><span class="ion-ios-heart-outline"></span></div>
              <div class="media-body">
                <h3 class="heading">Serums That Will Help You Reach Your Dream Glow</h3>
                <p>Serum is the powerhouse product of skincare, so it shouldn’t be surprising they can help you reach your glow goals. Just like there are formulas designed to amp up hydration and even out your tone, there are special little bottles made to boost your skin’s radiance. Most are reparative formulas that work with moisturizing, restorative ingredients to bring your complexion to the highest level of health, and they can be worn underneath your makeup or applied before you go to bed.</p>
              </div>
            </div> 

        
        </div>
      </div>
    </section>
    <!-- END section -->
	
<div class="container-fluid">
	<div class="row text-center mt-4">
	
		<?php foreach ($serum as $srm) : ?>
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


    <section class="section bg-light block-11">
      <div class="container"> 
        <div class="row justify-content-center mb-1">
          <div class="col-md-5 text-center">
            <h2 class=" heading mb-2">Latest Reviews</h2>
            <p class="mb-2 lead">SO YOU CAN MAKE BETTER PURCHASE DECISION</p>
          </div>
        </div>
        <div class="nonloop-block-11 owl-carousel">
          <div class="item">
            <div class="block-33">
                <div class="vcard d-flex mb-3">
                  <div class="image align-self-center"><img src="assets/images/review1.jpg" alt="Person here"></div>
                  <div class="name-text align-self-center">
                    <h2 class="heading">GARNIER</h2>
                    <span class="meta">Sakura White Booster Serum</span>
                  </div>
                </div>
                <div class="text">
                  <blockquote>
                    <p>&rdquo; Pertama kali buka produk ini,wanginya bener2 seger,serumnya oily banget tapi waktu di implementasikan ke muka gak bt mu...
					&ldquo;<a href="#" class="btn btn-sm">Read more</a></p>
                  </blockquote>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-33">
                <div class="vcard d-flex mb-3">
                  <div class="image align-self-center"><img src="assets/images/review2.jpg" alt="Person here"></div>
                  <div class="name-text align-self-center">
                    <h2 class="heading">SOME BY MI</h2>
                    <span class="meta">Yuja Niacin Serum</span>
                  </div>
                </div>
                <div class="text">
                  <blockquote>
                    <p>&rdquo; bagus banget buat mencerahkan, bangun tidur muka ceraah tapi sayang muka aku tambah oily pake ini huhuu. aku preloved t... 
					&ldquo;<a href="#" class="btn btn-sm">Read more</a></p>
                  </blockquote>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-33">
                <div class="vcard d-flex mb-3">
                  <div class="image align-self-center"><img src="assets/images/review3.jpg" alt="Person here"></div>
                  <div class="name-text align-self-center">
                    <h2 class="heading">Benton</h2>
                    <span class="meta">Snail Bee Ultimate Serum</span>
                  </div>
                </div>
                <div class="text">
                  <blockquote>
                    <p>&rdquo; Ternyata di aku nggak cocok pdhal dah berekspetasi tinggi sm benton. Pdhal ngehidrasi banget bkin lembab, kerasa adem...
					&ldquo;<a href="#" class="btn btn-sm">Read more</a></p>
                  </blockquote>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-33">
                <div class="vcard d-flex mb-3">
                  <div class="image align-self-center"><img src="assets/images/review4.jpg" alt="Person here"></div>
                  <div class="name-text align-self-center">
                    <h2 class="heading">SKIN1004</h2>
                    <span class="meta">Centella Asiatica Ampoule</span>
                  </div>
                </div>
                <div class="text">
                  <blockquote>
                    <p>&rdquo; Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga aliquid. Atque dolore esse veritatis iusto eaque perferen...
					&ldquo;<a href="#" class="btn btn-sm">Read more</a></p>
                  </blockquote>
                </div>
              </div>
          </div>
          
        </div>
      </div>
    </div>
    <!-- END .block-4 -->
    </section>

    <section class="section blog">
      <div class="container">

        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-5 text-center">
            <h2 class=" heading mb-2">Latest Articles</h2>
            <p class="mb-2 lead">UNRAVEL MORE BEAUTY</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">

            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="#" class="mr-5"><img src="assets/images/blog1.jpg" alt="Placeholder image" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">Jun 26th, 2020</span>
                <h3 class="mt-2 text-black"><a href="#">Kandungan Skincare untuk Mengatasi Keriput</a></h3>
                <p>Siapa sih, di sini yang nggak mau kulitnya terlihat mulus dan tanpa kerutan? Pasti banyak ya? Apalagi sekarang lagi pada nonton drama Korea, pasti semakin mengimpi-impikan kulit yang mulus ...</p>
                <p><a href="#" class="btn btn-primary btn-sm">Read more</a></p>
              </div>
            </div>



          </div>
          <div class="col-md-6">
            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="#" class="mr-5"><img src="assets/images/blog2.jpg" alt="Placeholder image" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">Jun 22th, 2020</span>
                <h3 class="mt-2 text-black"><a href="#">Punya Permasalahan Kulit Kusam? Kalian Harus Coba Keyglow Snail Serum!</a></h3>
                <p><a href="#" class="btn btn-primary btn-sm">Read more</a></p>
              </div>
            </div>

            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="#" class="mr-5"><img src="assets/images/blog3.png" alt="Placeholder image" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">Jun 20th, 2018</span>
                <h3 class="mt-2 text-black"><a href="#">Review Westcare: Brand Lokal Minimalis Untuk Segala Jenis Kulit</a></h3>
                <p><a href="#" class="btn btn-primary btn-sm">Read more</a></p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
	
	

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

