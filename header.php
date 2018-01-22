<!DOCTYPE html>
<html>
<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php wp_head(); ?>
		<meta name="google-site-verification" content="7TzdZ7oiVQzrEWkIE49kWZfSMUL9J6SubHKtRS3bvr4" />

		<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '376784569154526');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=376784569154526&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->

<meta property="og:site_name" content="Bykon - Bydgoski Konwent Multifandomowy" />
<meta property="og:title" content="Bykon - Bydgoski Konwent Multifandomowy" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.bykon.pl/" />
<meta property="og:image" content="<?=get_template_directory_uri(); ?>/img/baner.png" />

</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="hidden-xs" id="image"></div>
	<nav class="navbar navbar-default navbar-fixed-top navig">
		<div class="container">
		 <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
  		<div id="logo">
			<a href="<?php bloginfo( 'home' ); ?>"><img src="<?=get_template_directory_uri(); ?>/img/logoup.png" alt="logo Bykonu"></img></a>
			<span id="title" class="hidden-md hidden-sm hidden-xs"><a href="<?php bloginfo( 'home' ); ?>">Bydgoski Konwent Multifandomowy</span></a>
		</div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right" id="menu-links">
        <li> <a href="<?php bloginfo( 'home' ); ?>#text">Aktualności</a></li>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Informacje <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php bloginfo( 'home' ); ?>/informacje/o-bykonie#text">O Bykonie</a></li>
            <li><a href="<?php bloginfo( 'home' ); ?>/informacje/data-i-miejsce#text">Data i miejsce</a></li>
            <li><a href="<?php bloginfo( 'home' ); ?>/informacje/regulamin#text"/">Regulamin</a></li>
            <li><a href="<?php bloginfo( 'home' ); ?>/informacje/dojazd#text"/">Dojazd</a></li>
	    <li role="separator" class="divider"></li>
	    <li><a href="<?php bloginfo( 'home' ); ?>/regulamincosplay#text">Regulamin konkursu Cosplay</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php bloginfo( 'home' ); ?>/informacje/tworcy-konwentu#text"/">Organizatorzy</a></li>
          </ul>
        </li>
        <li><a href="<?php bloginfo( 'home' ); ?>/bilety#text"/">BILETY</a></li>
        <li><a href="<?php bloginfo( 'home' ); ?>/program#text"/">Program</a></li>
<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Współpraca <span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li><a href="<?php bloginfo( 'home' ); ?>/wspolpraca/zgloszenie-stoiska#text"/">Zgłoszenie stoiska</a></li>
            <li><a href="<?php bloginfo( 'home' ); ?>/wspolpraca/zglos-sie-na-gzdacza#text"/">Zgłoszenie na gżdacza</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php bloginfo( 'home' ); ?>/wspolpraca/partnerzy#text"/">Partnerzy</a></li>
            <li><a href="<?php bloginfo( 'home' ); ?>/wspolpraca/sponsorzy#text"/">Sponsorzy</a></li>
            <li><a href="<?php bloginfo( 'home' ); ?>/wspolpraca/patroni-medialni#text"/">Patroni medialni</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php bloginfo( 'home' ); ?>/wspolpraca/wystawcy#text"/">Wystawcy</a></li>
          </ul>
        </li>
        <li><a href="<?php bloginfo( 'home' ); ?>/kontakt#text"/">Kontakt</a></li>
<!--        <li class="s-icon hidden-xs">
        	<a href="#" id="addClass1">
        		<span class="glyphicon glyphicon-search"></span>
        	</a>
        </li>
         <li class="s-icon visible-xs">
        	<a href="#" id="addClass2">Szukaj</a>
        </li>
 -->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
			<div>
		</div>
	</nav>

<div id="qnimate" class="off">
            <div id="search" class="open">
            	<button data-widget="remove" id="removeClass" class="close" type="button">×</button>
	            <form method="get" action="/index.php">
	                    <input type="text" placeholder="Wpisz szukaną fraze" value="" name="term" id="term">
	                    <button class="btn btn-lg btn-site" type="submit"><span class="glyphicon glyphicon-search"></span> Szukaj</button>
	            </form>
            
            </div>
</div>

<div class="shorts hidden-xs">
			<div class="short col-lg-3 col-sm-3 col-md-3" id="tickets">
				<a href="<?php bloginfo( 'home' ); ?>/bilety#text"/"><img src="<?=get_template_directory_uri(); ?>/img/bilety.jpg" alt="Bilety"></img></a>
			</div>	
			<div class="short col-lg-3 col-sm-3 col-md-3" id="info">
				<a href="<?php bloginfo( 'home' ); ?>/informacje/o-bykonie#text"/"><img src="<?=get_template_directory_uri(); ?>/img/informacje.jpg" alt="Informacje"></img></a>
			</div>

			<div class="short col-lg-3 col-md-3 col-sm-3" id="info">
				<a href="<?php bloginfo( 'home' ); ?>/program#text"/"><img src="<?=get_template_directory_uri(); ?>/img/program.jpg" alt="Informacje"></img></a>
			</div>
		<!--
			<div class="short col-lg-3 col-md-3 col-sm-3" id="info">
				<a href="<?php bloginfo( 'home' ); ?>/informacje/zgloszenie-stoiska#text"/"><img src="<?=get_template_directory_uri(); ?>/img/wystawcy.jpg" alt="Wystawcy"></img></a>
			</div>
		-->
			<div class="short col-lg-3 col-md-3 col-sm-3" id="info">
				<a href="<?php bloginfo( 'home' ); ?>/kontakt#text"/"><img src="<?=get_template_directory_uri(); ?>/img/kontakt.jpg" alt="Informacje"></img></a>
			</div>
</div>
			
	