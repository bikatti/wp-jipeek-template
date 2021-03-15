<?php
/**
 * Página principal del wordpress
 *
 * @package Hacktzi
 * @subpackage blog-styling
 */

get_header();

get_template_part( 'template-parts/category-list/category-list' );
get_template_part( 'template-parts/front-page/view-lastest/view-lastest' );
get_template_part( 'template-parts/front-page/popular/popular' );

get_footer();