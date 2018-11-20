<?php

  // Load conditional northeastern styles
  function northeastern_conditional_styles(){

    // if(is_page_template('templates/template-homepage.php')){
    //   wp_register_style('homepagecss', get_template_directory_uri() . '/css/homepage.css', array(), '1.0');
    //   wp_enqueue_style('homepagecss');
    // }

    if(is_page_template('templates/template-homepage.php')){
      // die('load homepage css!');
      wp_register_style('homepagecss', get_template_directory_uri() . '/css/homepage.css', array(), '1.0');
      wp_enqueue_style('homepagecss');
    }

    if(is_page_template('templates/template-expertise.php')){
      // die('load homepage css!');
      wp_register_style('expertisecss', get_template_directory_uri() . '/css/expertise.css', array(), '1.0');
      wp_enqueue_style('expertisecss');
    }

    if(is_page_template('templates/template-staff.php')){
      wp_register_style('staffcss', get_template_directory_uri() . '/css/staff.css', array(), '1.0');
      wp_enqueue_style('staffcss');
    }

  }

?>
