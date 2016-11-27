<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo('charset')?>;">
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
<meta name="description" content="<?php bloginfo('description'); ?>" />
<title><?php wp_title(' | '); ?></title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<nav id="header-nav-menu">
		<?php
		$the_slug = 'home-content';
		$args = array (
				'name' => $the_slug 
		);
		$my_posts = get_posts ( $args );
		if ($my_posts) :
			echo $my_posts [0]->post_content;
		endif;
		?>
			<?php
			$dav_nav_menu = array (
					'container' => false,
					'echo' => false,
					'items_wrap' => '%3$s',
					'depth' => 0,
					'theme_location' => 'Main Nav Menu' 
			);
			echo strip_tags ( wp_nav_menu ( $dav_nav_menu ), '<a>' );
			?>
	</nav>
	<!-- End of navbar -->
	<div id="ddata-container">