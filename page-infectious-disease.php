<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>
<section class="lg-hero lg-hero--infectious-disease">
	<div class="lg-hero__container scrollreveal">
        <h1 class="lg-hero__title">Rapid Molecular Diagnostic Test</h1>
		<p class="lg-hero__description">Easy to read reports and improves diagnosis</p>
		<a class="lg-button" href="tel://7144381009">Call Us Today <img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/lg_right-arrow.svg" alt=""></a>
	</div>
</section>
<section class="lg-section">
	<div class="lg-container">
		<div class="lg-container__head scrollreveal">
            <h3 class="lg-title lg-title--small lg-title--mobile-left">RP</h3>
			<h1 class="lg-title lg-title--is-1 lg-title--mobile-left">Respiratory Panel</h1>
			<p class="lg-subtitle lg-subtitle--condensed lg-subtitle--centered">Adults average 2-5 upper respiratory tract infections each year while children average 7-10 upper respiratory tract infections a year.</p>
            <a class="lg-button" target="_blank" href="https://labgenomic.com/wp-content/uploads/2018/11/RPPanelPamphlet1.pdf">View Brochure <img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/lg_right-arrow.svg" alt=""></a>
        </div>
		<div class="lg-personas scrollreveal">
			<div class="lg-personas__item">
                <img class="lg-personas__icon" src="<?php echo get_template_directory_uri(); ?>/dist/images/infectious-disease/infectious-disease_icon1.svg" alt="">
				<h3 class="lg-personas__title">COMPREHENSIVE</h3>
				<p class="lg-personas__description">Simultaneously tests for 22 targets</p>
			</div>
			<div class="lg-personas__item lg-personas__item--border">
                <img class="lg-personas__icon" src="<?php echo get_template_directory_uri(); ?>/dist/images/infectious-disease/infectious-disease_icon2.svg" alt="">
				<h3 class="lg-personas__title">FAST</h3>
                <p class="lg-personas__description">2 minutes of hands on time</p>
                <p class="lg-personas__description">Run time of only 1 hour</p>
			</div>
			<div class="lg-personas__item">
                <img class="lg-personas__icon" src="<?php echo get_template_directory_uri(); ?>/dist/images/infectious-disease/infectious-disease_icon3.svg" alt="">
				<h3 class="lg-personas__title">ACCURATE</h3>
                <p class="lg-personas__description">98.4% overall sensitivity</p>
                <p class="lg-personas__description">99.3% overall specificity</p>
			</div>
        </div>
        <div class="lg-grid scrollreveal">
            <div class="lg-grid__item">
                <div class="lg-heading">
                    <h2 class="lg-title lg-title--left">Interpretation of Respiratory Panel Report</h2>
                    <p class="lg-subtitle lg-subtitle--left">Physician receive an easy to read "Detected" or "Not Detected" results for reach pathogen.</p>
                </div>
            </div>
            <div class="lg-grid__item">
                <div class="lg-results">
                    <div class="lg-results__item">
                        <div class="lg-results__box">
                            <p class="lg-results__label">Influenza A</p>
                            <p class="lg-results__status">DETECTED</p>
                        </div>
                        <img class="lg-results__icon" src="<?php echo get_template_directory_uri(); ?>/dist/images/infectious-disease/infectious-disease_icon-cancel.svg" alt="">
                    </div>
                    <div class="lg-results__item">
                        <div class="lg-results__box">
                            <p class="lg-results__label">Influenza B</p>
                            <p class="lg-results__status">NOT DETECTED</p>
                        </div>
                        <img class="lg-results__icon" src="<?php echo get_template_directory_uri(); ?>/dist/images/infectious-disease/infectious-disease_icon-check.svg" alt="">
                    </div>
                    <div class="lg-results__item">
                        <div class="lg-results__box">
                            <p class="lg-results__label">Adenovirus</p>
                            <p class="lg-results__status">NOT DETECTED</p>
                        </div>
                        <img class="lg-results__icon" src="<?php echo get_template_directory_uri(); ?>/dist/images/infectious-disease/infectious-disease_icon-check.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>
