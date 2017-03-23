<?php
/*
 * 
 *  Template Name:Resources
 * 
 */
get_header();
?>
<section id="resources">
<h2>Resources</h2>
<?php 
        	global $wpdb;
        	$args = array(
        		'category_name' => 'resources'
        	);
        	$query = new WP_QUERY($args);
        	?> 
        	<?php 
        	if ($query->have_posts()): while ($query->have_posts()) : $query->the_post() 
        	?>
        	<div class='article-block'><h3><a href="<?php get_permalink();?>"><?php the_title();?></a></h3><p>Summary:</p><br />
		<p><?php the_content();?></p></div>
		<?php wp_reset_postdata(); endwhile;endif;?>
		<span></span>
</section>