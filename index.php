<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<?php
	$args = array('post_type' => 'post', 'posts_per_page' => 1);
	$blogs = new WP_Query($args);
	while($blogs->have_posts( )) {
	$blogs->the_post();			
?>
<section class="lg-hero" style="background: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); ?>');'">
	<div class="lg-hero__container scrollreveal">
		<h1 class="lg-hero__title"><?php the_title(); ?></h1>
		<a class="lg-button" href="<?php the_permalink();?>">Read Articles <img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/lg_right-arrow.svg" alt=""></a>
	</div>
</section>
<?php } wp_reset_query(); ?>
<section class="lg-section">
    <div class="lg-container">
		<div class="lg-blog-posts">
		<?php 
			$terms = get_terms( 'category' );
			echo '<ul class="lg-blog-posts__menu">';
			$check = (!is_category(get_the_category(get_the_ID())[0]->name)) ? 'lg-blog-posts__menu-item--active' : '';
			echo '<li class="lg-blog-posts__menu-item"><a href="' . site_url('/resources') . '" class="' . $check . '">All</a></li>';
			foreach ( $terms as $term ) :
				$class = ( is_category( $term->name ) ) ? 'lg-blog-posts__menu-item--active' : ''; // assign this class if we're on the same category page as $term->name
				echo '<li class="lg-blog-posts__menu-item"><a href="' . get_term_link( $term ) . '" class="' . $class . '">' . $term->name . '</a></li>';
			endforeach;
			echo '</ul>';
		?>
			<div class="lg-blog-posts__content">
			<?php 
				if (have_posts()) :
					while ( have_posts() ) : the_post(); 
						get_template_part('template-parts/blog-card');
					endwhile; 
				else :
					echo '<p>No content found</p>';
				endif;
			?>
			</div>
			<div class="lg-blog-posts__pagination">
			<?php echo paginate_links(); ?>
			</div>
		</div>
    </div>
</section>
<?php get_footer();
