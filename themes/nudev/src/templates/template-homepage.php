<?php

	/* Template Name: Homepage */

	get_header();

?>

	<main id="homepage" role="main" aria-label="Content">

		<div id="nu__alert">
			<script src="//northe.edu/alert/current/nu__global-alert.js" async></script>
		</div>

		<section class="intro">
			<h2>External Affairs</h2>
			<h1>Our mission is to advance the strategic interests of Northeastern University by actively promoting its ideas, people, and unique strengths.</h1>
		</section>

		<section class="threepillars">
			<ul>
				<li>
					<h3>Marketing</h3>
					<a href="<?=home_url()?>/marketing" title="Learn more about marketing" class="button">Learn More</a>
					<img src="http://fpoimagery.com/?t=px&w=500&h=200&bg=0ff&fg=000000" alt="marketing image" />
					<h6>
						Northeastern Magazine
					</h6>
					<p>
						Stay abreast of all the news from alumni, faculty, and others.
					</p>
				</li>
				<li>
					<h3>Communications</h3>
					<a href="<?=home_url()?>/communications" title="Learn more about communications" class="button">Learn More</a>
					<img src="http://fpoimagery.com/?t=px&w=500&h=200&bg=0ff&fg=000000" alt="communications image" />
					<h6>
						News @ Northeastern
					</h6>
					<p>
						Timely stories from the classroom, laboratory, or another continent.
					</p>
				</li>
				<li>
					<h3>Government Relations</h3>
					<a href="<?=home_url()?>/government-relations" title="Learn more about government relations" class="button">Learn More</a>
					<img src="http://fpoimagery.com/?t=px&w=500&h=200&bg=0ff&fg=000000" alt="government relations image" />
					<h6>
						Capitol Hill Briefing
					</h6>
					<p>
						Coastal sustainability threats and best practices.
					</p>
				</li>
			</ul>
		</section>

		<section class="quicklinks">
			<ul>
				<li>
					<h3>Staff</h3>
					<p>Meet the creative people who keep External Affairs humming.</p>
					<a href="<?=home_url()?>/staff" title="Get To Know Us" class="button">Get To Know Us</a>
				</li>
				<li>
					<h3>Contact Us</h3>
					<p>Have a news story, communications challenge, or question? Email or call us.</p>
					<a href="<?=home_url()?>/contact" title="Get In Touch" class="button">Get In Touch</a>
				</li>
				<li>
					<h3>Resources</h3>
					<p>Consult these guidelines on messaging, graphic standards, press relations, and more.</p>
					<a href="//www.northeastern.edu/guidelines/index.html" title="Use These Tools - will open in a new window" target="_blank" class="button">Use These Tools</a>
				</li>
			</ul>
		</section>

		<section class="stories">
			<?php get_template_part('loops/loop-homepagestories'); ?>
		</section>

	</main>
<?php get_footer(); ?>
