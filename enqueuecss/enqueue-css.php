<?php
/*
Plugin Name: JCM Wordpress Enqueue Custom CSS
Plugin URI: 
Description: This plugin will change how posts are dislplayed on the home page as well as the comment page. 
Version: 1.0.0
Author: Judd Melvin
License: GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: JCMenqueueCSS
Domain Path:  /languages
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

define( 'WPPLUGIN_URL', plugin_dir_url( __FILE__ ) );

include( plugin_dir_path( __FILE__ ) . 'includes/jcmplugin-styles.php');

class JCMenqueueCSS {


  function activate(){
    flush_rewrite_rules(); 

  }
  function deactivate(){
    flush_rewrite_rules(); 
    
  }
  function custom_post_type(){
    register_post_type('Enqueue', ['public' => true, 'label' => 'Enqueue']); 
  }
}

if (class_exists( 'JCMenqueueCSS')){
  $JCMenqueueCSS = new JCMenqueueCSS(); 
}



//activation 
register_activation_hook(__FILe__, array( $JCMenqueueCSS, 'activate' )); 

//deactivation
register_deactivation_hook(__FILe__, array( $JCMenqueueCSS, 'deactivate' ));