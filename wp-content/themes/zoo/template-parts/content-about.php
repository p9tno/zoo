<?php
global $zoo_options;
?>

<!-- begin about-->
<section class="about section" id="about">
    <div class="container_center">
        <div class="about__wrapper">
            <div class="about__content ">

                <?php if ($zoo_options['about_title']) {?>
                    <h2 class="about__title fadeInDown wow"><?php echo esc_html($zoo_options['about_title']); ?></h2>
                <?php } ?>
                
                <?php if ($zoo_options['about_desc']) {?>
                    <div class="about__text fadeInDown wow"><?php echo esc_html($zoo_options['about_desc']); ?></div>
                <?php } ?>
                
                <?php if ($zoo_options['about_button_link'] && $zoo_options['about_button']) {?>
                    <div class="about__button fadeInDown wow">
                        <a class="btn btn_transporent btn_transporent_green" href="<?php echo esc_html($zoo_options['about_button_link']); ?>"><?php echo esc_html($zoo_options['about_button']); ?></a>
                    </div>
                <?php } ?>
            </div>


            <?php if($zoo_options['about_img']['url']){
            $img_url = esc_url($zoo_options['about_img']['url']) ?>
                <div class="about__bg" style="background-image: url('<?php echo $img_url; ?>')"></div>
            <?php } ?>

        </div>
    </div>
</section>
<!-- end about-->

