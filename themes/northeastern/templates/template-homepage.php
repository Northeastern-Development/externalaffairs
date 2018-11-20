<?php

	/* Template Name: Homepage Template */

	get_header();

?>

	<main role="main" aria-label="Content">

		<section class="fullwidth hero">
			<h1>Advancing Northeastern's reputation as the leader in global experiential learning, a top research university, and an innovator in higher education.</h1>
			<div>
				<img src="http://ea.local/wp-content/uploads/testimage.jpg" alt="hero image" aria-label="hero image" />
			</div>
		</section>

		<section class="resources">
			<h3>Resources</h3>
			<ul>
				<li><a href="https://www.northeastern.edu" title="Click to learn more about media inquiries" aria-label="Click to learn more about media inquiries" target="_blank">Media Inquiries</a></li>
				<li><a href="https://www.northeastern.edu" title="Click to learn more about brand toolkit" aria-label="Click to learn more about brand toolkit" target="_blank">brand Toolkit</a></li>
				<li><a href="https://www.northeastern.edu" title="Click to learn more about research advancement" aria-label="Click to learn more about research advancement" target="_blank">Research Advancement</a></li>
				<li><a href="https://www.northeastern.edu" title="Click to learn more about licensing" aria-label="Click to learn more about licensing" target="_blank">Licensing</a></li>
				<li><a href="https://www.northeastern.edu" title="Click to learn more about another one" aria-label="Click to learn more about another one" target="_blank">Another One</a></li>
			</ul>
			<ul>
				<li><a href="https://www.northeastern.edu" title="Click to learn more about another one" aria-label="Click to learn more about another one" target="_blank">Another One</a></li>
				<li><a href="https://www.northeastern.edu" title="Click to learn more about another one" aria-label="Click to learn more about another one" target="_blank">Another One</a></li>
				<li><a href="https://www.northeastern.edu" title="Click to learn more about another one" aria-label="Click to learn more about another one" target="_blank">Another One</a></li>
				<li><a href="https://www.northeastern.edu" title="Click to learn more about another one" aria-label="Click to learn more about another one" target="_blank">Another One</a></li>
				<li><a href="https://www.northeastern.edu" title="Click to learn more about another one" aria-label="Click to learn more about another one" target="_blank">Another One</a></li>
			</ul>
		</section>

		<section class="fullwidth highlights">
			<h3>External Affairs Highlights</h3>
			<?php include(locate_template('loops/loop-homepage-highlights.php')); ?>
		</section>

		<section class="fullwidth about">
			<div>
				<h3>About Us</h3>
				<h4>
					Et harum quidem rerum facilis est et expedita distinctio.
				</h4>
				<a class="button" href="<?=site_url()?>/our-staff" title="Click to learn about our team" aria-label="Click to learn about our team">Learn About Our Team</a>
			</div>
			<div>
				<img src="http://ea.local/wp-content/uploads/testimage.jpg" alt="about us image" aria-label="about us image" />
			</div>
		</section>

	</main>
<?php get_footer(); ?>
