<?php

/**
 * 
 * @package JCMenqueueCSS
 */


 if (! defined('WP_UINSTALL_PLUGIN')){
     die; 
 }


 // Clear Database stored data
 $Enqueues = get_posts( array('post_type' => 'book', 'numberposts' => -1)); 
 
 foreach($Enqueues as $Enqueue){
     wp_delete_post ($Enqueue->ID, true); 

 }