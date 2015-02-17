<?php
/*
	Template Name: Contact Page
*/
get_header(); 

?>


	<div class="row">
		<div class="col-md-12 col-xs-12">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>

			<?php endwhile; else: ?>
				<p><?php _e('Sorry, this page does not exist.'); ?></p>
			<?php endif; ?>
		</div>
	</div>



<?php get_footer(); ?>