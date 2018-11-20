<?php

	/* Template Name: Contact Template */

	get_header();

	// does this page use the generic hero space?
	$heroSpace = '';
	$fields = get_fields($post->ID);
	if(isset($fields['status']) && $fields['status'] == 1){
		$heroSpace = '<section class="fullwidth hero"><h1>'.ucwords($fields['title']).'</h1><p>'.$fields['secondary_copy'].'</p></section>';
	}

?>

	<main role="main" aria-label="Content">

		<?=$heroSpace?>

		<section>
			This is the contact page.
		</section>

	</main>
<?php get_footer(); ?>
