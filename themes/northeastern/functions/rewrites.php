<?php


  // we need to prevent the canonical redirect for theh homepage?
  function disable_canonical_redirect_for_front_page( $redirect ) {
    if ( is_page() && $front_page = get_option( 'page_on_front' ) ) {
      if ( is_page( $front_page ) )
        $redirect = false;
    }

    return $redirect;
  }


  // add custom query tags here
  function myplugin_rewrite_tag(){

  	add_rewrite_tag( '%staff-filter%', '([^&]+)' );	// this is for the staff page

  }


  // add custom rewrite rules here
  function custom_rewrite_rule(){

		add_rewrite_rule('^our-staff/([^/]*)?','index.php?page_id=7533&staff-filter=$matches[1]','top');  // staff

  }


  add_filter( 'redirect_canonical', 'disable_canonical_redirect_for_front_page' );
  add_action('init', 'myplugin_rewrite_tag', 10, 0);
  add_action('init', 'custom_rewrite_rule', 10, 0);
?>
