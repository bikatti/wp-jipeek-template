<?php
/**
 * The header of the post
 *
 * @package WordPress
 * @subpackage Monmedios
 */

?>


<header class="-row">
    <div class="-col-12">
        <p class="m-single__cat"><?php echo esc_html( the_category_single() ); ?></p>
    </div>
    <div class="-col-12">
        <h1 class="m-single__title"><?php the_title( );?></h1>
    </div>
    <div class="-col-12">
        <h3 class="m-single__excerpt"><?php echo get_the_excerpt(  ); ?></h3>
    </div>
    <div class="-col-12 m-single__details">
        <div class="m-single__author">Por <?php the_author(); ?></div>
        <time class="m-single__date" datetime="<?php echo get_the_date( 'c' ); ?>"> <?php the_date( 'F d, Y', '', '' ); ?> </time>
    </div>
</header>