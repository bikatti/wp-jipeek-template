<?php
/**
 * Vista de página
 *
 * @package Hacktzi
 * @subpackage blog-styling
 */

get_header();
?>

<section class="m-page">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post(  );
            wpb_set_post_views(get_the_ID());

            ?> 
            <div class="-containerFluid">
                <div class="-row">
                    <div class="m-single__img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
                </div>
            </div>
            <div class="-container"><article><?php get_template_part( 'template-parts/content/content' ); ?></article></div>
            <?php 
        }
    } ?>
</section>


<?php
get_footer();