<?php
/**
 * Template name: Шаблон главной страницы
 */
?>

<?php global $zoo_options; ?>

<?php get_header(); ?>


<?php get_template_part( 'template-parts/content', 'baner' ); ?>

<?php get_template_part( 'template-parts/content', 'about' ); ?>

<?php get_template_part( 'template-parts/content', 'partners' ); ?>

<?php // get_template_part( 'template-parts/content', 'newshome' ); ?>

<?php get_template_part( 'template-parts/content', 'more' );?>

<?php get_template_part( 'template-parts/content', 'instagram' ); ?>


<?php get_footer();

// test commit
