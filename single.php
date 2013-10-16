<?php get_header(); ?>
	

	<div class="container">	
		<!-- section -->
		<section role="main" class="grid_8">
		
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				
				<!-- post title -->
				<h1 class="title">
					<?php the_title(); ?>
				</h1>
				<!-- /post title -->
				
				
				<p>
				<?php the_content(); // Dynamic Content ?>
				</p>
				
				
				
				
				
			</article>
			<!-- /article -->
			
		<?php endwhile; ?>
		
		<?php else: ?>
		
			<!-- article -->
			<article>
				
				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
				
			</article>
			<!-- /article -->
		
		<?php endif; ?>
		
		</section>
		<!-- /section -->

</div>

<?php get_footer(); ?>