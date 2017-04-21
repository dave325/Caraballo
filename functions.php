<?php
	function dav_filter_title($currenttitle, $sep, $seplocal){
		//Grab the site name
		$site_name = get_bloginfo( 'name' );
		// Add the site name after the current page title
		$full_title = $site_name . $currenttitle;
		// If we are on the front_page or homepage append the description
		if ( is_front_page() || is_home() ) {
			//Grab the Site Description
			$site_desc = get_bloginfo( 'description' );
			//Append Site Description to title
			$full_title .= ' ' . $sep . ' ' . $site_desc;
		}
		return $full_title;
	}
	add_theme_support("post-thumbnails");
	add_filter('wp_title', 'dav_filter_title', 5, 3);
	register_nav_menu('Main Nav Menu', 'Header Nav');
	wp_enqueue_style('main-stylesheet', get_stylesheet_uri())
wp_deregister_script('jquery');
wp_register_script('jquery', ("https://code.jquery.com/jquery-3.2.1.min.js"), false, '3.2.1');;
	wp_enqueue_script("main-script", get_template_directory_uri() . '/script/script.js', array('jquery'));
	wp_enqueue_script("contact-script", get_template_directory_uri() . '/script/contact.js', array('jquery'));
	wp_localize_script("contact-script", 'ajaxObj', array(
			'ajaxurl' => admin_url('admin-ajax.php'),
			'nonce' => $ddata_nonce
		));
	//Function that adds tagline to websites
	function myTagLine(){
		$myInfo = "<br /><p id='dav-tagline'><a href='" . esc_url("http://www.daviddataram.com/") . "'>&copy;Dataram Development</a></p>";
		return $myInfo;
	}
?>