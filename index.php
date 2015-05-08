<!doctype html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Allerta+Stencil' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Stardos+Stencil' rel='stylesheet' type='text/css'>
<meta charset="UTF-8">
<meta name="robots" content="noindex">
<meta name="viewport" content="width=device-width, maximum-scale=2" />
<title><?php bloginfo('description'); ?> ... <?php bloginfo('name'); ?> ... Seattle, WA</title>
  <!--[if lt IE 9]>
   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/responsive-nav.js"></script>
<!-- Start wp_head -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header>

		<nav>

			<div id="logo">

				<a href="../wordpressSpr15" ><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="3-2-1 Battle! Wrestling" /></a>
			
			</div> <!--End logo div-->
			<ul class="nav-d">
				<li><a href="">About Us</a></li>
				<li><a href="">Media</a></li>
				<li><a href="">News</a></li>
				<li><a href="">Roster</a></li>
				<li><a href="">Events</a></li>				
			</ul>

			<ul class="nav-collapse">
				<li><a href="">Events</a></li>
				<li><a href="">Roster</a></li>
				<li><a href="">News</a></li>
				<li><a href="">Media</a></li>
				<li><a href="">About</a></li>				
			</ul>

		</nav> <!--End nav div-->
	</header>
	
	<div id="main">
		<div id="splash">
			<a href="" ><img src="<?php bloginfo('template_directory'); ?>/images/rotatingImg.png" alt="Splash Picture" /></a>

		</div><!-- End of splash -->
		<aside>
			<div id="event1">
				<a href="" ><img src="<?php bloginfo('template_directory'); ?>/images/event1.png" alt="Event 1 Picture" /></a>

				<h3>Next Event</h3>
				<p>01/01/2016</p>
				<p>Random Location</p>
			</div><!-- End event1 div -->
			<div id="event2">
				<a href="" ><img src="<?php bloginfo('template_directory'); ?>/images/event2.png" alt="Event 2 Picture" /></a>

				<h3>Future Event</h3>
				<p>01/01/2016</p>
				<p>Random Location</p>
			</div><!-- End event2 div -->
			<div id="event3">
				<a href="" ><img src="<?php bloginfo('template_directory'); ?>/images/event3.png" alt="Event 3 Picture" /></a>

				<h3>Future Event</h3>
				<p>01/01/2016</p>
				<p>Random Location</p>
			</div><!-- End event3 div -->
			<div id="event4">
				<a href="" ><img src="<?php bloginfo('template_directory'); ?>/images/event4.png" alt="Event 4 Picture" /></a>

				<h3>Future Event</h3>
				<p>01/01/2016</p>
				<p>Random Location</p>
			</div><!-- End event4 div -->
		</aside>

		<section>
            <div id="wrestler">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_content(''); ?>		
			</div><!--End of wrestler-->
                <?php endwhile; endif; ?>
		</section>

<!-- Top of Bottom -->
	</div> <!-- End of main -->

		<footer>
		<div id="footerLogo">

			<a href="../wordpressSpr15" ><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="3-2-1 Battle! Wrestling" /></a>
		</div><!--End footerLogo div-->
		<div id="footerSocial">
			<a href="" ><img src="<?php bloginfo('template_directory'); ?>/images/youtubeImg.png" class="left" alt="Visit our YouTube channel" /></a>
			<a href="" ><img src="<?php bloginfo('template_directory'); ?>/images/gplusImg.png" alt="Visit our Google Plus page" /></a>
			<a href="" ><img src="<?php bloginfo('template_directory'); ?>/images/twitterImg.png" alt="Visit our Twitter feed" /></a>
			<a href="" ><img src="<?php bloginfo('template_directory'); ?>/images/fbImg.png" class="right" alt="Visit our Facebook page" /></a>

		</div> <!--End footerSocial div-->
		<div id="footerNav" class="fltLeft">
			<ul>
				<li><a href="">Events</a></li>
				<li><a href="">Roster</a></li>
				<li><a href="">News</a></li>
			</ul>
			<ul>				
				<li><a href="">Media</a></li>
				<li><a href="">About Us</a></li>
				<li><a href="">Contact Us</a></li>			
			</ul>
		</div><!--nd of footerNav-->
		<div id="footerSig" class="fltRight">
			<ul>
				<li>&copy; Copyright 2015</li>
				<li>All Rights Reserved</li>
				<li><!--<a href="">-->3-2-1 Battle! Wrestling<!--</a>--></li>
			</ul>
		</div><!--End footerSig-->

	</footer><!--End footer-->
<script>
  var nav = responsiveNav(".nav-collapse");
</script>
<!-- Start wp_footer -->
<?php wp_footer(); ?>  
</body>
</html>
