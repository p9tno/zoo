<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container_center">
		<h2 class="section__title bounceIn wow"><?php the_title(); ?></h2>
		<div class="pagecontent">
			<?php the_content(); ?>
		</div>
	</div>
</section>
