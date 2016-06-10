<!-- CONTAINER -->
<?php

	$azera_website_name = get_bloginfo( 'name', 'display' );
	$azera_website_description = get_bloginfo( 'description' );
	$azera_shop_header_title = get_theme_mod('azera_shop_header_title',$azera_website_name);
	$azera_shop_header_subtitle = get_theme_mod('azera_shop_header_subtitle',$azera_website_description);
	$azera_shop_header_button_text = get_theme_mod('azera_shop_header_button_text',esc_html__('GET STARTED','azera-shop'));
	$azera_shop_header_button_link = get_theme_mod('azera_shop_header_button_link','#');
	$azera_shop_enable_move = get_theme_mod('azera_shop_enable_move');
	$azera_shop_first_layer = get_theme_mod('azera_shop_first_layer', azera_shop_get_file('/images/background1.png'));
	$azera_shop_second_layer = get_theme_mod('azera_shop_second_layer',azera_shop_get_file('/images/background2.png'));
	$azera_shop_header_layout = get_theme_mod('azera_shop_header_layout','layout2');

	if(!empty($azera_shop_header_title) || !empty($azera_shop_header_subtitle) || !empty($azera_shop_header_button_text)){
?>

<?php
	if( !empty($azera_shop_enable_move) && $azera_shop_enable_move ) {

		echo '<ul id="parallax_move">';


			if ( empty($azera_shop_first_layer) && empty($azera_shop_second_layer) ) {

				$azera_shop_header_image2 = get_header_image();
				echo '<li class="layer layer1" data-depth="0.10" style="background-image: url('.$azera_shop_header_image2.');"></li>';

			} else {

				if( !empty($azera_shop_first_layer) )  {
					echo '<li class="layer layer1" data-depth="0.10" style="background-image: url('.$azera_shop_first_layer.');"></li>';
				}
				if( !empty($azera_shop_second_layer) ) {
					echo '<li class="layer layer2" data-depth="0.20" style="background-image: url('.$azera_shop_second_layer.');"></li>';
				}

			}

		echo '</ul>';

	}
?>

		<div class="overlay-layer-wrap">
			<div class="container overlay-layer" id="parallax_header">

			<div class="row">
				<div class="col-box col-xs-12 col-md-5 text-center">
					<img src="<?php bloginfo('template_directory'); ?>/images/badge.png" alt="">
				</div>
				<div class="col-box col-xs-12 col-md-7 text-center">
				<?php get_search_form(); ?>
					<h3 class="hero-title">Dapatkan Deal dari 100+<br>
E-commerce & Marketplace</h3>

				</div>
				</div><!-- .col-md-12 or .col-md-7 -->
			</div>
			</div>
		</div>

<?php
	}
?>

