<?php
global $zoo_options; 
?>


</main>
<!-- end main-->

<!-- begin footer-->
<footer class="footer" id="footer">
    <div class="footer__wrap">
        <div class="footer__top">

            <?php if($zoo_options['footer_logo']['url']){
            $img_url = esc_url($zoo_options['footer_logo']['url']) ?>
                <div class="footer__logo">
                    <a class="footer__logo_link" href="<?php echo esc_url(home_url("/")); ?>">
                        <img src="<?php echo $img_url; ?>" alt="минский зоопарк"/>
                    </a>
                </div>
            <?php } ?>

            <?php if ($zoo_options['footer_col_1']) {?>
                <div class="footer__item">
                    <div class="footer__label"><?php echo esc_html($zoo_options['footer_col_1']); ?></div>
                    <?php  wp_nav_menu(array(
                        'theme_location' => 'footer_nav_col_1',
                        'menu_class' => 'list',
                        'container'=>'navbar',
                        'add_li_class' => 'list__item'
                        )); 
                    ?>
                </div>
            <?php } ?>

            <?php if ($zoo_options['footer_col_2']) {?>
                <div class="footer__item">
                    <div class="footer__label"><?php echo esc_html($zoo_options['footer_col_2']); ?></div>
                    <?php  wp_nav_menu(array(
                        'theme_location' => 'footer_nav_col_2',
                        'menu_class' => 'list',
                        'container'=>'navbar',
                        'add_li_class' => 'list__item'
                        )); 
                    ?>
                </div>
            <?php } ?>

            <?php if ($zoo_options['footer_contacts']) {?>
                <div class="footer__item">
                    <div class="footer__label"><?php echo esc_html($zoo_options['footer_contacts']); ?></div>
                    <ul class="list">

                        <?php if ($zoo_options['footer_phone']) {?>
                            <li class="list__item">
                                <a class="list__link" href="tel:<?php echo esc_html($zoo_options['footer_phone']); ?>">
                                    <i class="list__icon icon-call"></i>
                                    <span class="list__txt"><?php echo esc_html($zoo_options['footer_phone']); ?></span>
                                </a>
                            </li>
                        <?php } ?>

                        <?php if ($zoo_options['footer_address']) {?>
                            <li class="list__item">
                                <a class="list__link" target="_blank" href="https://yandex.by/maps/org/minskiy_zoopark/1084272096/?ll=27.635601%2C53.849960&z=18">
                                    <i class="list__icon icon-location"></i>
                                    <span class="list__txt"><?php echo esc_html($zoo_options['footer_address']); ?></span>
                                </a>
                            </li>
                        <?php } ?>

                        <?php if ($zoo_options['footer_email']) {?>
                            <li class="list__item">
                                <a class="list__link" href="mailto:<?php echo esc_html($zoo_options['footer_email']); ?>">
                                    <i class="list__icon icon-message"></i>
                                    <span class="list__txt"><?php echo esc_html($zoo_options['footer_email']); ?></span>
                                </a>
                            </li>
                        <?php } ?>

                    </ul>
                </div>
            <?php } ?>

            <div class="footer__item ">
                <div class="footer__label footer__label_eye">
                    <?php echo do_shortcode( '[FTVI]' ); ?>
                </div>
                <?php  wp_nav_menu(array(
                    'theme_location' => 'zoo-languages',
                    'menu_class' => 'list',
                    )); 
                ?>
            </div>
        </div>

        <div class="footer__bottom">
            <div class="social">
                <ul class="social__list">

                    <?php if($zoo_options['facebook']){?>
                        <li class="social__item">
                            <a class="social__link" href="<?php echo esc_url($zoo_options['facebook']); ?>" target="_blank">
                                <i class="social__icon icon-facebook"></i>
                            </a>
                        </li>
                    <?php } ?>

                    <?php if($zoo_options['instagram']){?>
                        <li class="social__item">
                            <a class="social__link" href="<?php echo esc_url($zoo_options['instagram']); ?>" target="_blank">
                                <i class="social__icon icon-instagram"></i>
                            </a>
                        </li>
                    <?php } ?>

                    <?php if($zoo_options['vk']){?>
                        <li class="social__item">
                            <a class="social__link" href="<?php echo esc_url($zoo_options['vk']); ?>" target="_blank">
                                <i class="social__icon icon-vk"></i>
                            </a>
                        </li>
                    <?php } ?>
                    
                </ul>
            </div>
            <div class="copyright"><span class="copyright__txt">© ГКПУ «Минский зоопарк», 2021</span></div>
        </div>
    </div>
</footer>
<!-- end footer-->
