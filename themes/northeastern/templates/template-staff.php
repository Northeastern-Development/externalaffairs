<?php

	/* Template Name: Staff Template */

	get_header();

	// does this page use the generic hero space?
	$heroSpace = '';
	$fields = get_fields($post->ID);
	if(isset($fields['status']) && $fields['status'] == 1){
		$heroSpace = '<section class="fullwidth hero"><h1>'.ucwords($fields['title']).'</h1><p>'.$fields['secondary_copy'].'</p></section>';
	}

	// did we get a filter value from the rewrite?
	$fChk = $wp_query->query_vars['staff-filter'];
	$filter = (isset($fChk) && $fChk != ''?$fChk:'');
?>

	<main id="staff" role="main" aria-label="Content">

		<?=$heroSpace?>

		<section class="filternav">
			<?php include(locate_template('loops/loop-staff-filter.php')); ?>
		</section>

		<section class="staff">
			<h2><?=$deptTitle?></h2>
			<?php include(locate_template('loops/loop-staff.php')); ?>
		</section>

	</main>
<?php get_footer(); ?>
