<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package lesok
 */

get_header();
?>
 <div class="container_center">
	<div id="notfound">
		<div class="notfound">
			<div>
				<div class="notfound-404"><i>!</i></div>
				<h1>ОШИБКА<br/>404</h1>
			</div>
			
			<p>Возможно эта страница устарела или никогда не существовала. Попробуйте найти нужную Вам информацию на: <a href="<?php echo esc_url(home_url("/")); ?>">главной странице</a></p>
		</div>
	</div>
</div>





<?php
get_footer();