<?php

	define('THEMEPATH', get_stylesheet_directory_uri());

	function fablab_menus() {
		$locations = array(
				'Main_Menu'				=> 'Hoofd Menu',
				'Footer_menu'			=> 'Footer menu',
				'Mobile_footer_menu'	=> 'Footer Menu op mobiel',
			);
		register_nav_menus( $locations  );
	}

	add_action( 'init', 'fablab_menus' );

	function fablab_menu_sidebar() {
		$args = array(
			'name'			=> 'linkersidebar',
			'id'			=> 'left_sidebar',
			'description'	=> 'De linker sidebar',
			'before_widget'	=> '<div class="widgets">',
			'after_widget'	=> "</div>",
			'before_title'	=> '<h3 class="column_title">',
			'after_title'	=> "</h3>"
			);

		register_sidebar($args);
	}

	add_action('widgets_init', 'fablab_menu_sidebar');