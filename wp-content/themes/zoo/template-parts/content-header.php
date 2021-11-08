<?php
    global $zoo_options;

    // get_vd($zoo_options);
   

?>

<!-- begin header-->
<header class="header stiky">
    <div class="header__wrap">

        <div class="header__logo">
            <?php if($zoo_options['header_logo']['url']){
            $img_url = esc_url($zoo_options['header_logo']['url']) ?>
                <a class="desktop" href="<?php echo esc_url(home_url("/")); ?>"><img src="<?php echo $img_url; ?>" alt="минский зоопарк"/></a>
            <?php } ?>


            <?php unset($img_url); ?>
            <?php if($zoo_options['header_logo_mobil']['url']){
            $img_url = esc_url($zoo_options['header_logo_mobil']['url']) ?>
                <a class="mobile" href="<?php echo esc_url(home_url("/")); ?>"><img src="<?php echo $img_url; ?>" alt="минский зоопарк"/></a>
            <?php } ?>
        </div>

        <div class="header__nav">
            <nav class="navbar" id="navbar">
                <?php  wp_nav_menu(array(
                    'theme_location' => 'header_nav',
                    'menu_class' => 'navbar__list',
                    'container'=>'navbar',
                    'add_li_class' => 'navbar__item'
                    )); 
                ?>
            </nav>
        </div>

        <div class="navbar__toggle"></div>

        <div class="header__content">

            <ul class="info">
                <?php if ($zoo_options['header_working_time']) {?>
                    <li class="info__item">
                        <div class="info__icon"><i class="icon-time"></i></div>
                        <div class="info__content"><span><?php echo esc_html($zoo_options['header_working_time']); ?></span></div>
                    </li>
                <?php } ?>

                <?php if ($zoo_options['header_price_zoo'] || $zoo_options['header_price_dino']) {?>
                    <li class="info__item">
                        <div class="info__icon"><i class="icon-ticket"></i></div>
        
                        <div class="info__content">
                            <?php if ($zoo_options['header_price_zoo']) {?>
                                <span><?php echo esc_html($zoo_options['header_price_zoo']); ?></span>
                            <?php } ?>
                            <?php if ($zoo_options['header_price_dino']) {?>
                                <span class="mobile"><?php echo esc_html($zoo_options['header_price_dino']); ?></span>
                            <?php } ?>
                        </div>

                    </li>
                <?php } ?>
            </ul>

            <!-- <div class="button">
                <a class="btn btn_header" href="#">
                    <i class="button__icon icon-ticket"></i>
                    <span class="button__label">Купить билет</span>
                </a>
            </div> -->
        </div>
    </div>
</header>
<!-- end header-->
<!-- begin main-->
<main class="main">
    <div class="container_center">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('<i class="icon-to-the-right"></i>'); ?>
    </div>
