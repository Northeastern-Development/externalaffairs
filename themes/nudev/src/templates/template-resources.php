<?php

	/* Template Name: Resources */

	get_header();

	$fields = get_fields(7366);

?>

	<main id="resources" role="main" aria-label="Content">

		<div id="nu__alert">
			<script src="//northe.edu/alert/current/nu__global-alert.js" async></script>
		</div>

		<section></section>

		<section class="intro" style="background: url(<?=$fields['header_image']['url']?>);background-size: cover;background-position: center center;">
			<h2>Resources</h2>
			<div class="overlap"></div>
		</section>

		<section class="overview">
			<p>
				Maintaining the editorial consistency and the visual coherence of Northeastern’s print, web, and multimedia communications is vital to protecting the integrity of the university’s brand. Our standards for graphic design, marketing language and editorial style, and logo usage convey the strengths inherent in the Northeastern.
			</p>
		</section>

		<section class="contact">
			<ul>
				<li>
					<h3>Marketing Toolkit</h3>
					<p>The Marketing Toolkit is your essential guide to promoting Northeastern. Included are branding and messaging guidelines and graphic standards, and logo files.</p>
					<p></p>
					<a href="//northeastern.edu" title="Explore the toolkit" target="_blank" class="button light">Explore The Toolkit</a>
				</li>
				<li>
					<h3>Graphic Identity</h3>
					<p>Northeastern’s identity system relies on the official university seal, redrawn to capture the classical lines of the seal as it appeared in the pre-digital age.</p>
					<p></p>
					<a href="//northeastern.edu" title="View identity guidelines" target="_blank" class="button light">View Identity Guidelines</a>
				</li>
			</ul>
		</section>

		<section class="highlights">
			<div>
				<?php $departmentType = "Northeastern standards, tools and policies"; include(locate_template('loops/loop-highlights.php')); ?>
			</div>
		</section>

	</main>
<?php get_footer(); ?>
