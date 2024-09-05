<?php

if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; 
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );


    $file_name = '/customStyle.css';
	$style_path =  get_stylesheet_directory() . $file_name; 
	wp_enqueue_style(
        'theme-style', 
        get_stylesheet_directory_uri(). $file_name,
        array(),
        file_exists($style_path) ? filemtime($style_path) : false
    );
}




add_action('wp_enqueue_scripts', 'jsLoader');
function jsLoader() {
    wp_enqueue_script("animations", get_stylesheet_directory_uri() . '/js/animations.js', array(), '1.0.0', true);
    wp_enqueue_script("titleFade", get_stylesheet_directory_uri() . '/js/titleFade.js', array(), '1.0.0', true);
    wp_enqueue_script("carrouselConfig", get_stylesheet_directory_uri() . '/js/carrouselConfig.js', array(), '1.0.0', true);
    wp_enqueue_script("menuNav", get_stylesheet_directory_uri()."/js/menuNav.js", array(), '1.0.0', true);
    wp_enqueue_style("aos-css", "https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css");
    wp_enqueue_script("aos-js", "https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js", array(), null, true);

   
    wp_add_inline_script("aos-js", "AOS.init({
 
  disable: false, 
  startEvent: 'DOMContentLoaded', 
  initClassName: 'aos-init', 
  animatedClassName: 'aos-animate', 
  useClassNames: false, 
  disableMutationObserver: false, 
  debounceDelay: 50, 
  throttleDelay: 99, 
  

  
  offset: 120, 
  delay: 0, 
  duration: 400, 
  easing: 'ease', 
  once: false, 
  mirror: false, 
  anchorPlacement: 'top-bottom', 

});");

}

add_action("wp_enqueue_scripts", 'enqueue_swiper_assets');
function enqueue_swiper_assets() {
    wp_enqueue_style("swiper-css", "https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css");
    wp_enqueue_script("swiper-js", "https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js");
}


