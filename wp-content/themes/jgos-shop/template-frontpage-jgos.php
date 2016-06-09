<?php
/**
 * Template name: Frontpage
 *
 * @package azera-shop
 */

        get_header();

		azera_shop_get_template_part( apply_filters("azera_shop_header_layout","/sections/azera_shop_header_section"));
	?>
		</div>
		<!-- /END COLOR OVER IMAGE -->
	</header>
	<!-- /END HOME / HEADER  -->

<div itemprop id="content" class="content-warp" role="main">

	<?php

		if( !empty($sections_array) ){
			foreach($sections_array as $section){
				azera_shop_get_template_part($section);
			}
		}
	?>
	<div class="container">
		<div class="row">
			<div class="tag-title">
				<div class="title-text">
					Promo Umum
				</div>
				<div class="sub-title">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum possimus id enim nam reprehenderit iusto a quisquam.
				</div>
			</div>
			<div class="promo-umum">
				<div class="col-box col-xs-12 col-sm-6 col-md-3">
					<div class="frame">
						<a class="text" href="#"><span>sample text</span></a>
						<img src="<?php bloginfo('template_directory'); ?>/images/promo/sample-img1.jpg" alt="">
					
					</div>
				</div>
				<div class="col-box col-xs-12 col-sm-6 col-md-3">
					<div class="frame">
						<a class="text" href="#"><span>sample text</span></a>
						<img src="<?php bloginfo('template_directory'); ?>/images/promo/sample-img2.jpg" alt="">
					
					</div>
				</div>
				<div class="col-box col-xs-12 col-sm-6 col-md-3">
					<div class="frame">
						<a class="text" href="#"><span>sample text</span></a>
						<img src="<?php bloginfo('template_directory'); ?>/images/promo/sample-img3.jpg" alt="">
					
					</div>
				</div>
				<div class="col-box col-xs-12 col-sm-6 col-md-3">
					<div class="frame">
						<a class="text" href="#"><span>sample text</span></a>
						<img src="<?php bloginfo('template_directory'); ?>/images/promo/sample-img4.jpg" alt="">
					
					</div>
				</div>
				<div class="col-box col-xs-12 col-sm-6 col-md-3">
					<div class="frame">
						<a class="text" href="#"><span>sample text</span></a>
						<img src="<?php bloginfo('template_directory'); ?>/images/promo/sample-img1.jpg" alt="">
					
					</div>
				</div>
				<div class="col-box col-xs-12 col-sm-6 col-md-3">
					<div class="frame">
						<a class="text" href="#"><span>sample text</span></a>
						<img src="<?php bloginfo('template_directory'); ?>/images/promo/sample-img2.jpg" alt="">
					
					</div>
				</div>
				<div class="col-box col-xs-12 col-sm-6 col-md-3">
					<div class="frame">
						<a class="text" href="#"><span>sample text</span></a>
						<img src="<?php bloginfo('template_directory'); ?>/images/promo/sample-img3.jpg" alt="">
					
					</div>
				</div>
				<div class="col-box col-xs-12 col-sm-6 col-md-3">
					<div class="frame">
						<a class="text" href="#"><span>sample text</span></a>
						<img src="<?php bloginfo('template_directory'); ?>/images/promo/sample-img4.jpg" alt="">
					
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="tag-title">
				<div class="title-text">
					Promo Peserta
				</div>
				<div class="sub-title">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum possimus id enim nam reprehenderit iusto a quisquam.
				</div>
			</div>

			<div class="col-xs-12">

				<div id="carousel-example-generic" class="carousel slide promo-slide" data-ride="carousel">
					
					<!-- Controls -->
					<div class="control-btn">
						<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							<span class="fa fa-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							<span class="fa fa-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">

							<div class="row">
								<div class="promo-umum">
									<div class="col-box col-xs-12 col-sm-6 col-md-3">
										<div class="frame">
											<a class="text" href="#"><span>sample text</span></a>
											<img src="<?php bloginfo('template_directory'); ?>/images/promo-participant/BCA-bank-logo-transparent.png" alt="">

										</div>
									</div>
									<div class="col-box col-xs-12 col-sm-6 col-md-3">
										<div class="frame">
											<a class="text" href="#"><span>sample text</span></a>
											<img src="<?php bloginfo('template_directory'); ?>/images/promo-participant/Telkomsel.png" alt="">

										</div>
									</div>
									<div class="col-box col-xs-12 col-sm-6 col-md-3">
										<div class="frame">
											<a class="text" href="#"><span>sample text</span></a>
											<img src="<?php bloginfo('template_directory'); ?>/images/promo-participant/BCA-bank-logo-transparent.png" alt="">

										</div>
									</div>
									<div class="col-box col-xs-12 col-sm-6 col-md-3">
										<div class="frame">
											<a class="text" href="#"><span>sample text</span></a>
											<img src="<?php bloginfo('template_directory'); ?>/images/promo-participant/BCA-bank-logo-transparent.png" alt="">

										</div>
									</div>
									<div class="col-box col-xs-12 col-sm-6 col-md-3">
										<div class="frame">
											<a class="text" href="#"><span>sample text</span></a>
											<img src="<?php bloginfo('template_directory'); ?>/images/promo-participant/BCA-bank-logo-transparent.png" alt="">

										</div>
									</div>
									<div class="col-box col-xs-12 col-sm-6 col-md-3">
										<div class="frame">
											<a class="text" href="#"><span>sample text</span></a>
											<img src="<?php bloginfo('template_directory'); ?>/images/promo-participant/BCA-bank-logo-transparent.png" alt="">

										</div>
									</div>
									<div class="col-box col-xs-12 col-sm-6 col-md-3">
										<div class="frame">
											<a class="text" href="#"><span>sample text</span></a>
											<img src="<?php bloginfo('template_directory'); ?>/images/promo-participant/BCA-bank-logo-transparent.png" alt="">

										</div>
									</div>
									<div class="col-box col-xs-12 col-sm-6 col-md-3">
										<div class="frame">
											<a class="text" href="#"><span>sample text</span></a>
											<img src="<?php bloginfo('template_directory'); ?>/images/promo-participant/BCA-bank-logo-transparent.png" alt="">

										</div>
									</div>
								</div>
							</div>

						</div>


						<div class="item">
							
							<div class="row">	
								<div class="promo-umum">
									<div class="col-box col-xs-12 col-sm-6 col-md-3">
										<div class="frame">
											<a class="text" href="#"><span>sample text</span></a>
											<img src="<?php bloginfo('template_directory'); ?>/images/promo-participant/BCA-bank-logo-transparent.png" alt="">

										</div>
									</div>
									<div class="col-box col-xs-12 col-sm-6 col-md-3">
										<div class="frame">
											<a class="text" href="#"><span>sample text</span></a>
											<img src="<?php bloginfo('template_directory'); ?>/images/promo-participant/BCA-bank-logo-transparent.png" alt="">

										</div>
									</div>
									<div class="col-box col-xs-12 col-sm-6 col-md-3">
										<div class="frame">
											<a class="text" href="#"><span>sample text</span></a>
											<img src="<?php bloginfo('template_directory'); ?>/images/promo-participant/BCA-bank-logo-transparent.png" alt="">

										</div>
									</div>
									<div class="col-box col-xs-12 col-sm-6 col-md-3">
										<div class="frame">
											<a class="text" href="#"><span>sample text</span></a>
											<img src="<?php bloginfo('template_directory'); ?>/images/promo-participant/BCA-bank-logo-transparent.png" alt="">

										</div>
									</div>
									<div class="col-box col-xs-12 col-sm-6 col-md-3">
										<div class="frame">
											<a class="text" href="#"><span>sample text</span></a>
											<img src="<?php bloginfo('template_directory'); ?>/images/promo-participant/BCA-bank-logo-transparent.png" alt="">

										</div>
									</div>
									<div class="col-box col-xs-12 col-sm-6 col-md-3">
										<div class="frame">
											<a class="text" href="#"><span>sample text</span></a>
											<img src="<?php bloginfo('template_directory'); ?>/images/promo-participant/BCA-bank-logo-transparent.png" alt="">

										</div>
									</div>
									<div class="col-box col-xs-12 col-sm-6 col-md-3">
										<div class="frame">
											<a class="text" href="#"><span>sample text</span></a>
											<img src="<?php bloginfo('template_directory'); ?>/images/promo-participant/BCA-bank-logo-transparent.png" alt="">

										</div>
									</div>
									<div class="col-box col-xs-12 col-sm-6 col-md-3">
										<div class="frame">
											<a class="text" href="#"><span>sample text</span></a>
											<img src="<?php bloginfo('template_directory'); ?>/images/promo-participant/BCA-bank-logo-transparent.png" alt="">

										</div>
									</div>
								</div>
							</div>	

						</div>
					</div>

				</div>

			</div>

		</div>
	</div>

	<div class="container-fluid">
		<div class="row partner-section row-space">
			<div class="tag-title">
				<div class="title-text">
					Kemitraan Bersama
				</div>
				<div class="sub-title">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum possimus id enim nam reprehenderit iusto a quisquam.
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-xs-offset-0 col-md-8 col-md-offset-2 text-center">
							<img src="<?php bloginfo('template_directory'); ?>/images/partner.png" alt="">
					</div>
				</div>
			</div>

		</div>	
	</div>

	<div class="container-fluid">
		<div class="row organized-section row-space">
			<div class="tag-title">
				<div class="title-text">
					Diprakarsai Oleh
				</div>
				<div class="sub-title">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum possimus id enim nam reprehenderit iusto a quisquam.
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-xs-offset-0 col-md-8 col-md-offset-2 text-center">
							<img src="<?php bloginfo('template_directory'); ?>/images/organizedBy.png" alt="">
					</div>
				</div>
			</div>

		</div>		
	</div>		

	<div class="container-fluid">
		<div class="row supported-section row-space">
			<div class="tag-title">
				<div class="title-text">
					Didukung Oleh
				</div>
				<div class="sub-title">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum possimus id enim nam reprehenderit iusto a quisquam.
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-xs-offset-0 col-md-12 col-md-offset-0 text-center">
							<img src="<?php bloginfo('template_directory'); ?>/images/supportedBy.png" alt="">
					</div>
				</div>
			</div>

		</div>			
	</div>			
		
	<div class="container-fluid">
		<div class="row supported-section row-space">
			<div class="tag-title">
				<div class="title-text">
					Media partners
				</div>
				<div class="sub-title">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum possimus id enim nam reprehenderit iusto a quisquam.
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-xs-offset-0 col-md-12 col-md-offset-0 text-center">
							<img src="<?php bloginfo('template_directory'); ?>/images/supportedBy.png" alt="">
					</div>
				</div>
			</div>

		</div>	
	</div>			
		
	<div class="container-fluid night explanation-section">
		<div class="row  row-space">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-2 hidden-xs hidden-sm text-center">
						<img src="<?php bloginfo('template_directory'); ?>/images/manShopping.png" alt="">
					</div>
					<div class="col-xs-12 col-md-8 text-center">

						<div class="tag-title">
							<div class="title-text">
								Jakarta Great Online Sale
							</div>
						</div>

						<div class="quote">
							<img class="post-clip left" src="<?php bloginfo('template_directory'); ?>/images/caret-left.svg" alt="">
							<strong>
								<i>
									Jakarta Great Online Sale (JGOS) merupakan festival belanja tahunan yang menghimpun para penggiat e-commerce dan daily deal di Indonesia, khususnya yang berbasis di Jakarta.
								</i>
							</strong>
							<img class="post-clip right" src="<?php bloginfo('template_directory'); ?>/images/caret-left.svg" alt="">
						</div>
						<div class="desc">
							<p>
								Program tahunan ini diadakan guna mendukung program Festival Jakarta Great Sale (FJGS) sebagai bagian dari perayaan HUT DKI Jakarta lewat promosi wisata belanja dan layanan berbasis online. JGOS turut didukung oleh Pemprov DKI Jakarta dan Kementrian Perdagangan.
							</p>
						</div>
					</div>
					<div class="col-xs-12 col-md-2 text-center hidden-xs hidden-sm">
						<img src="<?php bloginfo('template_directory'); ?>/images/womenShopping.png" alt="">
					</div>
					<div class="col-xs-12 hidden-md hidden-lg text-center">
						<img src="<?php bloginfo('template_directory'); ?>/images/bothShopping.png" alt="">
					</div>
				</div>
			</div>

		</div>	
	</div>

</div><!-- .content-wrap -->

<?php get_footer(); ?>
