<?php
/*
 * 
 * Template Name: About
 * 
 */
get_header();?>
<section id="mission-statement">
<?php 
        	global $wpdb;
        	$args = array(
        		'name' => 'mission-statement',
        		'posts_per_page' => 1
        	);
        	$query = new WP_QUERY($args);
        	?> 
        	<?php 
        	if ($query->have_posts()): while ($query->have_posts()) : $query->the_post() 
        	?>
		<h2><?php the_title();?></h2>
		<?php the_content();?>
		<?php endwhile;wp_reset_postdata(); endif;?>
	</section>
	<section id="home-upcoming-events">
	<h2>Upcoming Events</h2>
	<?php 
        	global $wpdb;
        	$args = array(
        		'category_name' => 'upcoming-events',
        		'posts_per_page' => 1
        	);
        	$query = new WP_QUERY($args);
        	?> 
        	<?php 
        	if ($query->have_posts()): while ($query->have_posts()) : $query->the_post() 
        	?>
		<div class="home-upcoming-div home-upcoming-image">
			<?php the_post_thumbnail();?>
		</div>
		<div class="home-upcoming-div home-upcoming-description">
			<h3><?php the_title();?></h3>
			<?php the_excerpt();?>
		</div>
		<?php endwhile;wp_reset_postdata(); endif;?>
		<span class="clear"></span>
	</section>
	<section id="who-we-are">
	<?php 
        	global $wpdb;
        	$args = array(
        		'name' => 'who-we-are',
        		'posts_per_page' => 1
        	);
        	$query = new WP_QUERY($args);
        	?> 
        	<?php 
        	if ($query->have_posts()): while ($query->have_posts()) : $query->the_post() 
        	?>
		<h2><?php the_title();?></h2>
		<?php the_content();?>
		<?php endwhile;wp_reset_postdata(); endif;?>
	</section>
	<?php get_footer();?>