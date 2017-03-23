<?php
/*
 *
 * Template Name: Past Events
 *
 */
get_header ();
?>
<section id="past-events-section">
	<h2>Past Events</h2>
	<?php
	global $wpdb;
	$args = array (
			'category_name' => 'past-events'
	);
	$query = new WP_QUERY ( $args );
	$i = 0;
	?> 
        	<?php
									if ($query->have_posts ()) :
										while ( $query->have_posts () ) :
											$query->the_post ()?>
        	<?php if($i % 2 == 0){?>
        	<div class="event-container-left event-container">
		<div class="image-thumbnail"><?php the_post_thumbnail();?></div>
		<div class="past-text">
			<h3 class="past-event-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
			<?php the_excerpt();?>
		</div>
	</div>	
	
        	<?php $i++; }else{?>
        	<div class="event-container-right event-container">
		<div class="image-thumbnail"><?php the_post_thumbnail();?></div>
		<div class="past-text">
			<h3 class="past-event-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
			<?php the_excerpt();?>
		</div>
	</div>
        	<?php $i++;}?>
        	<?php endwhile; wp_reset_postdata(); endif;?>
</section>
<?php get_footer();?>