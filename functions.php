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
	add_filter('wp_title', 'dav_filter_title', 5, 3);

	
?>