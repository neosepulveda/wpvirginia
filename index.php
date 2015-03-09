<?php get_header(); ?>	
	
	<div class="row project-row-page">
		<div class="col-md-12 col-xs-12">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1> <?php the_title(); ?></h1>
				<?php
					if( get_field('subtitle') ): ?>
						<p class="lead"><?php the_field('subtitle'); ?></p>
						<?php 
					endif;
				?>
				<?php
					if( get_field('quote') ): ?>
						<p class="lead"><?php the_field('quote'); ?></p>
						<?php 
					endif;
				?>
				
				<div class="project-row">
					<?php the_content(); ?>
				</div>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, this page does not exist.'); ?></p>
			<?php endif; ?>
		</div> <!-- col-12 -->	
	</div> <!--row-->

<?php get_footer(); ?>