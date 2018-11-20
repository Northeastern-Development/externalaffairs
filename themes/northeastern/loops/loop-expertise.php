<?php

  // gather up the expertise content from the CMS
  $args = array(
    'posts_per_page'  => -1,
    'meta_query' => array(
      'relation' => 'AND',
      'type_clause' => array("key"=>"type","value"=>'expertise',"compare"=>"=")
    )
  );
  $res = query_posts($args);

  $guide = '<article><a href="%s" title="click to learn more about %s" aria-label="click to learn more about %s"%s><div class="copy"><h3>%s</h3>%s<br /><span>%s</span></div><div class="image"><div><img src="%s" alt="image for %s" aria-label="image for %s" /></div></div></a></article>';

  $content = '';

  // loop through the records and build the content to be returned
  foreach($res as $r){
    $fields = get_fields($r->ID);
    $content .= sprintf(
      $guide
      ,trim($fields['link'])
      ,ucwords($r->post_title)
      ,ucwords($r->post_title)
      ,($fields['externalinternal'] == 1?' target="_blank"':'')
      ,ucwords($r->post_title)
      ,$fields['excerpt']
      ,$fields['link_copy']
      ,$fields['image']['url']
      ,strtolower($r->post_title)
      ,strtolower($r->post_title)
    );
  }

  echo $content;

?>
