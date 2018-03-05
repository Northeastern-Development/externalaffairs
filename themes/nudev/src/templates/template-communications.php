<?php

	/* Template Name: Communications */

	get_header();

	$fields = get_fields(7360);

?>

	<main id="communications" role="main" aria-label="Content">

		<div id="nu__alert">
			<script src="//northe.edu/alert/current/nu__global-alert.js" async></script>
		</div>

		<section></section>

		<section class="intro" style="background: url(<?=$fields['header_image']['url']?>);background-size: cover;background-position: center center;">
			<h2>Communications</h2>
			<div class="overlap"></div>
		</section>

		<section class="overview">
			<p>
				The Office of Communications promotes and protects Northeastern University's global reputation by developing and implementing clear, consistent, and engaging strategies that enhance public understanding of the university, its people, its pathbreaking research, and its global network of campuses and partners.
			</p>
			<a href="//news.northeastern.edu" title="Visit news @ northeastern" target="_blank" class="button light">Visit News @ Northeastern</a>
		</section>

		<section class="contact">
			<ul>
				<li>
					<h3>Contact Info</h3>
					<p>Kayla Skerry<br />
					Administrative Assistant to the Assistant Vice President for Communications</p>
					<p><a href="mailto:k.skerry@northeastern.edu" title="Click here to send an email"><span>&#xf003;</span>&nbsp;&nbsp;k.skerry@northeastern.edu</a><br /><a href="tel:6173737009" title="Click here to call"><span>&#xf095;</span>&nbsp;&nbsp;617.373.7009</a></p>
				</li>
			</ul>
		</section>

		<section class="highlights">
			<div>
				<?php $departmentType = "communications"; include(locate_template('loops/loop-highlights.php')); ?>
			</div>
		</section>

	</main>
<?php get_footer(); ?>
