<?php
/*
	Template Name: Product Page
*/
get_header();



// pagination
if ( get_query_var('paged') )
    $paged = get_query_var('paged');
elseif ( get_query_var('page') )
    $paged = get_query_var('page');
else
        $paged = 1;
 
// arguments for the new query
$args = array(
        'category_name' => 'product',
        'paged' => $paged
        // you could use the id to
        // 'cat' => 2 or whatever is the id for your category
        ); 
		
$wp_query = new WP_Query($args);		
?>	
	<div class="row">		
		<div class="vlogo">
			<a href="<?php echo site_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/img/Vlogo.png" alt="vlogo">
			</a>	
		</div>
	</div> <!-- row -->
	
	<div class="row" id="title">
		<div class="col-md-12 col-xs-12">
			<!-- <h3 class="text-center title"><i>Virginia de Colombani</i></h3> -->
			<hr class="style-virginia">
		</div>
	</div> <!-- row -->

	<div class="row thumbnails-viewport">		
			<?php
				if($wp_query->have_posts()):
					while ($wp_query->have_posts()) : the_post();
						?> <div class="col-md-6 col-xs-12"> <?php
						// check if the post has a Post Thumbnail assigned to it.
						if ( has_post_thumbnail() ) {
						?><a href="<?php echo get_permalink(); ?>"> <?php the_post_thumbnail( 'single-post-thumbnail', array('class' => 'my-thumbnails')); ?> </a> <?php
						}					
						?> <a href="<?php echo get_permalink(); ?>"><h3> <?php the_title(); ?> </h3></a>
						<p><?php the_field('captionthumbnails'); ?></p>
						</div>
						<?php
					endwhile; ?>
			<?php endif; ?>		
	</div>



<?php get_footer(); ?>