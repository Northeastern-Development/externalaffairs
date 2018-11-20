<?php

  // get all of the staff departments from the choices in the staff tool
  $staffCats = get_field_object('field_5bec5fa1d3c07',1)['choices'];

  $departments = '<ul><li><a href="'.site_url().'/our-staff" title="View all staff" aria-title="View all staff" class="'.($filter == ''?'active':'').'">All Staff</a></li>';

  // build out the list of departments for the filter dropdown
  $deptGuide = '<li><a href="%s" title="%s" aria-title="%s" class="%s">%s</a></li>';
  foreach($staffCats as $sC){
    $val = str_replace(" ","-",$sC);
    $departments .= sprintf(
      $deptGuide
      ,site_url().'/our-staff/'.strtolower(str_replace(' ','-',$sC))
      ,'View '.strtolower($sC)
      ,'View '.strtolower($sC)
      ,($filter == strtolower(str_replace(' ','-',$sC))?'active':'')
      ,ucwords($sC)
    );
  }

  $departments .= '</ul>';

  echo $departments;

?>
