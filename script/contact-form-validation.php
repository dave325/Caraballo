<?php
ddata_form_data_function();
function ddata_form_data_function() {
	global $wpdb;
	$i = 1;
	function test_input($input) {
		$input = trim ( $input );
		$input = stripslashes ( $input );
		$input = htmlspecialchars ( $input );
		return $input;
	}
	$form_contents = array ();
	$ddata_json_data = array();
	
	while ( $i <= 3 ) {
		if (isset ( $_POST ['ddata_contact_field_' . $i] )) {
			$newData = array(
					'value' =>  test_input ( $_POST ['ddata_contact_field_' . $i] ['value'] ),
					'type' => $_POST ['ddata_contact_field_' . $i] ['type'],
					'label' => $_POST ['ddata_contact_field_' . $i] ['label']
		 	);
			$form_contents['contact_field_' . $i] = $newData; 
		}
		$i ++;
	}
	foreach ($form_contents as $k=>$v){
		$ddata_label_name = $v['label'];
		$ddata_value_test = $v['value'];
		if($v['type'] === 'text' || $v['type'] === 'textarea'){
			if(isset($k) && strlen($ddata_value_test) > 0){
				$ddata_json_data[$ddata_label_name] = $ddata_value_test;
			}else{
				$ddata_json_data['error'] .= 'No value for ' . $v['label'];
			}
		}
		$ddata_json_data[$ddata_label_name] = $ddata_value_test;
	}
if (isset($_POST['site'])){
			$ddata_json_data['site'] =  test_input($_POST['site']);
		}
		if (isset($_POST['ddata_send_email'])){
			$ddata_json_data['ddata-email'] = test_input($_POST['ddata_send_email']['value']);
		}
	$subject = "Website Inquiry";
	$to = "davedataram@gmail.com";
	$message = implode('|',$ddata_json_data);
	$nonce = $_POST ['nonce'];
	if (! wp_verify_nonce ( $nonce, 'ddata-contact-nonce' )) {
		die ();
	} else {
			if (wp_mail ( $to, $subject, $message)){
				wp_mail ( $to, $subject, $message);
				wp_send_json($ddata_json_data);
			}else{
				wp_send_json($ddata_json_data['error']);
			}
	}
	wp_die();
}
add_action ( 'wp_ajax_ddata_form_data', 'ddata_form_data_function' );
add_action ( 'wp_ajax_nopriv_ddata_form_data', 'ddata_form_data_function' );