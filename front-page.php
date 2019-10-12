<?php
/**
 * The front page template file
 *
 */

get_header(); ?>
<section class="lg-hero lg-hero--front">
	<div class="lg-hero__container scrollreveal">
        <h1 class="lg-hero__title">Personalized <br/> Medicine for <span>John</span></h1>
		<p class="lg-hero__description">Providing state of the art molecular genetic testing with the end goal in mind to give the best quality life possible for your patient.</p>
		<a class="lg-button" href="tel://7144381009">Give Us a Call <img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/lg_right-arrow.svg" alt=""></a>
	</div>
</section>
<section class="lg-section">
	<div class="lg-container">
		<div class="lg-subsection">
			<div class="scrollreveal">
				<h1 class="lg-title lg-title--small">FOR PROVIDERS</h1>
				<p class="lg-title lg-title--is-1">How can we help you?</p>
			</div>
			<div class="lg-personas">
				<div class="lg-personas__item scrollreveal">
					<img class="lg-personas__icon" src="<?php echo get_template_directory_uri(); ?>/dist/images/front-page/lg_pregnant.svg" alt="">
					<h3 class="lg-personas__title">Prenatal</h3>
					<p class="lg-personas__description">Increase the chances of a healthy, happy family.</p>
					<a class="lg-personas__link" href="<?php echo site_url('/determine-10')?>">DETERMINE 10 <img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/lg_play.svg" alt=""></a>
					<a class="lg-personas__link" href="<?php echo site_url('/pgs')?>">PGS <img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/lg_play.svg" alt=""></a>
				</div>
				<div class="lg-personas__item lg-personas__item--border scrollreveal">
					<img class="lg-personas__icon" src="<?php echo get_template_directory_uri(); ?>/dist/images/front-page/lg_molecule.svg" alt="">
					<h3 class="lg-personas__title">Pharmacogenetic</h3>
					<p class="lg-personas__description">Get the right drug medication to your patients for better results.</p>
					<a class="lg-personas__link" href="<?php echo site_url('/drug-metabolism')?>">DRUG METABOLISM <img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/lg_play.svg" alt=""></a>
				</div>
				<div class="lg-personas__item scrollreveal">
					<img class="lg-personas__icon" src="<?php echo get_template_directory_uri(); ?>/dist/images/front-page/lg_virus.svg" alt="">
					<h3 class="lg-personas__title">Diseases</h3>
					<p class="lg-personas__description">Fight infection diseases with targeted therapy.</p>
					<a class="lg-personas__link" href="<?php echo site_url('/infectious-disease')?>">UTI <img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/lg_play.svg" alt=""></a>
					<a class="lg-personas__link" href="<?php echo site_url('/infectious-disease')?>">GI <img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/lg_play.svg" alt=""></a>
					<a class="lg-personas__link" href="<?php echo site_url('/infectious-disease')?>">PR <img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/lg_play.svg" alt=""></a>
				</div>
			</div>
		</div>
		<div class="lg-subsection">
			<div class="lg-grid">
				<div class="lg-grid__item scrollreveal">
					<div class="lg-heading">
						<h4 class="lg-title lg-title--small lg-title--left">TECHNOLOGY</h4>
						<h2 class="lg-title lg-title--is-1 lg-title--left">Using <span>cutting-edge instruments</span> and techniques, we provide you with the best possible results.</h2>
					</div>
				</div>
				<div class="lg-grid__item scrollreveal">
					<img class="lg-image lg-image--technology" src="<?php echo get_template_directory_uri(); ?>/dist/images/front-page/lg_technology@2x.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<section class="lg__team">
	<div class="lg__team_container">
		<div class="lg__team_heart scrollreveal">
			<img class="lg__team_heart-img" src="<?php echo get_template_directory_uri(); ?>/dist/images/common/heart-check.svg" alt="">
			<h2 class="lg-title lg-title--is-1 lg-title--white">Covers cost of our testing!</h2>
			<p class="lg-subtitle lg-subtitle--desktop-centered lg-subtitle--condensed">At Lab Genomic, we’re working hard to make genetic information accessible to anyone who wants it. We’ve partnered with most major insurance companies to cover the cost of our tests. Chances are yours is one of them.</p>
			<a class="lg__team_heart-link" href="https://labgenomic.com/wp-content/uploads/2018/11/OurBillingProcess.pdf">See How <img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/lg_primary-right-arrow.svg" alt=""></a>
		</div>
		<div class="lg__team_items">
			<div class="lg__team_item scrollreveal">
				<h2 class="lg-title lg-title--is-1 lg-title--white lg-title--left">Expert and Qualified Team</h2>
				<p class="lg-subtitle lg-subtitle--desktop-left lg-subtitle--condensed-only">Highly qualified experts are available to answer any queries and support medical professionals.</p>
				<p class="lg-subtitle lg-subtitle--desktop-left lg-subtitle--condensed-only">Lab Genomics, LLC (LG) is focused on delivering individualized medical care through robust molecular and genetic diagnostics. Lab Genomics, LLC, was cultivated with the ideal in mind of providing state of the art molecular genetic testing with the end goal of the best quality of life possible for the patient.</p>
			</div>
			<div class="lg__team_members ">
				<div class="lg__team_member scrollreveal">
					<img class="lg__team_member-img" src="<?php echo get_template_directory_uri(); ?>/dist/images/front-page/team/leena_dalal@2x.jpg" alt="">
					<div class="lg__team_member-item">
						<p>Leena Dalal</p>
						<p>Founder</p>
					</div>
				</div>
				<div class="lg__team_member scrollreveal">
					<img class="lg__team_member-img" src="<?php echo get_template_directory_uri(); ?>/dist/images/front-page/team/julie_nguyen@2x.jpg" alt="">
					<div class="lg__team_member-item">
						<p>Julie Nguyen</p>
						<p>B.S. Lab Technician</p>
					</div>
				</div>
				<div class="lg__team_member scrollreveal">
					<img class="lg__team_member-img" src="<?php echo get_template_directory_uri(); ?>/dist/images/front-page/team/wenxue_xing@2x.jpg" alt="">
					<div class="lg__team_member-item">
						<p>Henry Tsai, MD PhD</p>
						<p>Medical Director</p>
					</div>
				</div>
				<div class="lg__team_member scrollreveal">
					<img class="lg__team_member-img" src="<?php echo get_template_directory_uri(); ?>/dist/images/front-page/team/kevin_tran@2x.jpg" alt="">
					<div class="lg__team_member-item">
						<p>Kevin Tran</p>
						<p>Clinical Laboratory Scientist</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class='lg-featured__featured-blogs'>
	<div class="lg-featured__featured-blogs_container">
		<div class='lg-featured__blog-post_cards'>
			<?php
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 2,
				);
				$blogs = new WP_Query($args);
				while($blogs->have_posts( )) {
					$blogs->the_post();
				
			?>
			<a href="<?php the_permalink();?>" class='lg-featured__blog-post_card scrollreveal'>
				<img class="lg-featured__blog-post_card-img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); ?>" alt="">
				<div class="lg-featured__blog-post_card-content">
					<div class="lg-featured__blog-post_card-header">
						<p class="lg-featured__blog-post_card-title"><?php the_title(); ?></p>
					</div>
					<div class="lg-featured__blog-post_card-footer">
						<div class="lg-featured__blog-post_card-category"><?php print get_the_category(get_the_ID())[0]->name; ?></div>
						<p class="lg-featured__blog-post_card-link">Read more<img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/lg_primary-right-arrow.svg" alt=""></p>
					</div>
				</div>
			</a>
			<?php }
				wp_reset_query(); 
			?>
		</div>
	</div>
</section>
<section class="lg-cta">
	<div class="lg-cta__container scrollreveal">
		<h4 class="lg-cta__title">Provide preventative, predictive, and personalized medical solutions to your patients.</h4>
		<a class="lg-cta__link" href="tel://7144381009">Give Us a Call <img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/lg_right-arrow.svg" alt=""></a>
	</div>
</section>
<?php get_footer();
