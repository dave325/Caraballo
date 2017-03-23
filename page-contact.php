<?php
/*
 * 
 *  Template Name:Contact
 * 
 */
get_header();
?>
<section id="contact-page">
		<article id="contact">
        	<form id="ddata-form" class="ddata-contact-form" method="POST" action="/script/contact-form-validation.php" data-ajax="false">
	        	<div id="ddata-incorrect-box"></div>
	        	<input name="ddata_send_email" type="hidden" class="ddata_input_field" id="ddata_send_email" value="limaryscaraballo@gmail.com">
	        	<br>
	        	<div class="ddata-input-row">
		        	<label for="ddata_contact_field_1"> Name</label>
		        	<input type="text" id="ddata_contact_field_1" name="ddata_contact_field_1" class="ddata_input_field" required="required">
	        	</div> <br>
	        	<div class="ddata-input-row">
		        	<label for="ddata_contact_field_2"> Email Address</label>
		        	<input type="text" id="ddata_contact_field_2" name="ddata_contact_field_2" class="ddata_input_field" required="required">
	        	</div> <br>
	        	<div class="ddata-input-row">
		        	<label for="ddata_contact_field_3"> Message</label>
		        	<input type="text" id="ddata_contact_field_3" name="ddata_contact_field_3" class="ddata_input_field" required="required">
	        	</div> <br>
	        	<input type="hidden" name="ddata-hidden-honeypot" id="ddata-honeypot" value=""><div class="ddata-input-row">
	        	<input type="submit" id="ddata-submit-button" name="ddata_submit_button" value="submit">
	        	</div> <br>
        	</form>
		<span></span>
		</article>
</section>
<br />
<?php get_footer();?>