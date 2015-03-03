<?php
/*
	Template Name: Contact Page
*/
get_header(); 

?>


	<div class="row project-row-page">
		<div class="col-md-12 col-xs-12">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="col-md-8 col-xs-12">
					<h1 class="contact-h1">About</h1>
					<?php the_content(); ?>
				</div> <!-- col-8 -->
				<div class="col-md-4 col-xs-12">
					<h1 class="contact-h1">Contact</h1>
					<h3 class="contact-h3"><?php the_field('name'); ?></h3>
					<p><?php the_field('phones'); ?>
					<a href="mailto:<?php the_field('email'); ?>" class="contact-underline"><?php the_field('email'); ?></a><p>
				</div>
				
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, this page does not exist.'); ?></p>
			<?php endif; ?>
		</div>
	</div>



<?php get_footer(); ?>