<?php
/**
 * Theme Functions.
 * 
 * @package my-theme
 */

 function my_theme_enqueue_scripts() {
  wp_register_style( 'stylesheet', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ), 'all');
  // registers the style.css by getting the stylesheet path and timestamp of when it was last modified

  wp_register_script( 'main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime( get_template_directory() . '/assets/main.js' ), true );
  // registers the main.js by getting the file path and timestamp of when it was last modified
  //registers the main styleheet and javascript file 

  wp_enqueue_style( 'stylesheet' );
  wp_enqueue_script( 'main-js' );

 }

 add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts' );


 ?>