<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package zoo
 */

get_header();
?>

<section class="collection" id="collection">
	<div class="container_center">

		<?php if(is_tax()) {?>
            <!-- <h2 class="section__title"><?php// single_cat_title(); ?></h2> -->
            <!-- <div class="section__desc"><?php// the_archive_description(); ?></div> -->
        <?php }  ?>

        <?php
        $args = array(
        'taxonomy'     => 'collection', // название таксономии
        'orderby'      => 'name',  // сортируем по названиям
        'show_count'   => 0,       // не показываем количество записей
        'pad_counts'   => 0,       // не показываем количество записей у родителей
        'hierarchical' => 1,       // древовидное представление
        'title_li'     => ''       // список без заголовка
        );
        ?>
        <div class="collection__nav">
            <ul class="collection__list">
                <?php wp_list_categories( $args ); ?>
            </ul>
        </div>

		<div class="search-form__result">
			<?php
			/* translators: %s: search query. */
			printf( esc_html__( 'Результаты поиска для: %s', 'zoo' ), '<span>' . get_search_query() . '</span>' );
			?>
		</div>

		<?php get_search_form() ?>


		<div class="collection__grid">

			<?php if ( have_posts() ) : ?>

				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'collection' );
				endwhile;

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
		</div>

		<div class="pagination">
			<?php
                echo paginate_links(
                    array(
                        'type'      => 'list',
                        'prev_text' => '<i class="icon-arrow_left"></i>',
                        'next_text' => '<i class="icon-arrow_right"></i>',
                    )
                );
            ?>
		</div>


	</div>
</section>

<?php
get_footer();