<section class="lg-section lg-section--primary">
	<div class="lg-container">
        <div class="lg-subsection scrollreveal">
            <div class="lg-grid">
                <div class="lg-grid__item">
                    <div class="lg-heading">
                        <h3 class="lg-title lg-title--is-1 lg-title--left lg-title--white">Benefits of Rapid Molecular Diagnostic Test:</h3>
                    </div>
                </div>
                <div class="lg-grid__item">
                    <div class="lg-points"> 
                        <div class="lg-points__item lg-points__item--vertical"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/checkmark.svg" alt=""> Improve patient management</div>
                        <div class="lg-points__item lg-points__item--vertical"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/checkmark.svg" alt=""> Prevent secondary spread of infection</div>
                        <div class="lg-points__item lg-points__item--vertical"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/checkmark.svg" alt=""> Prevent more timely and effective treatment</div>
                        <div class="lg-points__item lg-points__item--vertical"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/checkmark.svg" alt=""> Prevent the use of unnecessary antibiotics.</div>
                        <div class="lg-points__item lg-points__item--vertical"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/checkmark.svg" alt=""> May lead to shorter hospital stays.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg-subsection scrollreveal">
            <div>
                <h3 class="lg-title lg-title--is-1 lg-title--white">Overlapping Signs and Symptoms:</h3>
                <div class="lg-box">
                    <div class="lg-box__item">Coughing</div>
                    <div class="lg-box__item">Nasal Discharge</div>
                    <div class="lg-box__item">Congestion</div>
                    <div class="lg-box__item">Fever Wheezing</div>
                    <div class="lg-box__item">Headache</div>
                    <div class="lg-box__item">Myalgia</div>
                </div>
            </div>
        </div>  
	</div>
</section>
<section class="lg-section">
	<div class="lg-container">
		<div class="lg-container__head scrollreveal">
            <h3 class="lg-title lg-title--small">GI</h3>
			<h1 class="lg-title lg-title--is-1 lg-title--no-description">Gastrointestinal Panel</h1>
			<a class="lg-button" target="_blank" href="https://labgenomic.com/wp-content/uploads/2018/11/GIPanelPamphlet.pdf">View Brochure <img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/lg_right-arrow.svg" alt=""></a>
        </div>
		<div class="lg-personas scrollreveal">
			<div class="lg-personas__item">
                <img class="lg-personas__icon" src="<?php echo get_template_directory_uri(); ?>/dist/images/infectious-disease/infectious-disease_icon1.svg" alt="">
				<h3 class="lg-personas__title">COMPREHENSIVE</h3>
                <p class="lg-personas__description">Multiplex PCR</p>
                <p class="lg-personas__description">Simultaneously tests for 20 respiratory pathogens</p>
			</div>
			<div class="lg-personas__item lg-personas__item--border">
				<img class="lg-personas__icon" src="<?php echo get_template_directory_uri(); ?>/dist/images/infectious-disease/infectious-disease_icon2.svg" alt="">
				<h3 class="lg-personas__title">FAST</h3>
                <p class="lg-personas__description">2 minutes of hands on time</p>
                <p class="lg-personas__description">Run time of only 1 hour</p>
			</div>
			<div class="lg-personas__item">
				<img class="lg-personas__icon" src="<?php echo get_template_directory_uri(); ?>/dist/images/infectious-disease/infectious-disease_icon3.svg" alt="">
				<h3 class="lg-personas__title">ACCURATE</h3>
                <p class="lg-personas__description">95% overall sensitivity</p>
                <p class="lg-personas__description">99% overall specificity</p>
			</div>
        </div>
        <div class="lg-grid scrollreveal">
            <div class="lg-grid__item">
                <div class="lg-heading">
                    <h2 class="lg-title lg-title--is-1 lg-title--left">Interpretation of GI Panel Report</h2>
                    <p class="lg-subtitle">Physician receive an easy to read "Detected" or "Not Detected" results for reach pathogen.</p>
                </div>
            </div>
            <div class="lg-grid__item">
                <div class="lg-results">
                    <div class="lg-results__item">
                        <div class="lg-results__box">
                            <p class="lg-results__label">Glardia Lambia</p>
                            <p class="lg-results__status">NOT DETECTED</p>
                        </div>
                        <img class="lg-results__icon" src="<?php echo get_template_directory_uri(); ?>/dist/images/infectious-disease/infectious-disease_icon-check.svg" alt="">
                    </div>
                    <div class="lg-results__item">
                        <div class="lg-results__box">
                            <p class="lg-results__label">Cryotosporidium</p>
                            <p class="lg-results__status">DETECTED</p>
                        </div>
                        <img class="lg-results__icon" src="<?php echo get_template_directory_uri(); ?>/dist/images/infectious-disease/infectious-disease_icon-cancel.svg" alt="">
                    </div>
                    <div class="lg-results__item">
                        <div class="lg-results__box">
                            <p class="lg-results__label">Vibrio</p>
                            <p class="lg-results__status">NOT DETECTED</p>
                        </div>
                        <img class="lg-results__icon" src="<?php echo get_template_directory_uri(); ?>/dist/images/infectious-disease/infectious-disease_icon-check.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>
