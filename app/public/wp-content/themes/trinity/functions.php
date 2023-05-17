<?php

// Globals

if ( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' => 'Globals',
		'menu_title' => 'Globals',
		'menu_slug'  => 'globals',
		'capability' => 'edit_posts',
		// 'redirect' => false
	));

	acf_add_options_sub_page(array(
		'page_title'  => 'About',
		'menu_title'  => 'About',
		'parent_slug' => 'globals'
	));

}
