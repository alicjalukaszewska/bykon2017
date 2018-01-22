<?php get_header(); ?>

<div class="row" id="text_">
<div class="container">    
  <h2 id="newsh2">Aktualności</h2>
  <div class="">
  	<div class="col-lg-8 col-sm-12" id="post">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="wrapper">
        <a href="<?php the_permalink(); ?>">
        <div class="homedate"><?php the_time('d.m'); ?><br/><?php the_time('Y'); ?></div>   
        <div class="homepost">
          <h4> <?php the_title(); ?></h4>
          <p id="excerpt"><?php the_excerpt(); ?></p>
          <div class="more">czytaj więcej</div>
        </div></a>
      </div>
    
    <?php endwhile; else: ?>
      <p><?php _e('Przepraszamy, nie ma wpisów.'); ?></p>
    <?php endif; ?>
	</p>
  <span class="pagin">
    <?php pagination();?>
  </span>
  </div>
  </div>
  <div class="col-lg-4 hidden-xs">
    <div class="span4">
	<?php dynamic_sidebar( 'home_right_1' ); ?>	
  </div>
  </div>
  </div>
</div>
<?php get_footer(); ?>