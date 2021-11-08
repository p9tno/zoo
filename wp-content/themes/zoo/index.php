<?php get_header(); ?>


<?php get_template_part( 'template-parts/content', 'baner' ); ?>

<?php get_template_part( 'template-parts/content', 'about' ); ?>

<?php get_template_part( 'template-parts/content', 'partners' ); ?>


<!-- begin news-->
<section class="news section" id="news">
  <div class="container_center">
    <?php if ($zoo_options['news_title']) {?>
        <h2 class="section__title"><?php echo esc_html($zoo_options['news_title']); ?></h2>
    <?php } ?>
    <div class="news__grid">

      <?php $news = new WP_Query(array(
          'post_type' => 'news',
          'posts_per_page' => 4,
        ));  
      ?>
      
      <?php if ($news->have_posts()) : while ($news->have_posts()) : $news->the_post(); ?>

        <?php get_template_part( 'template-parts/content', 'news' ); ?>

      <?php endwhile; ?>
      
      <?php else : ?>

          no post

      <?php endif; ?>

      <?php wp_reset_postdata(); ?>

    </div>

    <div class="news__button">
      <a class="btn btn_more" href="<?php echo get_post_type_archive_link('news'); ?>">все новости</a>
    </div>


  </div>
</section>
<!-- end news-->

<?php get_template_part( 'template-parts/content', 'more' );?>

<?php get_template_part( 'template-parts/content', 'instagram' ); ?>


<?php get_footer();


