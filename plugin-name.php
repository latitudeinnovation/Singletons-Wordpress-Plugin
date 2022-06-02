<?php
 /** 
   * Plugin Name: Plugin Name
   * Plugin URI: https://latitudeinnovation.com.my/
   * description: A Sample Singletons usage in Wordpress Plugin
   * Version: 1.0
   * Author: Latitude Innovation
   * Author URI: https://latitudeinnovation.com.my/
   * License: GPL2
 **/


if ( !class_exists( 'Plugin_Class' ) ) :

Class Plugin_Class {
  protected static $instance;

  public static function instance() {
    if( null == self::$instance ){
      self::$instance = new self();
    }
    return self::$instance;        
  }    

  protected function __construct() {
    // add_shortcode
    // add_filter
    // add_action
  }
  
  public function plugin_func() {
    
  }
  
 }

Plugin_Class::instance();

endif;
