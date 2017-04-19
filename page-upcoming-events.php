<?php
/*
 * 
 * Template Name: Upcoming Events
 * 
 */
get_header();?>
<section id="upcoming-events-section">
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
	<h1>
		<?php the_title()?>
	</h1>
	<div class="blog-content">
		<?php the_post_thumbnail();?>
	</div>
	<?php endwhile;wp_reset_postdata(); endif;?>
</section>
<?php get_footer();?>