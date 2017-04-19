	<footer>
		
		<div class="footer-contact-info">
		<?php
		$the_slug = 'footer-contact';
		$args = array (
				'name' => $the_slug 
		);
		$my_posts = get_posts ( $args );
		if ($my_posts) :
			echo $my_posts [0]->post_content;
		
			endif;
		?>
		</div>
		<div class="footer-past-events">
		<?php
		$the_slug = 'footer-qc-logo';
		$args = array (
				'name' => $the_slug 
		);
		$my_posts = get_posts ( $args );
		if ($my_posts) :
			echo $my_posts [0]->post_content;
		
			endif;
		?>
		</div>
		<?php echo myTagLine(); ?>
		<?php wp_footer()?>
		</footer>
	</div>
</body>
</html>