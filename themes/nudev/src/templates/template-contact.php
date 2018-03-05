<?php

	/* Template Name: Contact */

	get_header();

	$fields = get_fields(1448);

?>

	<main id="contact" role="main" aria-label="Content">

		<div id="nu__alert">
			<script src="//northe.edu/alert/current/nu__global-alert.js" async></script>
		</div>

		<section></section>

		<section class="intro" style="background: url(<?=$fields['header_image']['url']?>);background-size: cover;background-position: center center;">
			<h2>Contact Us</h2>
		</section>

		<section class="contact">
			<ul>
			 <li>
				 <h3>Contact Info</h3>
				 <p>External Affairs<br />
				 716 Columbus Ave, Suite 598<br />
				 Boston, MA 02120</p>
				 <p><a href="tel:6173735718" title="Click here to call"><span>&#xf095;</span>&nbsp;&nbsp;617.373.5718</a></p>
			 </li>
			 <li>
				 <h3>Media Inquiries</h3>
				 <p>If you are a member of the media and have questions, please call <a href="tel:6173735471" title="Click here to call">617.373.5471</a>.</p>
				 <p>If you need help after hours, please email <a href="mailto:media@northeastern.edu?subject=After Hours Help" title="Click here to send an email">media@northeastern.edu</a> and a member of the team will get back to you.</p>
			 </li>
		 </ul>
		</section>

		<section class="getintouch">
			<div>
				<h3>Get in touch with our teams</h3>
				<ul>
					<li>
						<h4>Marketing</h4>
						<p>Amber Melo<br />
						<a href="mailto:a.melo@northeastern.edu" title="Click here to send an email">a.melo@northeastern.edu</a><br />
						<a href="tel:6173735718" title="Click here to call">617.373.5718</a></p>
					</li>
					<li>
						<h4>Communications</h4>
						<p>Kayla Skerry<br />
						<a href="mailto:k.skerry@northeastern.edu" title="Click here to send an email">k.skerry@northeastern.edu</a><br />
						<a href="tel:6173737009" title="Click here to call">617.373.7009</a></p>
					</li>
					<li>
						<h4>Government Relations</h4>
						<p>Rachel Shaheen<br />
						<a href="mailto:r.shaheen@northeastern.edu" title="Click here to send an email">r.shaheen@northeastern.edu</a><br />
						<a href="tel:6173738528" title="Click here to call">617.373.8528</a></p>
					</li>
				</ul>
			</div>
		</section>

	</main>
<?php get_footer(); ?>
