<?php get_header()?>
<section id="home-upcoming-events">
	<h2>Upcoming Events</h2>
<?php
$args = array (
		'category_name' => 'upcoming-events',
		'posts_per_page' => 1 
);
$query = new WP_QUERY ( $args );
if ($query->have_posts ()) :
	while ( $query->have_posts () ) :
		$query->the_post ()?>
		<div class="home-upcoming-div home-upcoming-image">
		<?php the_post_thumbnail();?>
		</div>
	<div class="home-upcoming-div home-upcoming-description">
		<?php the_content();?>
		</div>
		<?php endwhile; wp_reset_postdata();  endif;?>
</section>
<section id="home-past-events">
	<h2>Past Events</h2>
	<table class="home-past-event-table">
		<tr id="home-past-heading">
			<td>Title</td>
			<td>Date</td>
		</tr>
	<?php
	$args = array (
			'category_name' => 'past-events',
			'posts-per-page' => 3 
	);
	$query = new WP_QUERY ( $args );
	if ($query->have_posts ()) :
		while ( $query->have_posts () ) :
			$query->the_post ()?>
	<tr>
			<td><?php the_title();?></td>
			<td><?php get_post_custom_values('date');?></td>
		</tr>
	<?php endwhile; wp_reset_postdata();  endif;?>
	</table>
</section>
<?php get_footer()?>