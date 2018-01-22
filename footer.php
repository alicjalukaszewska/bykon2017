
</div>
<footer class="row">
	<div class="container">
		<div class="col-lg-3" id="logodown">
			<a class="hidden-xs" href="<?php bloginfo( 'home' ); ?>"><img src="<?=get_template_directory_uri(); ?>/img/logoup.png" alt="logo Bykonu"></img></a>
			<div class="icons">
				<a href="https://www.facebook.com/Bykonkonwent/"><img src="<?=get_template_directory_uri(); ?>/img/facebookpom.png" alt="Facebook"></img></a>
				<a href="https://www.instagram.com/bykon_konwent/"><img src="<?=get_template_directory_uri(); ?>/img/instagrampom.png" alt="logo Bykonu"></img></a>
				<a href="https://www.youtube.com/channel/UC77nJhrw1R-JfYNerd35njA"><img src="<?=get_template_directory_uri(); ?>/img/youtubepom.png" alt="logo Bykonu"></img></a>
			</div>
		</div>

		<div class="col-lg-3">
	              <?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>  
		</div>

		<div class="col-lg-3">
	              <?php wp_nav_menu( array( 'theme_location' => 'third' ) ); ?>  
		</div>
		
		<div class="col-lg-3 hidden-xs hidden-sm">
			<?php dynamic_sidebar( 'footer_widgets1' ); ?>	
		</div>
	</div>
</footer>
		<link href="https://fonts.googleapis.com/css?family=Oswald|Quattrocento|Quattrocento+Sans" rel="stylesheet"> 
<?php wp_footer(); ?>
</body>
</html>
