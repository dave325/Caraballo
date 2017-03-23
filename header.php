<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo('charset')?>">
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
<meta name="description"
	content="<?php bloginfo('description'); ?>" />
<title><?php wp_title(' | '); ?></title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<nav id="header-nav-menu">
		<img src="<?php echo get_template_directory_uri()?>/images/logo.jpg"
			alt="">
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
	<div class="menu-marker"><img alt="mobile menu icon" src="<?php echo get_template_directory_uri();?>/images/mobile-nav.png" /></div>
		<nav id="mobile-nav" class="mobile-menu">
		<?php 
			$dav_nav_menu = array(
						'container' => false,
						'echo' => false,
						'items_wrap' =>'%3$s',
						'depth' => 0,
						'theme_location' => 'Main Nav Menu'
				);
				echo strip_tags(wp_nav_menu( $dav_nav_menu ), '<a>' );
			?>
		</nav>
	<!-- End of navbar -->
	<div id="ddata-container">
		<header>
			<div id="gallery">
				<?php 
        	global $wpdb;
        	$args = array(
        		'name' => 'home-gallery',
				'post_type' => 'post'
        	);
        	$query = new WP_QUERY($args);
        	?>
				<?php 
        			if ($query->have_posts()): while ($query->have_posts()) : $query->the_post() 
        		?>
				<?php
				the_content();
				?>
				<?php
			 wp_reset_postdata(); endwhile; else: endif;
			?>
				<div id="home-floating-text">
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
				</div>
			</div>
		</header>
</body>
</html>