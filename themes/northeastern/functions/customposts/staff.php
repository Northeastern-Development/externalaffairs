<?php

  // this is the custom post type for staff

  register_taxonomy_for_object_type('category', 'Staff'); // Register Taxonomies for Category
  register_taxonomy_for_object_type('post_tag', 'Staff');
  register_post_type('staff', // Register Custom Post Type
      array(
      'labels' => array(
          'name' => __('Staff', 'nudev'), // Rename these to suit
          'singular_name' => __('Staff', 'nudev'),
          'add_new' => __('Add New', 'nudev'),
          'add_new_item' => __('Add New Staff Member', 'nudev'),
          'edit' => __('Edit', 'nudev'),
          'edit_item' => __('Edit Staff Member', 'nudev'),
          'new_item' => __('New Staff Member', 'nudev'),
          'view' => __('View Staff Member', 'nudev'),
          'view_item' => __('View Staff Member', 'nudev'),
          'search_items' => __('Search Staff Members', 'nudev'),
          'not_found' => __('No Staff Members found', 'nudev'),
          'not_found_in_trash' => __('No Staff Members found in Trash', 'nudev')
      ),
      'public' => true,
      'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
      'has_archive' => true,
      'supports' => array(
          'title',
          'editor',
          'excerpt',
          'thumbnail'
      ), // Go to Dashboard Custom nudev post for supports
      'can_export' => true, // Allows export in Tools > Export
      'taxonomies' => array(
          'post_tag',
          'category'
      ) // Add Category and Post Tags support
  ));


  // Add columns to administration post listing
  function add_staff_acf_columns ( $columns ) {
    $slice1 = array_slice($columns, 0, 2, true);
    $slice2 = array_slice($columns, 2, count($columns), true);
    return array_merge($slice1,array('department' => __ ( 'Department' )),array('status' => __ ( 'Status' )),$slice2);
  }

  function staff_custom_column ( $column, $post_id ) {
    switch ( $column ) {
      case 'department':
        $depts = get_post_meta ( $post_id, 'department', true );
        if(gettype($depts) == "array"){ // they are in more than one dept
          $v = '';
          foreach($depts as $d){  // loop through and grab each department that this person is part of
            $v .= ($v != ''?', '.$d:$d);
          }
          echo $v;
        }else{  // they are only in one dept
          echo $depts;
        }
        break;
      case 'status':
        if(get_post_meta ( $post_id, 'status', true ) == 1){
          echo 'Active';
        }else{
          echo 'Inactive';
        }
        break;
    }
  }


  // add filter options
  function staff_admin_posts_filter_restrict_manage_posts(){
    global $typenow;
    $type = 'staff';

    if ($typenow == $type){

      $values = get_field_object('field_5bec5fa1d3c07', 1)['choices'];

      $current_v = isset($_GET['ADMIN_FILTER_FIELD_VALUE'])? $_GET['ADMIN_FILTER_FIELD_VALUE']:'';

      $guide = '<option value="%s"%s>%s</option>';
?>
      <select name="ADMIN_FILTER_FIELD_VALUE"><option value=""><?php _e('Filter By Department', 'department'); ?></option>

<?php



      foreach ($values as $label => $value){

        printf(
           $guide
          ,$value
          ,$value == $current_v? ' selected="selected"':''
          ,$label
        );
      }
?>
      </select>
<?php
    }
  }


  function staff_posts_filter( $query ){
    global $pagenow;
    global $typenow;
    $type = 'staff';
    if ( $typenow == $type && is_admin() && $pagenow=='edit.php' && isset($_GET['ADMIN_FILTER_FIELD_VALUE']) && $_GET['ADMIN_FILTER_FIELD_VALUE'] != ''){

      // this is so that we can fuzzy find a match even if the profile is in more than 1 dept.
      $query->set('meta_query',array(
        array(
          'key' => 'department'
          ,'value' => $_GET['ADMIN_FILTER_FIELD_VALUE']
          ,'compare' => 'LIKE'
        )
      ));

    }
  }





  add_filter ( 'manage_staff_posts_columns', 'add_staff_acf_columns' );
  add_action ( 'manage_staff_posts_custom_column', 'staff_custom_column', 10, 2 );

  add_action( 'restrict_manage_posts', 'staff_admin_posts_filter_restrict_manage_posts' );
  add_filter( 'parse_query', 'staff_posts_filter' );


?>
