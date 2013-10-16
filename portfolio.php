
<?php /* Template Name: Portfolio */ get_header(); ?>
<div class="container">	
	<!-- section -->
	<section role="main">
	
	<h1 class="title"><?php the_title(); ?></h1>
	 

	<ul class="portfoliolist">
		
	 <?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<li <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				
				<div class="showimage">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('medium'); ?>
						<span class="showtitle"><?php the_title(); ?></span>
					</a>
				</div>
			</li>

		<?php endwhile; ?>

		<?php else : ?>

			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<h1>Not Found</h1>
			</div>
			<li>	
		<?php endif; ?>
		<?php wp_reset_query(); // reset the query ?>
		
	</ul>
	
	</section>
	<!-- /section -->
	
</div>

<?php get_footer(); ?>