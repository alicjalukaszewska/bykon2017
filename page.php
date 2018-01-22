<?php get_header(); ?>

<div class="row" id="text_">
  <div class="span8 container">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><?php the_title(); ?></h2>
	  	<?php the_content(); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Przepraszamy, taka strona nie istnieje'); ?></p>
	<?php endif; ?>

  </div>
  

<?php get_footer(); ?>