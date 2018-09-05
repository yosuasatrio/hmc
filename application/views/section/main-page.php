<div class="main-slider style-two default-banner">
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <div id="dz_rev_slider_4_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery36" data-source="gallery" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                        <!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
                        <div id="dz_rev_slider_4" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.3.3">
                            <ul>
                                <!-- SLIDE 1 -->
                                <li data-index="rs-6" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="revolution/assets/100x50_3176d-road-bg.jpg"  data-rotate="0"  data-savepresentation="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="assets/img/slide1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 -->
									<div class="tp-caption   tp-resizeme" 
										id="slide-2957-layer-5" 
										data-x="502" 
										data-y="center" 
										data-voffset="130" 
										data-width="['none','none','none','none']"
										data-height="['none','none','none','none']"
										data-transform_idle="o:1;"
										data-transform_in="x:50px;opacity:0;s:1500;e:Power3.easeOut;" 
										data-transform_out="opacity:0;s:300;" 
										data-start="1200" 
										data-responsive_offset="on" 
										style="z-index: 11;">
											<img src="assets/img/car2.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> 
									</div>	
                                </li>
                                <!-- SLIDE 2 -->
								<!-- SLIDE  -->
                                <li data-index="rs-5" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="revolution/assets/100x50_3176d-road-bg.jpg"  data-rotate="0"  data-savepresentation="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="assets/img/slide2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 -->
									<div class="tp-caption   tp-resizeme" 
										id="slide-2957-layer-4" 
										data-x="502" 
										data-y="center" 
										data-voffset="130" 
										data-width="['none','none','none','none']"
										data-height="['none','none','none','none']"
										data-transform_idle="o:1;"
										data-transform_in="x:50px;opacity:0;s:1500;e:Power3.easeOut;" 
										data-transform_out="opacity:0;s:300;" 
										data-start="1200" 
										data-responsive_offset="on" 
										style="z-index: 11;">
											<img src="assets/img/car3.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> 
									</div>	
                                </li>
                                
                            </ul>
                            <div class="tp-bannertimer tp-bottom bg-primary" style="height: 5px; "></div>
                        </div>
                    </div>
                    <!-- END REVOLUTION SLIDER -->
                </div>
            </div>
		</div>
        <!-- Slider END -->
		<!-- New Car -->
		<div class="section-full bg-img-fix dlab-new-work overlay-white-dark " style="background-image: url(images/background/bg1.jpg);">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3 col-sm-4  p-a0 no-of-item">
						<div class="no-of-item-dtl">
							<h2>18+</h2>
							<h3>UPCOMING CARS</h3>
						</div>
					</div>
					<div class="col-md-9 col-sm-8 p-a0">
						<div class="new-item owl-btn-style-1 owl-carousel">
							<?php foreach($car as $cardb1) { ?>
							<div class="item dlab-new-item">
								<div class="dlab-box">
									<div class="dlab-media"> 
										<a href="#"><img src="assets/img/car/<?php echo $cardb1->gambar_mobil; ?>" alt=""></a> 
									</div>
									<div class="dlab-info">
										<p class="event-date"><?php 
															$harga1 = $cardb1->harga_mobil;
															echo "Rp " . number_format($harga1,2,',','.'); 
														?></p>
										<h4 class="dlab-title"><a href="new-car-upcoming.html"><?php echo $cardb1->nama_mobil; ?>  <i class="fa fa-angle-right pull-right"></i></a></h4>
									</div>
								</div>
							</div>
						<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- New Car New -->	
		<!-- About Us -->
		<div class="section-full about-us bg-white content-inner-2" style="background-image: url(assets/img/about-us.jpg); background-position:bottom; background-repeat:no-repeat; background-size:100%;">
			<div class="container">
				<div class="section-head text-center head-1">
					<span class="text-primary">Welcome To Our Website</span>
					<h3 class="h3 text-uppercase">Car Dealership</h3>
					<div class="dlab-separator bg-gray-dark"></div>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6  col-xs-6">
						<div class="dlab-box-bg m-b30 box-hover" style="background-image: url(assets/img/car/pic1.jpg)">
							<div class="icon-bx-wraper center p-lr20 p-tb30">
								<div class="text-primary m-b20"> 
									<span class="icon-cell"><i class="glyph-icon flaticon-car-steering-wheel"></i></span> 
								</div>
								<div class="icon-content">
									<h4 class="dlab-tilte text-uppercase">All brands</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
								</div>
							</div>
							<div class="icon-box-btn text-center">
								<a href="#" class="site-button btn-block">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="dlab-box-bg m-b30 box-hover" style="background-image: url(assets/img/car/pic2.jpg)">
							<div class="icon-bx-wraper center p-lr20 p-tb30">
								<div class="text-primary m-b20"> 
									<span class="icon-cell"><i class="glyph-icon flaticon-chat"></i></span> 
								</div>
								<div class="icon-content">
									<h4 class="dlab-tilte text-uppercase">Free Support</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
								</div>
							</div>
							<div class="icon-box-btn text-center">
								<a href="#" class="site-button btn-block">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="dlab-box-bg m-b30 box-hover active" style="background-image: url(assets/img/car/pic3.jpg)">
							<div class="icon-bx-wraper center p-lr20 p-tb30">
								<div class="text-primary m-b20"> 
									<span class="icon-cell"><i class="glyph-icon flaticon-mechanic"></i></span> 
								</div>
								<div class="icon-content">
									<h4 class="dlab-tilte text-uppercase">Dealership</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
								</div>
							</div>
							<div class="icon-box-btn text-center">
								<a href="#" class="site-button btn-block">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="dlab-box-bg m-b30 box-hover" style="background-image: url(assets/img/car/pic4.jpg)">
							<div class="icon-bx-wraper center p-lr20 p-tb30">
								<div class="text-primary m-b20"> 
									<span class="icon-cell"><i class="glyph-icon flaticon-list"></i></span> 
								</div>
								<div class="icon-content">
									<h4 class="dlab-tilte text-uppercase">affordable</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
								</div>
							</div>
							<div class="icon-box-btn text-center">
								<a href="#" class="site-button btn-block">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="dlab-info-about">
				<div class="container">
					<div class="row">
						<div class="col-md-5">
							<div class="">
								<h3 class="h3 text-uppercase m-b10 m-t0">About us </h3>
								<p class="p-t0">Everything you need to build an amazing dealership website.</p>
							</div>
							<div class="about-us-info">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
								<div class="media media-info">
									<div class="media-left">
										<a href="#">
											<img class="media-object" src="assets/images/testimonials/pic2.jpg" alt="">
										</a>
									</div>
									<div class="media-body p-l15">
										<h4 class="font-weight-700 text-uppercase text-primary m-b10">Have any question ?</h4>
										<h2 class="media-heading open-sans font-weight-700">01 123 456 789</h2>
									</div>
								</div>
								<div class="m-t30">
									<a href="#" class="site-button">Read More</a>
								</div>
							</div>	
						</div>
						<div class="col-md-7">
							<div class="about-side-img wow fadeInRight" data-wow-duration="1.50s" data-wow-delay="0.50s">
								<img src="assets/images/car.png" alt=""> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- About Us END -->
		<!-- For Your Quick Look -->
        <div class="section-full bg-white content-inner car-listing">
            <div class="container">
                <div class="section-head">
                    <h3 class="h3 text-uppercase">Our Collection</h3>
				</div>
                <div class="section-content ">
                    <div class="row">	
						<div class="dlab-tabs">
							
							<div class="tab-content">
								<div id="upcoming"  class="tab-pane active clearfix">
									<div class="col-md-12 owl-carousel owl-btn-style-2 quick-look">
										<?php foreach($car as $cardb) { ?>
										<div class="item">
											<div class="dlab-feed-list">
												<div class="dlab-media"> 
													<a href="new-car-upcoming.html"><img src="assets/img/car/<?php echo $cardb->gambar_mobil; ?>" alt=""></a> 
												</div>
												<div class="dlab-info">
													<h4 class="dlab-title"><a href="new-car-upcoming.html"><?php echo $cardb->nama_mobil; ?> </a></h4>
													<div class="dlab-separator bg-black"></div>
													<p class="dlab-price"><span class="text-primary">
														<?php 
															$harga = $cardb->harga_mobil;
															echo "Rp " . number_format($harga,2,',','.'); 
														?></span></p>
												</div>
												<div class="icon-box-btn text-center">
													<ul class="clearfix">
														<li><?php echo $cardb->tahun_mobil; ?></li>
														<li>Manual</li>
														<li>210 hp </li>
													</ul>
												</div>
											</div>
										</div>
										<?php } ?>	
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
        <!-- For Your Quick Look END -->
        <!-- Latest News -->
		<div class="section-full bg-white content-inner-1">
			<div class="container">
				<div class="section-head text-center head-1">
					<h3 class="h3 text-uppercase">Events</h3>
					<hr>
				</div>
				<div class="row">
					<div class="blog-carousel owl-carousel col-md-12">
						<?php foreach($events as $eventsdb) { ?>
						<div class="item">
							<div class="ow-blog-post date-style-2 dlab-latest-blog">
								<div class="ow-post-media dlab-img-effect zoom-slow"> <img src="assets/img/post/<?php echo $eventsdb->thumbnail_post; ?>" alt=""> </div>
								<div class="ow-post-info ">
									<div class="ow-post-title">
										<h4 class="post-title"> <a href="blog-single-sidebar.html" title="Video post"><?php echo $eventsdb->title_post; ?></a> </h4>
									</div>
									<div class="ow-post-text">
										<p><?php echo $eventsdb->detail_post; ?></p>
									</div>
									<div class="ow-post-readmore "> 
										<a href="#" rel="bookmark" class="site-button-link"> Read More <i class="fa fa-angle-right"></i></a> 
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<!-- Latest News END-->
		<!-- Latest News -->
		<div class="section-full bg-white content-inner-1">
			<div class="container">
				<div class="section-head text-center head-1">
					<h3 class="h3 text-uppercase">Article</h3>
					<hr>
				</div>
				<div class="row">
					<div class="blog-carousel owl-carousel col-md-12">
						<?php foreach($article as $articledb) { ?>
						<div class="item">
							<div class="ow-blog-post date-style-2 dlab-latest-blog">
								<div class="ow-post-media dlab-img-effect zoom-slow"> <img src="assets/img/post/<?php echo $articledb->thumbnail_post; ?>" alt=""> </div>
								<div class="ow-post-info ">
									<div class="ow-post-title">
										<h4 class="post-title"> <a href="blog-single-sidebar.html" title="Video post"><?php echo $articledb->title_post; ?></a> </h4>
									</div>
									<div class="ow-post-text">
										<p><?php echo $articledb->detail_post; ?></p>
									</div>
									<div class="ow-post-readmore "> 
										<a href="#" rel="bookmark" class="site-button-link"> Read More <i class="fa fa-angle-right"></i></a> 
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<!-- Latest News END-->
		<!-- Latest News -->
		<div class="section-full bg-white content-inner-1">
			<div class="container">
				<div class="section-head text-center head-1">
					<h3 class="h3 text-uppercase">Special Promo</h3>
					<hr>
				</div>
				<div class="row">
					<div class="blog-carousel owl-carousel col-md-12">
						<?php foreach($promo as $promodb) { ?>
						<div class="item">
							<div class="ow-blog-post date-style-2 dlab-latest-blog">
								<div class="ow-post-media dlab-img-effect zoom-slow"> <img src="assets/img/post/<?php echo $promodb->thumbnail_post; ?>" alt=""> </div>
								<div class="ow-post-info ">
									<div class="ow-post-title">
										<h4 class="post-title"> <a href="blog-single-sidebar.html" title="Video post"><?php echo $promodb->title_post; ?></a> </h4>
									</div>
									<div class="ow-post-text">
										<p><?php echo $promodb->detail_post; ?></p>
									</div>
									<div class="ow-post-readmore "> 
										<a href="#" rel="bookmark" class="site-button-link"> Read More <i class="fa fa-angle-right"></i></a> 
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<!-- Latest News END-->