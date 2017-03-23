<?php
get_header();?>
<?php while(have_posts()): the_post()?>
<section id="dav-blog-post-<?php the_ID(); ?>" class="blog">
<article>
<h1><?php the_title()?></h1>
<div class="blog-content">
<?php the_post_thumbnail();?>
<?php the_content();?>
</div>
<?php endwhile;?>

<?php get_footer();?>