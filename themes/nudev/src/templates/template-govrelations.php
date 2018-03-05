<?php

	/* Template Name: Government Relations */

	get_header();

	$fields = get_fields(7362);

?>

	<main id="government" role="main" aria-label="Content">

		<div id="nu__alert">
			<script src="//northe.edu/alert/current/nu__global-alert.js" async></script>
		</div>

		<section></section>

		<section class="intro" style="background: url(<?=$fields['header_image']['url']?>);background-size: cover;background-position: center center;">
			<h2>Government Relations</h2>
			<div class="overlap"></div>
		</section>

		<section class="overview">
			<p>
				We take a unique, entrepreneurial approach to government relations. By shaping research, policy, and global engagement, we seek strategic opportunities to expand the university’s influence and advance its mission.
			</p>
			<a href="//northeastern.edu/governmentrelations" title="Visit the government relations site" target="_blank" class="button light">Visit The Site</a>
		</section>

		<section class="contact">
			<ul>
				<li>
					<h3>Contact Info</h3>
					<p>Rachel Shaheen<br />
					Administrative Assistant to the Vice President</p>
					<p><a href="mailto:r.shaheen@northeastern.edu" title="Click here to send an email"><span>&#xf003;</span>&nbsp;&nbsp;r.shaheen@northeastern.edu</a><br /><a href="tel:617.373.8528" title="Click here to call"><span>&#xf095;</span>&nbsp;&nbsp;617.373.8528</a></p>
				</li>
			</ul>
		</section>

		<section class="highlights">
			<div>
				<?php $departmentType = "government relations"; include(locate_template('loops/loop-highlights.php')); ?>
			</div>
		</section>

	</main>
<?php get_footer(); ?>
