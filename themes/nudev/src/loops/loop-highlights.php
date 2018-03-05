<?php

	$args = array(
		'category'       => 'department-highlight'
		,
		'meta_query' => array(
			'relation' => 'AND',
			array('key' => 'department','compare' => '=','value' => $departmentType)
		)
	);

	$res = query_posts($args);

	$content = "";

	$i = 1;

	while (have_posts()) : the_post();

		$fields = get_fields(get_the_ID());

		$guide = '<li style="background:url(%s);background-size:cover;background-position:center center;"><h4>%s</h4><a href="%s" title="Click here to read more" target="_blank">%s&nbsp;&nbsp;&#xf101;</a></li>';

		$content .= sprintf(
			 $guide
			,$fields['image']['url']
			,$fields['title']
			,$fields['link']
			,$fields['short_description']
		);

		$i++;

	endwhile;

	echo '<h2>Highlights From '.ucwords($departmentType).'</h2><ul>'.$content.'</ul>';

?>
