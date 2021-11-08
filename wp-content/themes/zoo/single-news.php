<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package zoo
 */

get_header();
?>
<!-- start single-->
<div class="container_center">
	
	
	
	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', 'singlenews' );

		the_post_navigation(
			array(
				'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Назад:', 'zoo' ) . '</span> <span class="nav-title">%title</span>',
				'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Далее:', 'zoo' ) . '</span> <span class="nav-title">%title</span>',
			)
		);



	endwhile; 
	?>
	

</div>


<?php
get_footer();
?>
<!-- end single-->