<section class="lg-section lg-section--large lg-section--primary">
	<div class="lg-container">
        <div class="lg-subsection scrollreveal">
            <div class="lg-grid">
                <div class="lg-grid__item">
                    <div class="lg-heading">
                        <h3 class="lg-title lg-title--left lg-title--white">Benefits of Rapid Molecular Diagnostic Test:</h3>
                    </div>
                </div>
                <div class="lg-grid__item">
                    <div class="lg-points">
                        <div class="lg-points__item lg-points__item--vertical"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/checkmark.svg" alt=""> Can inform appropriate patient management</div>
                        <div class="lg-points__item lg-points__item--vertical"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/checkmark.svg" alt=""> Can ensure appropriate treatment</div>
                        <div class="lg-points__item lg-points__item--vertical"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/checkmark.svg" alt=""> May improve isolation and cohorting decisions to prevent secondary transmission</div>
                        <div class="lg-points__item lg-points__item--vertical"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/checkmark.svg" alt=""> Can guide appropriate patient follow up</div>
                        <div class="lg-points__item lg-points__item--vertical"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/checkmark.svg" alt=""> May improve treatment outcomes</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg-subsection scrollreveal">
            <div>
                <h3 class="lg-title lg-title--is-1 lg-title--white">Overlapping Signs and Symptoms:</h3>
                <div class="lg-box">
                    <div class="lg-box__item">Watery Diarrhea</div>
                    <div class="lg-box__item">Stomach pain</div>
                    <div class="lg-box__item">Cramping</div>
                    <div class="lg-box__item">Fever</div>
                    <div class="lg-box__item">Nausea</div>
                    <div class="lg-box__item">Headache</div>
                </div>
            </div>
        </div>
	</div>
