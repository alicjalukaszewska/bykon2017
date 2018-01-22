<?php /* Template Name: Info Pages */ ?>
<?php get_header(); ?>

<div class="row" id="text_">
  <div class="span8 container">
	<h2 class="center">Informacje</h2>
	<?php wp_nav_menu( array( 'theme_location' => 'info' ) ); ?>  
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  	<?php the_content(); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Przepraszamy, taka strona nie istnieje'); ?></p>
	<?php endif; ?>

  </div>
  

<?php get_footer(); ?>