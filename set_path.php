﻿<?php
include_once("../../../wp-load.php");
global $wpdb;
// print_r($_POST);
function SanitizeString($var){
	$var = strip_tags($var);
	$var = htmlentities($var);
	return stripslashes($var);
}
foreach($_POST as $item => $value):
	$data[str_replace('m-path-', '', $item)] = SanitizeString($value);
endforeach;

/*echo count($data);

print_r($data);*/
if(current_user_can('edit_others_pages')):
	$wpdb->update( 'wp_map_firsovo',
		array( 'element_name' => $data['name'], 'element_place' => $data['square'] , 'element_price' => $data['cost'] , 'element_price_new' => $data['new-cost'] , 'element_status' => $data['status']  , 'element_cadaster_number' => $data['cn']),
		array( 'element_uid' => $data['id'] )
	);
	echo "true";
endif;