<?php
/*
	Template Name: Clients Page
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
        'category_name' => 'client',
        'paged' => $paged
        // you could use the id to
        // 'cat' => 2 or whatever is the id for your category
        ); 
		
$wp_query = new WP_Query($args);
?>
	<?php /* 
	<div class="row v-row">		
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
    */
	?>
</div> <!-- container -->

<div id="contact-wrap">
	<div class="container">	
		<div class="row project-row-page">
			<div class="row thumbnails-viewport">				
			<?php
				if($wp_query->have_posts()):
					while ($wp_query->have_posts()) : $wp_query->the_post();
						?> <div class="col-md-3 col-xs-4"> <?php
						// check if the post has a Post Thumbnail assigned to it.
						if ( has_post_thumbnail() ) {
						?><a href="<?php echo get_permalink(); ?>" target="_blank"> <?php the_post_thumbnail( 'client-thumbnail', array('class' => 'my-thumbnails')); ?> </a> <?php
						}					
						?> 
						</div>
						<?php
					endwhile; ?>
			<?php endif; ?>		
			</div> <!-- thumbnails-viewport -->
		</div> <!-- row-project -->
	<?php wp_reset_query(); ?>
	</div> <!-- container -->
</div> <!-- contact-wrap -->

<div class="container">
<?php get_footer(); ?>