<a href="<?php the_permalink();?>" class='lg-resources__blog-post_card scrollreveal'>
				<img class="lg-resources__blog-post_card-img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); ?>" alt="">
				<div class="lg-resources__blog-post_card-content">
					<div class="lg-resources__blog-post_card-header">
						<p class="lg-resources__blog-post_card-title"><?php the_title(); ?></p>
					</div>
					<div class="lg-resources__blog-post_card-footer">
						<div class="lg-resources__blog-post_card-category"><?php print get_the_category(get_the_ID())[0]->name; ?></div>
						<p class="lg-resources__blog-post_card-link">Read more<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/lg_primary-right-arrow.svg" alt=""></p>
					</div>
				</div>
			</a>	