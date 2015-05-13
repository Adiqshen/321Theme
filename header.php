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
				<a href="http://adiqshen.com/wordpressSpr15/" ><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="3-2-1 Battle! Wrestling" /></a>			
			</div> <!--End logo div-->         
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'ul', 'items_wrap' => '<ul class="nav-d">%3$s</ul>', ) ); ?>
		</nav>
	</header>	
	<div id="main">