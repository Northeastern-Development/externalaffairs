<?php

  // this loop will build the highlights content for the homepage

  // gather the needed data from the CMS
  $args = array(
    'posts_per_page'  => 3,
    'meta_query' => array(
      'relation' => 'AND',
      'type_clause' => array("key"=>"type","value"=>'highlights',"compare"=>"=")
    )
  );
  $res = query_posts($args);

  $guide = '<li><a href="%s" title="Click to %s" aria-label="%s"%s><div><img src="%s" alt="%s" aria-label="%s" /></div><p class="title" style="font-weight: bold;">%s</p><p>%s</p><span>%s</span></a></li>';

  $content = '';


  // loop through the records and build the content to be returned
  foreach($res as $r){
    $fields = get_fields($r->ID);
    $content .= sprintf(
      $guide
      ,trim($fields['link'])
      ,trim(strtolower($fields['link_copy']))
      ,trim(strtolower($fields['link_copy']))
      ,($fields['externalinternal'] == 1?' target="_blank"':'')
      ,$fields['image']['url']
      ,'image for '.strtolower($r->post_name)
      ,'image for '.strtolower($r->post_name)
      ,ucwords($r->post_name)
      ,$fields['excerpt']
      ,ucwords($fields['link_copy'])
    );
  }

?>

<ul>
  <?=$content?>
</ul>
