<!DOCTYPE html>
<html>
<head>
	<title>
			<?php
				if (is_home() && !is_page()){
				bloginfo('name'); echo " | "; the_title();
				}
				elseif (is_home() && is_page()) {
				bloginfo('name'); wp_title( ' | ', true, 'left' );
				}	
				else {
				wp_title( ' | ', true, 'right' );	bloginfo('name');
				}
			?>
	</title>
	<link rel="stylesheet" type="text/css" href="<?php echo THEMEPATH; ?>/stylesheets/screen.css">
	<link href='http://fonts.googleapis.com/css?family=Rosario|Actor' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>
<body>
<div id="outerWrap">
	<div id="bgImage">
		<img src="<?php echo THEMEPATH; ?>/images/grass-leaves.jpg" alt="Fab Lab Alphen">
	</div><!--  end bgImage  -->
	<header>
		<?php 
			wp_nav_menu( array(
				'theme_location'  => 'Main_Menu',
				'menu'            => 'Hoofd Menu', 
				'container'       => 'nav', 
				'container_class' => 'menu-{menu slug}-container', 
				'container_id'    => '',
				'menu_class'      => 'menu', 
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => '' ) );
		 ?>
		<div id="logoWrap">
			<a href="<?php bloginfo('home'); ?>"><h1><?php bloginfo('title'); ?></h1></a>
		</div><!--  end logoWrap  -->
	</header>
	<div id="contentWrap">