<?php
/**
 * Template name: promo detail
 *
 * @package azera-shop
 */

        get_header();
	?>
		</div>
		<!-- /END COLOR OVER IMAGE -->
	</header>
	<!-- /END HOME / HEADER  -->


<div class="content-wrap">

<div itemprop id="content" class="content-warp night" role="main">
	<div class="container-fluid">
		<div class="promo-umum">
			<ul>
				<li class="head"></li>
				<li><img src=""<?php bloginfo('template_directory'); ?>/images/bank-promo/bank-bca-logo-promo.png"" alt=""></li>
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="row">
			
			<div class="col-xs-12 col-md-3">
				<h1>filter</h1>
			</div>
			<div id="content" class="col-xs-12 col-md-9">


				<?php
				$args = array( 'numberposts' => -1); 
				$posts= get_posts( $args );
				if ($posts) {
				    foreach ( $posts as $post ) {
				    	setup_postdata($post);
							$categories = get_the_category( $post->ID );
							//var_dump($posts);
				    	//var_dump(htmlentities($post->post_content));
				    	$tes = html_entity_decode(get_the_content());
				    	
				    	?>
				    	 <div class="col-xs-12 col-md-4">
					    	<h1><?php echo get_the_title();?></h1>
					    	<?php echo get_the_post_thumbnail();?>
					    	<p><?php echo  $categories->name;?></p>

								<?php	
								$columns = explode("<hr />", $tes);
								$columnLength = count($columns);
								switch ($columnLength)
								{
									case 4:
										/* print a two column page */
									   echo "<div class='left_column'>";
									   foreach( $categories as $category ) {
								    echo $category->term_id . ', ' . $category->slug . ', ' . $category->name . '<br />';
								}
									   echo $columns[0];
									   echo "</div>";
									   echo "<div class='right_column'>";
									   echo $columns[1];
									   echo $columns[2];
									   echo $columns[3];
									   echo "</div>";
										break;
								  default:
								  /* ops we can't handle this many columns */
								   echo "oops";
								  	break;	
								}
								?>

				    	</div> 
				<?php        
					  }
					}
				?>	

			</div>
		</div>
	</div>
</div>

</div><!-- .content-wrap -->

<?php get_footer(); ?>
