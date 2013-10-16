<?php get_header(); ?>

<div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">

		<div class="banner">
			<h1>Digital Raconteur</h1>
		</div>

</div>

<div class="slide" id="slide2" data-slide="2" data-stellar-background-ratio="0.5">
	<div class="container">

		<div id="content">
			<h1 class="title">Featured Projects</h1>


      <ul class="portfoliolist">
        
       <?php query_posts('post_type=post&post_status=publish&posts_per_page=3&paged='. get_query_var('paged')); ?>
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

      <div class="indexblock">
        <h1 class="title">Skills</h1>
        <ul>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/img/design.svg" class="skillsicon">
            <h1 class="title">Design</h1>
            <p>Branding, Interfaces and Experiences</p>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/img/develop.svg" class="skillsicon">
            <h1 class="title">Development</h1>
            <p>Execution of rock-solid deliverables</p>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/img/educate.svg" class="skillsicon">
            <h1 class="title">Educate</h1>
            <p>Guide, mentor and inspire</p>
            <p>
          </li>
      </div>
		</div>

	</div>
</div>

<?php get_footer(); ?>