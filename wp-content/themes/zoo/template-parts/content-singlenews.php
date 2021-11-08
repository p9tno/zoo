<?php 
global $zoo_options;

if ($zoo_options['other_no_img']['url']) {
  $no_img_url = esc_url($zoo_options['other_no_img']['url']);
}

// if (get_post_meta(get_the_ID(), 'news_single', true)) {

//     $attachment_id = get_post_meta(get_the_ID(), 'news_single', true);
//     $attributes = wp_get_attachment_image_src( $attachment_id );
//     $img_url = $attributes[0];
// } elseif ($zoo_options['other_no_img']['url']) {
//     $img_url = $no_img_url;
// } else {
//     $img_url = wp_get_attachment_image_url(42, 'custom-banner-slider');
// }




if (has_post_thumbnail()) {
    $img_url = get_the_post_thumbnail_url(get_the_ID(), 'custom-news-single');
} elseif ($zoo_options['other_no_img']['url']) {
    $img_url = $no_img_url;
} else {
    $img_url = wp_get_attachment_image_url(42, 'custom-news-single');
};

?>

<div class="single__content">
    <div class="single__img" style="background-image: url('<?php echo $img_url ?>')"></div>
    <div class="single__title fadeInLeft wow"><?php the_title(); ?></div>
    <div class="pagecontent"><?php the_content(); ?></div>
</div>

