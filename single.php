<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<section class="lg__single-post">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="lg__single-post_img" style="background: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID(), 'full')); ?>');"></div>
		<div class="lg__single-post_container">
		<div class="lg__single-post_content">
				<h2 class="lg__single-post_title"><?php the_title(); ?></h2>
				<div class="lg__single-post_author">
					<?php if(get_post_type() == 'post') { ?>
					<div class="lg__single-post_author-container">
						<?php echo get_avatar( get_the_author_meta(), '60' );?>
						<p><?php the_author(); ?></p>
					</div>
					<h4 class="lg__single-post_date"><?php the_time( get_option( 'date_format' ) ); ?></h4>
					<?php } ?>
				</div>
				<div class="lg__single-post_content-data">
					<?php the_content(); ?>
				</div>
		</div>	
	<?php endwhile; ?>
		<div class="lg__single-post_mission ">
			<div class="lg__single-post_mission_container scrollreveal">
				<div class="lg__single-post_mission-item">
					<img class="lg__single-post_mission-item-img" src="<?php echo get_template_directory_uri(); ?>/dist/images/logos/logo.svg" alt="">
				</div>
				<div class="lg__single-post_mission-item">
					<h3 class="lg__single-post_mission-item-title">ABOUT LAB GENOMIC</h3>
					<p class="lg__single-post_mission-item-description">Our mission is to deliver a suite of unmatched molecular diagnostic to provide preventive, predictive, personalized services.</p>
				</div>
			</div>
		</div>
	<?php if (has_category(get_the_category(get_the_ID())[0]->name)) { ?>
	<section class='lg-featured__featured-blogs'>
		<div class="lg-featured__featured-blogs_container scrollreveal">
			<h2 class='lg__related-articles_title'>Related Articles</h2>
			<div class='lg-featured__blog-post_cards'>
				<?php
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 2,
						'category_name' => get_the_category(get_the_ID())[0]->name,
						'post__not_in' => array(get_the_ID())
					);
					$blogs = new WP_Query($args);
					while($blogs->have_posts( )) {
						$blogs->the_post();
					
				?>
				<a href="<?php the_permalink();?>" class='lg-featured__blog-post_card'>
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
	<?php } ?>
	</div>
</section>
<?php get_footer();
