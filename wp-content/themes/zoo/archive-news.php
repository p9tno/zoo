<?php get_header(); ?>

<section class="news" id="news">
	<div class="container_center">
		<?php if ($zoo_options['news_title']) {?>
			<h2 class="section__title bounceIn wow"><?php echo esc_html($zoo_options['news_title']); ?></h2>
		<?php } ?>
		<div class="news__grid">

			<?php
				// if (is_front_page()) {
				// 	$currentPage = (get_query_var('page')) ? get_query_var('page') : 1;
				// } else {
				// 	$currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1;
				// }
				$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;


				$args = array(
					'post_type' => 'news',
					// 'posts_per_page' => 10,
					'paged' => $paged,
					
				);
				

				$news = new WP_Query($args);
			?>
			
			<?php if ($news->have_posts()) : while ($news->have_posts()) : $news->the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'news' );?>



			<?php endwhile; ?>
			

			
			<?php else : ?>

			no post

			<?php endif; ?>

			<?php wp_reset_postdata(); ?>

		</div>

		<div class="pagination">
			
			<?php

			my_template_paginate($news);

			// echo paginate_links([
			// 	'base'      => str_replace(999999999, '%#%', get_pagenum_link(999999999)),
			// 	'format'    => '',
			// 	'current'   => max(1, $currentPage),
			// 	'total'     => $news->max_num_pages,
			// 	'type'      => 'list',
			// 	'prev_text' => '«',
        	// 	'next_text' => '»',
			// ]);

			?>
		</div>
	</div>
</section>


<?php get_footer(); ?>
