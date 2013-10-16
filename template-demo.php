<?php /* Template Name: Demo Page Template */ get_header(); ?>
	
	<!-- section -->
	<section role="main">
	
		<h1><?php the_title(); ?></h1>
	
		<?php get_template_part('loop'); ?>
	
	</section>
	<!-- /section -->

<?php get_footer(); ?>