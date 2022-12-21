<?php
/**
 * Plugin Name: Gymfitness - Location with Leaflet
 * Plugin URI: https://github.com/imonweb/gymfitness
 * Description: Gymfitness Location
 * Author: Imon
 * Author URI: https://www.imonweb.co.uk
 * Text-Domain: url
 * Version: 0.1.0
 * License: GPL2
 * License URL: https://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: url
 **/

if(!defined('ABSPATH')) die();

// Shortcode API
function gymfitness_location_shortcode() { 
  $location = get_field('location');
?>

  <div class="location">
    <input type="hidden" id="lat" value="<?php echo $location['lat']; ?>">
    <input type="hidden" id="lng" value="<?php echo $location['lng']; ?>">
    <input type="hidden" id="address" value="<?php echo $location['address']; ?>">

    <div id="map"></div>
  </div>  

<?php 
}

add_shortcode('gymfitness_location', 'gymfitness_location_shortcode'); // [gymfitness_location]


// Enqueues the CSS and JS Files
function gymfitness_location_scripts() {

    if(is_page('contact-us') ): 
        // leaflet css
        wp_enqueue_style('leafletcss', 'https://unpkg.com/leaflet@1.5.1/dist/leaflet.css', array(), '1.5.1');

        // leaftlet JS
        wp_enqueue_script('leaftletjs', 'https://unpkg.com/leaflet@1.5.1/dist/leaflet.js', array(), '1.5.1', true );

        // Gymfitness leaftlet
        wp_enqueue_script('gymfitness-leaflet', plugins_url('/js/gymfitness-leaflet.js', __FILE__), array('leaftletjs'), '1.0.0', true  );
    endif;
}
add_action('wp_enqueue_scripts', 'gymfitness_location_scripts');