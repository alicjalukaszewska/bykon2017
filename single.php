<?php get_header(); ?>

<div class="row">
<div class="container" style="margin: 0 auto;">
  <div class="span8">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h3><?php the_title(); ?></h3>
		<div id="datesingle"><?php the_time('l, d-m-Y'); ?> </div>

	  	<?php the_content(); ?>
        <br/>
	  	<hr>       
		<?php the_post_navigation( array(
				'next_text' => '<span class="meta-nav nav-left" aria-hidden="true">' . __( 'Następny: ', 'bykon2017' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Następny artykuł: ', 'bykon2017' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav nav-right" aria-hidden="true">' . __( 'Poprzedni: ', 'bykon2017' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Poprzedni artykuł: :', 'bykon2017' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );
		?>
        <hr />
        <div class="comments">
		<?php if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; ?>
		</div>


	<?php endwhile; else: ?>
		<p><?php _e('Przepraszamy, ta strona nie istnieje.'); ?></p>
	<?php endif; ?>
    </div>
   </div>
    
</div>
<?php get_footer(); ?>