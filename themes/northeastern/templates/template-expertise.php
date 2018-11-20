<?php

	/* Template Name: Expertise Template */

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

		<section class="teams">
			<?php include(locate_template('loops/loop-expertise.php')); ?>
		</section>

	</main>
<?php get_footer(); ?>
