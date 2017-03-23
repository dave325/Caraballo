/**
 * 
 */
jQuery(document).ready(function() {
	$j = jQuery;

	$j('.menu-marker img').click(function() {
		if ($j('#mobile-nav').hasClass('visible')) {
			$j('#mobile-nav').slideUp(700, function(){
				$j('#mobile-nav').removeClass('visible').css({
					'display' : 'none'
				});
			})
		} else {
			$j('#mobile-nav').slideDown().addClass('visible').css({
				'display' : 'block'
			});
		}
	});

});