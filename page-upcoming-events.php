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
		<div class="event-container-left event-container">
		<div class="image-thumbnail"><?php the_post_thumbnail();?></div>
		<div class="past-text">
		<h3 class="past-event-title"><?php the_title();?></h3>
		<?php the_content();?>
		</div>
		</div>
		<?php endwhile;wp_reset_postdata(); endif;?>
		/*
		<table class="home-past-event-table">
			<tr id="home-past-heading">
				<td>Title</td>
				<td>Date</td>
			</tr>
			<?php 
        	global $wpdb;
        	$args = array(
        		'category_name' => 'upcoming-events',
        		'posts_per_page' => 3,
        		'offset' => 1
        	);
        	$query = new WP_QUERY($args);
        	?> 
        	<?php 
        	if ($query->have_posts()): while ($query->have_posts()) : $query->the_post() 
        	?>
        	<tr>
				<td><?php the_title();?></td>
				<td><?php get_post_custom_values("date");?></td>
			</tr>
        	<?php endwhile;wp_reset_postdata(); endif;?>
        	</table>*/
        	</section>
<?php get_footer();?>