<?php

	/* Template Name: Staff */

	get_header();

	$fields = get_fields(7364);

	// get all fo the staff departments
	$staffCats = get_categories(array('parent' => 39));

	// build out the list of departments for the filter dropdown
	$departments = '';
	foreach($staffCats as $sC){
		$val = str_replace("-","_",$sC->slug);
		if($sC->slug === "senior-team"){
			$val = explode("-",$sC->slug)[0];
		}
		$departments .= '<option value="'.$val.'" '.(isset($_GET['filter']) && $_GET['filter'] === $val?'selected="selected"':'').'>'.ucwords($sC->name).'</option>';
	}

	// get the title of the department that we are looking at
	$deptTitle = (isset($_GET['filter']) && $_GET['filter'] != ""?ucwords(str_replace("_"," ",$_GET['filter']))." Team":"All Staff");
?>

	<main id="staff" role="main" aria-label="Content">

		<div id="nu__alert">
			<script src="//northe.edu/alert/current/nu__global-alert.js" async></script>
		</div>

		<section></section>

		<section class="intro" style="background: url(<?=$fields['header_image']['url']?>);background-size: cover;background-position: center center;">
			<h2>External Affairs Staff</h2>
		</section>

		<section class="filternav">
			Filter By: <select>
				<option value="">All Staff</option>
				<?=$departments?>
			</select>
		</section>

		<section class="stafflist">
			<div>
				<h2><?=$deptTitle?></h2>
				<?php get_template_part('loops/loop-staff'); ?>
			</div>
		</section>

	</main>
<?php get_footer(); ?>
