<?php
/*
 * Template Name: Home
 */
get_header();
get_template_part( 'partials/block', 'product' );
get_template_part( 'partials/block', 'featured' );
get_template_part( 'partials/block', 'features' );
get_template_part( 'partials/block', 'products' );
get_template_part( 'partials/block', 'promo' );
get_template_part( 'partials/block', 'specification' );
get_template_part( 'partials/block', 'proof' );

get_footer();
