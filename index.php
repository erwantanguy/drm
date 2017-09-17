<?php get_header(); ?>

<?php include 'slider.php'; ?>
		

			<div id="artiste" class="row">
				<section class="col-lg-9 col-md-9">
					<div class="container-fluid">
				<?php
					$loop = new WP_Query( array( 'post_type' => 'artiste', 'posts_per_page' => 10 ) );
					//$loop = query_posts(array('post_type' => array('post', 'artiste')));
					while ( $loop->have_posts() ) : $loop->the_post();
					  $val = get_post_meta($post->ID,'_home_page',true);
					  if($val==oui){
					  	
					  	echo '<article class="col-lg-4 col-md-6 col-sm-6">';
						echo '<a href="';
						the_permalink();
						echo '">';
						the_post_thumbnail( 'vignette' );
						echo '</a>';
						echo '<h1><a href="';
						the_permalink();
						echo '">';
						the_title();
						echo '</a></h1>';
						echo '</article>';
					  }
					endwhile;
					
				?>
					</div>
				</section>
				<aside class="col-lg-3 col-md-3 hidden-xs hidden-sm">
					<?php get_sidebar(); ?>
				</aside>
			</div>

<?php get_footer(); ?>


<script>
	jQuery(document).ready(function(){
		jQuery('.carousel .carousel-inner .item:first-child').addClass('active');
		jQuery('.carousel .carousel-indicators li:first-child').addClass('active');
		//jQuery('.carousel-inner').css('display','none');
		jQuery('.carousel').carousel({
			interval:5000
		});
	});
	</script>	




