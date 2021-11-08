<?php 
global $zoo_options; 

if ($zoo_options['other_no_img']['url']) {
  $no_img_url = esc_url($zoo_options['other_no_img']['url']);
}

?>

<?php 
    if (has_post_thumbnail()) {
        $img_url = get_the_post_thumbnail_url(get_the_ID(), 'custom-medium');
    } elseif ($zoo_options['other_no_img']['url']) {
        $img_url = $no_img_url;
    } else {
      wp_get_attachment_image_url(42, 'custom-medium');
    }
?>

<!-- esc_url -->

<?php get_header(); ?>

 <!-- begin tutelage-->
 <section class="tutelage" id="post-<?php the_ID(); ?>">
    <div class="container_center">

        <?php if($zoo_options['tutelage__label']){?>
            <div class="section__label bounceIn wow"><?php echo esc_html($zoo_options['tutelage__label']); ?></div>
        <?php } ?>

        <?php if($zoo_options['tutelage__title']){?>
            <h2 class="section__title bounceIn wow"><?php echo esc_html($zoo_options['tutelage__title']); ?></h2>
        <?php } ?>

        <?php if($zoo_options['tutelage__desc']){?>
            <div class="section__desc bounceIn wow"><?php echo esc_html($zoo_options['tutelage__desc']); ?></div>
        <?php } ?>


        <div class="tutelage__grid">

            <?php
		
				$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

				$args = array(
					'post_type' => 'tutelage',
					'paged' => $paged,
				);
				
				$tutelage = new WP_Query($args);
			?>
			
			<?php if ($tutelage->have_posts()) : while ($tutelage->have_posts()) : $tutelage->the_post(); ?>

                <div class="tutelage__item">
                    <a class="tutelage__link" href="<?php if(get_post_meta(get_the_ID(), 'tutelage_link', true)) {echo get_post_meta(get_the_ID(), 'tutelage_link', true);} ?>" target="_blank">


                        <?php 
                            if (has_post_thumbnail()) {
                                $img_url = get_the_post_thumbnail_url(get_the_ID(), 'custom-medium');
                            } elseif ($zoo_options['other_no_img']['url']) {
                                $img_url = $no_img_url;
                            } else {
                            wp_get_attachment_image_url(42, 'custom-medium');
                            }
                        ?>

                        <div class="tutelage__bg" style="background-image: url('<?php echo $img_url ?>')">
                            <?php if($zoo_options['tutelage_logo']['url']){
                                $img_url = esc_url($zoo_options['tutelage_logo']['url']) ?>
                                <div class="tutelage__label"><img src="<?php echo $img_url; ?>" alt="Минский зоопарк"/></div>
                            <?php } ?>
                        </div>
                        
                        <div class="tutelage__content">

                            <div class="tutelage__title"><?php the_title(); ?></div>

                            <div class="tutelage__txt"><?php the_content(); ?></div>

                            <?php if(get_post_meta(get_the_ID(), 'tutelage_logo_company', true)){?>
                                <?php
                                    $attachment_id = get_post_meta(get_the_ID(), 'tutelage_logo_company', true);
                                    $attributes = wp_get_attachment_image_src( $attachment_id );
                                ?>
                                <div class="tutelage__logo"><img src="<?php echo $attributes[0] ?>"/></div>
                            <?php } ?>
                        </div>
                    </a>
                </div>

				<?php //get_template_part( 'template-parts/content', 'news' );?>



			<?php endwhile; ?>
			

			
			<?php else : ?>

			no post

			<?php endif; ?>

			<?php wp_reset_postdata(); ?>

		</div>

        <div class="pagination">
            <?php my_template_paginate($tutelage); ?>
        </div>

    </div>
</section>
<!-- end tutelage-->

<?php get_footer(); ?>