<?php 
/**
* ACF UPDATE GOOGLE MAP API
*/

$key = "AIzaSyC6PMoru8o2gkyOUv2Tn7suVaT9_MhZzy8";

function my_acf_google_map_api( $api ){
    $api['key'] = $key ;
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

function my_acf_init() {
	
	acf_update_setting('google_api_key', "AIzaSyC6PMoru8o2gkyOUv2Tn7suVaT9_MhZzy8");
}

add_action('acf/init', 'my_acf_init');

// wp_register_script('aa_js_googlemaps_script',  'https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyC6PMoru8o2gkyOUv2Tn7suVaT9_MhZzy8'); // with Google Maps API fix
// wp_enqueue_script('aa_js_googlemaps_script');