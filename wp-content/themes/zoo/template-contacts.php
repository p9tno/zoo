<?php
/**
 * Template name: Шаблон страницы контактов
 */
?>
<?php global $zoo_options;  ?>

<?php get_header(); ?>

 <!-- begin contacts-->
 <section class="contacts" id="post-<?php the_ID(); ?>" <?php post_class(); ?>">
    <div class="container_center">
        <h2 class="section__title bounceIn wow"><?php the_title(); ?></h2>

          <div class="contacts__content">          
            <div class="contacts__info">

              <?php if ($zoo_options['site_contacts_phone_editor']) {?>
                <ul class="contacts__list contacts__list_col"><i class="contacts__icon icon-call"></i>
                  <?php echo ($zoo_options['site_contacts_phone_editor']); ?>
                </ul>
              <?php } ?>

              <?php if ($zoo_options['site_contacts_mail_editor']) {?>
                <ul class="contacts__list"><i class="contacts__icon icon-message"></i>
                  <?php echo ($zoo_options['site_contacts_mail_editor']); ?>
                </ul>
              <?php } ?>

              <?php if ($zoo_options['site_contacts_time_textarea']) {?>
                 <ul class="contacts__list"><i class="contacts__icon icon-time"></i>
                   <li class="contacts__item">
                     <span class="contacts__label"><?php echo ($zoo_options['site_contacts_time_textarea']); ?></span>
                   </li>
                 </ul>
              <?php } ?>

              <?php if ($zoo_options['site_contacts_location_text']) {?>
                <ul class="contacts__list"><i class="contacts__icon icon-location"></i>
                  <li class="contacts__item">
                    <span class="contacts__label"><?php echo ($zoo_options['site_contacts_location_text']); ?></span>
                  </li>
                </ul>
              <?php } ?>

            </div>

            <div class="map">
              <div class="map__content">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A6cec414ba3615765a4722b6b5d4e5469277b0fdc678b7958292a640ca30bee2f&amp;amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
              </div>
            </div>

        </div>
    </div>
</section>
<!-- end contacts-->
<!-- begin form-->
<section class="form_section section" id="form" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/bg_contacts.png' ;?>')">
    <div class="container_center">
        <h3 class="section__title bounceIn wow">Электронные обращения граждан</h3>
        <?php // echo do_shortcode( '[contact-form-7 id="261" title="Электронные обращения граждан"]' ); ?>
        <?php echo do_shortcode( '[contact-form-7 id="381" title="Электронные обращения граждан"]' ); ?>
      </div>
    </div>
</section>
<!-- end form-->

<?php get_footer(); ?>