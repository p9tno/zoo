<?php
global $zoo_options; 

if ($zoo_options['other_no_img']['url']) {
    $no_img_url = esc_url($zoo_options['other_no_img']['url']);
}

?>
<!-- begin instagram-->
<section class="instagram section">
    <div class="container_center">

        <?php if ($zoo_options['instagram_title']) {?>
            <h2 class="section__title bounceIn wow">
                <a target="_black" href="<?php echo esc_html($zoo_options['instagram']); ?>"><?php echo esc_html($zoo_options['instagram_title']); ?></a>
            </h2>
        <?php } ?>


        <div class="swiper-container" id="instagram">
            <div class="swiper-wrapper">

                <?php $instagram = new WP_Query(array(
                    'post_type' => 'instagram',
                    'posts_per_page' => 20,
                    ));  
                ?>
                
                <?php if ($instagram->have_posts()) : while ($instagram->have_posts()) : $instagram->the_post(); ?>

                    <?php 
                        if (has_post_thumbnail()) {
                            $img_url = get_the_post_thumbnail_url(get_the_ID(), 'custom-medium');
                        } elseif ($zoo_options['other_no_img']['url']) {
                            $img_url = $no_img_url;
                        } else {
                            $img_url = wp_get_attachment_image_url(42, 'custom-medium');
                        } 
                    ?>

                    <div class="swiper-slide">
                        <div class="instagram__bg" style="background-image: url('<?php echo $img_url ?>')"></div>
                    </div>


            
                <?php endwhile; ?>
                
                <?php else : ?>

                    no post

                <?php endif; ?>

                <?php wp_reset_postdata(); ?>

              
            </div>
            <div class="swiper-button-prev instagram__arrow instagram__arrow_prev"></div>
            <div class="swiper-button-next instagram__arrow instagram__arrow_next"></div>
        </div>
    </div>
</section>
<!-- end instagram-->