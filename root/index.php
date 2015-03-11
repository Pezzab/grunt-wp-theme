<?php
/**
 * The main template file
 *
 * @package {%= title %}
 * @since 0.1.0
 */

 get_header(); ?>

	<?php get_template_part( 'content', get_post_format() ); ?>
 
 <?php get_footer(); ?>
