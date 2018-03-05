<?php

	/* Template Name: Marketing */

	get_header();

	$fields = get_fields(7358);

?>

	<main id="marketing" role="main" aria-label="Content">

		<div id="nu__alert">
			<script src="//northe.edu/alert/current/nu__global-alert.js" async></script>
		</div>

		<section></section>

		<section class="intro" style="background: url(<?=$fields['header_image']['url']?>);background-size: cover;background-position: center center;">
			<h2>Marketing</h2>
			<div class="overlap"></div>
		</section>

		<section class="overview">
			<p>
				Our team leads initiatives that elevate Northeastern’s global visibility and distinctive brand profile. We advance the university’s mission and reputation through the strategic development of digital and print content; advertising and marketing campaigns; presidential-level and university-sponsored events; and public art initiatives for internal and external audiences.
			</p>
		</section>

		<section class="contact">
			<ul>
				<li>
					<h3>Contact Info</h3>
					<p>Amber Melo<br />
					Administrative Assistant to the Vice President and Chief Marketing Officer</p>
					<p><a href="mailto:a.melo@northeastern.edu" title="Click here to send an email"><span>&#xf003;</span>&nbsp;&nbsp;a.melo@northeastern.edu</a><br />
					<a href="tel:6173735718" title="Click here to call"><span>&#xf095;</span>&nbsp;&nbsp;617.373.5718</a></p>
				</li>
				<li>
					<h3>Marketing Toolkit</h3>
					<p>The Marketing Toolkit is your essential guide to promoting Northeastern. Included are branding and messaging guidelines and graphic standards, and logo files.</p>
					<a href="//northeastern.edu" title="Explore the toolkit" target="_blank" class="button light">Explore The Toolkit</a>
				</li>
			</ul>
		</section>

		<section class="highlights">
			<div>
				<?php $departmentType = "marketing"; include(locate_template('loops/loop-highlights.php')); ?>
			</div>
		</section>

	</main>
<?php get_footer(); ?>
