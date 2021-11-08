<?php
global $zoo_options;

if ($zoo_options['news_bg']['url']) {
  $news_bg_url = esc_url($zoo_options['news_bg']['url']);
}

if ($zoo_options['other_no_img']['url']) {
  $no_img_url = esc_url($zoo_options['other_no_img']['url']);
}

?>

<?php 
  if (has_post_thumbnail()) {
      $img_url = get_the_post_thumbnail_url(get_the_ID(), 'custom-news');
  } elseif ($zoo_options['other_no_img']['url']) {
      $img_url = $no_img_url;
  } else {
    wp_get_attachment_image_url(42, 'custom-news');
  }
?>

<div class="news__item">

  <div class="news__bg_wrap">
    <div class="news__bg" style="background-image: url('<?php echo $img_url ?>')"></div>
  </div>

  <div class="news__content" style="background-image: url('<?php echo $news_bg_url; ?>')">

    <h3 class="news__title"><a class="news__link" href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h3>

    <div class="news__text"> 
      <p><?php the_excerpt(); ?></p>
    </div>

    <div class="news__date">
      <span><?php the_date(); ?></span>
    </div>

  </div>

</div>
