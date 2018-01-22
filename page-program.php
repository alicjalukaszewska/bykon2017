<?php /* Template Name: Program Pages */ ?>
<?php get_header(); ?>

<div class="row" id="text_">
  <div class="span8 container">
	<h2 class="center"><?php the_title(); ?></h2>
	<?php wp_nav_menu( array( 'theme_location' => 'program' ) ); ?>  
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  	<?php the_content(); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Przepraszamy, taka strona nie istnieje'); ?></p>
	<?php endif; ?>

  </div>
  

<?php get_footer(); ?>