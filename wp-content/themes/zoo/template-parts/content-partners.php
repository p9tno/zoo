<?php
global $zoo_options;
?>


<!-- begin partners-->
<section class="partners section" id="partners">
    <div class="container_center">
        <?php if ($zoo_options['partners_title']) {?>
            <h2 class="section__title bounceIn wow"><?php echo esc_html($zoo_options['partners_title']); ?></h2>
        <?php } ?>
        <div class="partners__content">

            <div class="partners__item fadeInLeft wow">
                <a class="partners__link" href="<?php echo esc_html($zoo_options['partners_item_link_1']); ?>" target="_blank">

                    <div class="partners__icon"><i class="icon-dolphin"></i></div>

                    <?php if ($zoo_options['partners_item_title_1']) {?>
                        <div class="partners__title"><?php echo esc_html($zoo_options['partners_item_title_1']); ?></div>
                    <?php } ?>

                    <?php if ($zoo_options['partners_item_text_1']) {?>
                        <div class="partners__text"><?php echo esc_html($zoo_options['partners_item_text_1']); ?></div>
                    <?php } ?>
                    
                </a>
            </div>

            <div class="partners__item fadeInUp wow">
                <a class="partners__link" href="<?php echo esc_html($zoo_options['partners_item_link_2']); ?>" target="_blank">

                    <div class="partners__icon"><i class="icon-footprint"></i></div>

                    <?php if ($zoo_options['partners_item_title_2']) {?>
                        <div class="partners__title"><?php echo esc_html($zoo_options['partners_item_title_2']); ?></div>
                    <?php } ?>

                    <?php if ($zoo_options['partners_item_text_2']) {?>
                        <div class="partners__text"><?php echo esc_html($zoo_options['partners_item_text_2']); ?></div>
                    <?php } ?>

                </a>
            </div>

            <div class="partners__item fadeInRight wow">
                <a class="partners__link" href="<?php echo esc_html($zoo_options['partners_item_link_3']); ?>" target="_blank">

                    <div class="partners__icon"><i class="icon-scroll"></i></div>

                    <?php if ($zoo_options['partners_item_title_3']) {?>
                        <div class="partners__title"><?php echo esc_html($zoo_options['partners_item_title_3']); ?></div>
                    <?php } ?>

                    <?php if ($zoo_options['partners_item_text_3']) {?>
                        <div class="partners__text"><?php echo esc_html($zoo_options['partners_item_text_3']); ?></div>
                    <?php } ?>

                </a>
            </div>

        </div>
    </div>
</section>
<!-- end partners-->