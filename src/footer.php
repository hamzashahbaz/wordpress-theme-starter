<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>
<section class="footer">
	<div class="footer__container">
		<div class="footer__copy">
			<img class="footer__logo" src="<?php echo get_template_directory_uri(); ?>/dist/images/logos/logo.svg" alt="">
			<p class="footer__mission">Our mission is to deliver a suite of unmatched molecular diagnostic to provide preventive, predictive, personalized services.</p>
			<span class="footer__copyrights">2018 Lab Genomic LLC. All Rights Reserved</span>
		</div>
		<div class="footer__nav">
			<a class="footer__nav-item" href="<?php echo site_url('/infectious-disease')?>">RP <img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/lg_play.svg" alt=""></a>
			<a class="footer__nav-item" href="<?php echo site_url('/infectious-disease')?>">GI <img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/lg_play.svg" alt=""></a>
			<a class="footer__nav-item" href="<?php echo site_url('/infectious-disease')?>">UTI <img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/lg_play.svg" alt=""></a>
			<a class="footer__nav-item" href="<?php echo site_url('/pgs')?>">PGS <img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/lg_play.svg" alt=""></a>
			<a class="footer__nav-item" href="<?php echo site_url('/drug-metabolism')?>">Drug Metabolism <img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/lg_play.svg" alt=""></a>
			<a class="footer__nav-item" href="<?php echo site_url('/determine-10')?>">Determine 10 <img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/lg_play.svg" alt=""></a>
		</div>
		<div class="footer__contact">
			<h3 class="footer__contact_title">Contact Us</h3>
			<a class="footer__contact_item" href="tel://7144381009">Phone: (714) 438-1009</a>
			<p class="footer__contact_item">Fax: (714) 438-2484</p>
			<p class="footer__contact_item">11160 Warner Ave. Suite 415, Fountain Valley, CA 92708</p>
		</div>
	</div>
</section>
<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>
