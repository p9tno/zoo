<?php
// https://developer.wordpress.org/reference/functions/paginate_links/
function my_template_paginate($query){
	$big = 999999999; // need an unlikely integer

	$paged = '';
	if (is_singular()) {
		$paged = get_query_var('page');
	} else {
		$paged = get_query_var('paged');
	}    
	         
	echo paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',

		'current' => max( 1, $paged),
		'total' => $query->max_num_pages,
		'type' 	=> 'list',
		'prev_text' => '<i class="icon-arrow_left"></i>',
		'next_text' => '<i class="icon-arrow_right"></i>',
		
	) );
}