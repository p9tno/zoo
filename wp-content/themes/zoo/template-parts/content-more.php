<?php
global $zoo_options;

if ($zoo_options['more_bg']['url']) {
    $img_url = esc_url($zoo_options['more_bg']['url']);
} else {
    $img_url = wp_get_attachment_image_url(152, 'custom-medium');
}

?>

<!-- begin more-->
<section class="more section" id="more" style="background-image: url('<?php echo $img_url; ?>')">
    <div class="container_center">
        <div class="more__inner">
            
            <div class="more__info">
                <?php if ($zoo_options['more_label']) {?>
                    <div class="more__label bounceIn wow"><?php echo esc_html($zoo_options['more_label']); ?></div>
                <?php } ?>

                <?php if ($zoo_options['more_title']) {?>
                    <h2 class="more__title bounceIn wow"><?php echo esc_html($zoo_options['more_title']); ?></h2>
                <?php } ?>

                <?php if ($zoo_options['more_desc']) {?>
                    <div class="more__desc bounceIn wow"><?php echo esc_html($zoo_options['more_desc']); ?></div>
                <?php } ?>

                <?php if ($zoo_options['more_link']) {?>
                    <div class="more__button bounceIn wow">
                        <a class="btn btn_transporent" href="<?php echo esc_html($zoo_options['more_link']); ?>">Подробнее</a>
                    </div>
                <?php } ?>


            </div>

            <div class="more__grid">

                <?php $more = new WP_Query(array(
                    'post_type' => 'more',
                    'posts_per_page' => 4,
                    ));  
                ?>
      
                <?php if ($more->have_posts()) : while ($more->have_posts()) : $more->the_post(); ?>

                    <a class="more__item fadeInUp wow" href="<?php echo get_post_meta(get_the_ID(), 'more_link', true); ?>">

                        <?php if (has_post_thumbnail()) {  
                            $icon_url = get_the_post_thumbnail_url(get_the_ID(), 'custom-icon'); 
                        ?>
                            <div class="more__img">
                                <img src="<?php echo $icon_url; ?>"/>
                            </div>
                        <?php } ?>

                        <div class="more__content">
                            <div class="more__short_title"><?php the_title(); ?></div>
                            <div class="more__text">
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                    </a>

                <?php endwhile; ?>
                
                <?php else : ?>

                    no post

                <?php endif; ?>

                <?php wp_reset_postdata(); ?>

            </div>
        </div>
    </div>
</section>
<!-- end more-->