<?php
global $zoo_options;

if ($zoo_options['other_no_img']['url']) {
  $no_img_url = esc_url($zoo_options['other_no_img']['url']);
}

?>

<!-- begin baner-->
<section class="baner section">
    <div class="container_center">
        <div class="swiper-container" id="baner">
            <div class="swiper-wrapper">

                <?php $baner_slider = new WP_Query(array('post_type' => 'banner', 'posts_per_page' => -1));  ?>

                <?php if ($baner_slider->have_posts()) : while ($baner_slider->have_posts()) : $baner_slider->the_post(); ?>

                    <?php 
                        if (has_post_thumbnail()) {
                            $img_url = get_the_post_thumbnail_url(get_the_ID(), 'custom-banner-slider');
                        } elseif ($zoo_options['other_no_img']['url']) {
                            $img_url = $no_img_url;
                        } else {
                            $img_url = wp_get_attachment_image_url(42, 'custom-banner-slider');
                        } 
                    ?>

                    <div class="swiper-slide">
                        <div class="baner__wrap">
                            <div class="baner__content" style="background-image: url('<?php echo $img_url ?>')">
                                <?php if(get_post_meta(get_the_ID(), 'banner_boolean', true)){?>
                                    <div class="baner__bg"></div>
                                <?php } ?>
                                <div class="baner__box">
                                <?php if(get_post_meta(get_the_ID(), 'banner_title', true)){?>
                                    <h2 class="baner__title"><?php echo get_post_meta(get_the_ID(), 'banner_title', true); ?></h2>
                                <?php } ?>
                                <?php if(get_post_meta(get_the_ID(), 'banner_text', true)){?>
                                    <div class="baner__text"><?php echo get_post_meta(get_the_ID(), 'banner_text', true); ?></div>
                                <?php } ?>
                                <?php if((get_post_meta(get_the_ID(), 'banner_text_button', true)) && (get_post_meta(get_the_ID(), 'banner_link_button', true))){?>
                                    <div class="baner__button">
                                        <a class="btn btn_transporent" href="<?php echo get_post_meta(get_the_ID(), 'banner_link_button', true); ?>"><?php echo get_post_meta(get_the_ID(), 'banner_text_button', true); ?></a>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>

                <?php else : ?>

                    no post

                <?php endif; ?>

                <?php wp_reset_postdata(); ?>

            </div>
            <div class="swiper-button-prev baner__arrow baner__arrow_prev"></div>
            <div class="swiper-button-next baner__arrow baner__arrow_next"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<!-- end baner-->