</section>
<section class="lg-section">
	<div class="lg-container">
		<div class="lg-container__head scrollreveal">
            <h4 class="lg-title lg-title--small">UPX</h4>
            <h1 class="lg-title lg-title--is-1">Urinary Pathogen Test</h1>
            <p class="lg-subtitle lg-subtitle--condensed lg-subtitle--centered">This assay detects presence of microbial DNA from pathogens that can cause UTI’s, and it provides antibiotic guidance.</p>
			<a class="lg-button" target="_blank" href="https://labgenomic.com/wp-content/uploads/2018/12/UTI-Brochure-FINAL.pdf">View Brochure <img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/lg_right-arrow.svg" alt=""></a>
        </div>
		<div class="lg-personas scrollreveal">
			<div class="lg-personas__item">
				<img class="lg-personas__icon" src="<?php echo get_template_directory_uri(); ?>/dist/images/infectious-disease/infectious-disease_icon1.svg" alt="">
				<h3 class="lg-personas__title">COMPREHENSIVE</h3>
                <p class="lg-personas__description">Multiplex PCR</p>
                <p class="lg-personas__description">Simultaneously tests for pathogens and recommends antibiotic</p>
			</div>
			<div class="lg-personas__item lg-personas__item--border">
				<img class="lg-personas__icon" src="<?php echo get_template_directory_uri(); ?>/dist/images/infectious-disease/infectious-disease_icon2.svg" alt="">
				<h3 class="lg-personas__title">FAST</h3>
                <p class="lg-personas__description">48-72 Hours for Final Report after laboratory receives samples</p>
			</div>
			<div class="lg-personas__item">
				<img class="lg-personas__icon" src="<?php echo get_template_directory_uri(); ?>/dist/images/infectious-disease/infectious-disease_icon3.svg" alt="">
				<h3 class="lg-personas__title">ACCURATE</h3>
                <p class="lg-personas__description">97% overall sensitivity</p>
                <p class="lg-personas__description">99% overall specificity</p>
			</div>
        </div>
        <div class="lg-grid scrollreveal">
            <div class="lg-grid__item">
                <div class="lg-heading">
                    <h2 class="lg-title lg-title--is-1 lg-title--left">Uropathogen Microbial DNA with Antibiotic Resistance</h2>
                    <p class="lg-subtitle">Physician receive an easy to read "Detected" or "Not Detected" results for reach pathogen.</p>
                </div>
            </div>
            <div class="lg-grid__item">
                <img class="lg-image lg-image--report" src="<?php echo get_template_directory_uri(); ?>/dist/images/infectious-disease/report@2x.jpg" alt="">
            </div>
        </div>
	</div>
</section>
<section class="lg-section lg-section--large lg-section--primary">
	<div class="lg-container">
        <div class="lg-subsection scrollreveal">
            <div>
                <h3 class="lg-title lg-title--is-1 lg-title--white lg-title--left">Benefits of PCR Technology Offers</h3>
            </div>
            <div >
                <div class="lg-points lg-points--horizontal">
                    <div class="lg-points__item lg-points__item--horizontal"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/checkmark.svg" alt=""> Precise</div>
                    <div class="lg-points__item lg-points__item--horizontal"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/checkmark.svg" alt=""> Reduce Time to results</div>
                    <div class="lg-points__item lg-points__item--horizontal"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/checkmark.svg" alt=""> Accuracy</div>
                </div>      
            </div>
        </div>
        <div class="lg-subsection scrollreveal">
            <h3 class="lg-title lg-title--is-1 lg-title--white">Overlapping Signs and Symptoms:</h3>
            <div class="lg-box">
                <div class="lg-box__item">Experiencing recurrent UTI</div>
                <div class="lg-box__item">Intestinal cystitis</div>
                <div class="lg-box__item">Pyelonephritis</div>
                <div class="lg-box__item">Men with UTI</div>
                <div class="lg-box__item">Men with Prostate Infection</div>
                <div class="lg-box__item">Pregnant women</div>
                <div class="lg-box__item">55 or older</div>
                <div class="lg-box__item">Past urinary culture</div>
                <div class="lg-box__item">Diabetic</div>
            </div>
        </div>
	</div>
</section>
<section class="lg-cta">
	<div class="lg-cta__container scrollreveal">
		<h4 class="lg-cta__title">Provide antibiotic stewardship for your patients.</h4>
		<a href="tel://7144381009" class="lg-cta__link">Call Us Today <img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/lg_right-arrow.svg" alt=""></a>
	</div>
</section>
<?php get_footer();
