<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?">
	<link rel="stylesheet" href="<?php bloginfo('stylesheets_url'); ?>" />
	<title><?php bloginfo('name'); ?></title>
	<script src="http://use.edgefonts.net/josefin-slab.js"></script>
	<script src="http://use.edgefonts.net/merriweather.js"></script>
	<?php wp_head(); ?> 
</head>
	<body <?php body_class( $class ); ?>
		<header>
			<h1><?php bloginfo('name'); ?></h1>
			<nav>
				<?php wp_nav_menu( array( 'menu' => 'Main Nav') ); ?>
				<!--
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">WordPress</a></li>
				</ul> -->
			</nav>
		</header>