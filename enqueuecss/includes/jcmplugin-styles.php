<?php


// Load CSS on the frontend

function jcmplugin_frontend_styles(){
  wp_enqueue_style(
    'wpplugin-frontend',
    WPPLUGIN_URL . '/css/jcmenqueue.css', [], time());

  }

add_action('wp_enqueue_scripts', 'jcmplugin_frontend_styles')
?>