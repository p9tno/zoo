<?php
global $zoo_options;

if ($zoo_options['other_no_img']['url']) {
  $no_img_url = esc_url($zoo_options['other_no_img']['url']);
}

if (has_post_thumbnail()) {
    $img_url = get_the_post_thumbnail_url(get_the_ID(), 'custom-animal');
} elseif ($zoo_options['other_no_img']['url']) {
    $img_url = $no_img_url;
} else {
    $img_url = wp_get_attachment_image_url(42, 'custom-animal');
};
?>

<div class="animal__wrap">
    <div class="animal__bg" style="background-image: url('<?php echo $img_url ?>')"></div>
    <div class="animal__content" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/animal.png' ?>')">
        <h2 class="animal__title fadeInRight wow"><?php the_title(); ?></h2>

        <?php if(get_post_meta(get_the_ID(), 'animal_title_en', true)){?>
            <h3 class="animal__subtitle fadeInRight wow">
                <span>en:</span>
                <?php echo get_post_meta(get_the_ID(), 'animal_title_en', true); ?>
            </h3>
        <?php } ?>

        <?php if(get_post_meta(get_the_ID(), 'animal_title_lat', true)){?>
            <h3 class="animal__subtitle fadeInRight wow">
                <span>lat:</span>
                <?php echo get_post_meta(get_the_ID(), 'animal_title_lat', true); ?>
            </h3>
        <?php } ?>
        
        <ul class="animal__list fadeInUp wow">

            <?php if(get_post_meta(get_the_ID(), 'animal_class', true)){?>
                <li class="animal__item">
                    <span class="animal__label">Класс:</span>
                    <span class="animal__name animal__class">
                        <?php echo get_post_meta(get_the_ID(), 'animal_class', true); ?>
                    </span>
                </li>
            <?php } ?>

            <?php if(get_post_meta(get_the_ID(), 'animal_squad', true)){?>
                <li class="animal__item">
                    <span class="animal__label">Отряд:</span>
                    <span class="animal__name animal__class">
                        <?php echo get_post_meta(get_the_ID(), 'animal_squad', true); ?>
                    </span>
                </li>
            <?php } ?>

            <?php if(get_post_meta(get_the_ID(), 'animal_family', true)){?>
                <li class="animal__item">
                    <span class="animal__label">Семейство:</span>
                    <span class="animal__name animal__class">
                        <?php echo get_post_meta(get_the_ID(), 'animal_family', true); ?>
                    </span>
                </li>
            <?php } ?>

            <?php if(get_post_meta(get_the_ID(), 'animal_genus', true)){?>
                <li class="animal__item">
                    <span class="animal__label">Род:</span>
                    <span class="animal__name animal__class">
                        <?php echo get_post_meta(get_the_ID(), 'animal_genus', true); ?>
                    </span>
                </li>
            <?php } ?>

            <?php if(get_post_meta(get_the_ID(), 'animal_kind', true)){?>
                <li class="animal__item">
                    <span class="animal__label">Вид:</span>
                    <span class="animal__name animal__class">
                        <?php echo get_post_meta(get_the_ID(), 'animal_kind', true); ?>
                    </span>
                </li>
            <?php } ?>
            
        </ul>
    </div>
</div>

<div class="pagecontent">
    <?php the_content(); ?>
</div>