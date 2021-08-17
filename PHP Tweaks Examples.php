<!-- 1) Change "Out of Stock" to "Sold Out" in SINGLE PRODUCT Page -->

<?php

add_filter('woocommerce_get_availability', 'availability_filter_func');
function availability_filter_func($availability)
{
$availability['availability'] = str_ireplace('Out of stock', 'Sold Out', $availability['availability']);
return $availability;
}

?>

<!-- ////////////////////////////////////////////////////////////////////////// -->

<!-- 2) Change "Out of Stock" to "Sold Out" in SHOP Page -->

<?php

add_filter( 'gettext', 'change_out_of_stock_text', 9999, 3 );
   
function change_out_of_stock_text( $translated, $untranslated, $domain ) {
   if ( ! is_admin() ) {
      switch ( $translated ) {
         case 'Out of Stock':
            $translated = 'Sold Out';
            break;
      }
   }   
   return $translated;
}

?>

<!-- ////////////////////////////////////////////////////////////////////////// -->

<!-- 3) Show Delivery Time under Order Review -->

<?php

add_action( 'woocommerce_checkout_order_review', 'my_custom_text', 15 );
function my_custom_text() {
if (ICL_LANGUAGE_CODE == "en") {
    print '<p>Delivery within 8-10 working days.</p>';
} else {
    print '<p>التوصيل خلال 8-10 أيام عمل</p>';
}
}

?>

<!-- ////////////////////////////////////////////////////////////////////////// -->

<!-- 4) Featured, Dates and By Destination Dates (Portfolio) -->

<?php

$url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
  
if ( false !== strpos( $url, 'europe-tour-packages' ) ) {
		if(get_field( "tour_start_date" ) != '' ){
       $output .= '<div class="tour_start_date">' . get_field( "tour_start_date" ) . ' - ' . get_field( "tour_end_date" ) . '</div>';
       } else{
			$output .= 'Fall 2021 - New dates coming soon!';
            }

?>

<!-- ////////////////////////////////////////////////////////////////////////// -->

<!-- 5) Apply CSS to a Page URL That Contains a given String -->

<?php

add_action( 'init', 'apply_css_if_url_contains_string' );
  
function apply_css_if_url_contains_string() {
  
$url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
  
if ( false !== strpos( $url, 'dev/attendee-registration' ) ) {
    echo '<style type="text/css">
         .home-widget-title, .cover-dashed, body.page-tribe-attendee-registration .tribe-common .tribe-tickets__registration__page-title {
   			display:none !important;
		 }

         </style>';
} 
}

?>

<!-- ////////////////////////////////////////////////////////////////////////// -->

<!-- 6) Remove Zoom on Hover on Single products (WooCommerce) -->

<?php

add_filter( 'woocommerce_single_product_zoom_options', 'custom_single_product_zoom_options', 10, 3 );
function custom_single_product_zoom_options( $zoom_options ) {
    // Disable zoom magnify:
    $zoom_options['magnify'] = 0;

    return $zoom_options;
}

?>

<!-- ////////////////////////////////////////////////////////////////////////// -->

<!-- 7) Change the front facing name of Posts to Blog Posts -->

<?php

function my_plugin_search_filter_change_label($input_object) {
  if ($input_object['name'] == '_sf_post_type') {
    foreach ($input_object['options'] as $key => $option) {
      if ($option->label == 'Posts') {
        $input_object['options'][$key]->label = 'Blog Posts';
      }
    }
  }
  return $input_object;
}
add_filter('sf_input_object_pre', 'my_plugin_search_filter_change_label', 10, 2);

?>

<!-- ////////////////////////////////////////////////////////////////////////// -->

<!-- 8) Header Info Change -->

<?php
  
if ( $_SERVER['HTTP_HOST'] == 'thehungrypooch.com' ) {
       echo '<span id="et-info-phone">519-915-9933</span>
       <a href="mailto:southwindsor@thehungrypooch.com"><span id="et-info-email">southwindsor@thehungrypooch.com</span></a>';
       } elseif ( $_SERVER['HTTP_HOST'] == 'lakeshore.thehungrypooch.com' ) {
				echo '<span id="et-info-phone">519-977-1120</span>
       <a href="mailto:lakeshore@thehungrypooch.com"><span id="et-info-email">lakeshore@thehungrypooch.com</span></a>';
                }

?>