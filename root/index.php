<?php
/**
 * The main template file
 *
 * @package {%= title %}
 * @since 0.1.0
 */

 get_header(); ?>

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			
			<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

 <?php get_footer(); ?>
