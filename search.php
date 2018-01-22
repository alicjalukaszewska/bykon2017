<?php
/**
 * The template for displaying Category pages
 */

get_header(); ?>
<div class="row">
<div class="container" style="margin: 0 auto;">
  <div class="span8">
    	<div class="col-lg-8 col-sm-12">
                    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
				<?php if(function_exists('bcn_display'))
                {
                    bcn_display();
                }?>
   			 </div>

		<?php 
        // Check if there are any posts to display
        if ( have_posts() ) : ?>

						<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Wyniki wyszukiwania: %s', 'weterynarz' ), get_search_query() ); ?></h1>
			</header><!-- .page-header -->

		<?php
			
			// The Loop
			while ( have_posts() ) : the_post(); ?>
			<a href="<?php the_permalink(); ?>">
            <span id="thumbnail" class="img-thumbnail"><?php if ( has_post_thumbnail() ) {the_post_thumbnail('thumbnail');}?></span></a>
            <a href="<?php the_permalink(); ?>"><h4> <?php the_title(); ?></h4></a>
            <p id="excerpt"><?php the_excerpt(); ?></p>
            <p class="homedate"><em><?php the_time('l, j-m-Y'); ?></em></p>   
            <p><?php the_category( $separator, $parents, $post_id ); ?> </p>
            
            <br/>
            
            <hr>
            
            <?php endwhile; else: ?>
              <p><?php _e('Przepraszamy, nie ma wpisów.'); ?></p>
            <?php endif; ?>
            <?php pagination();?>
        </div>
  </div>

        
        <div class="col-lg-4 col-sm-12">
                <div class="span4">
                    <?php get_sidebar(); ?>  	
              </div>
         </div>
    </div>
<?php
get_footer();
?>