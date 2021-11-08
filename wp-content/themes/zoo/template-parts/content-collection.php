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
      $img_url = get_the_post_thumbnail_url(get_the_ID(), 'custom-medium');
  } elseif ($zoo_options['other_no_img']['url']) {
      $img_url = $no_img_url;
  } else {
    wp_get_attachment_image_url(42, 'custom-medium');
  }
?>




<div class="collection__item">

    <div class="collection__bg" style="background-image: url('<?php echo $img_url ?>')"></div>

    <a class="collection__content" href="<?php the_permalink() ;?>">
        <div class="collection__info">
            <p><?php the_excerpt(); ?></p>
        </div>
    </a>

    <div class="collection__title">
      <a href="<?php the_permalink() ;?>"><?php the_title(); ?></a>
    </div>
</div>