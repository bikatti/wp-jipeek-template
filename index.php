<?php
/**
 * Index
 *
 * @package Hacktzi
 * @subpackage blog-styling
 */

get_header();

get_template_part( 'template-parts/category-list/category-list' );

$description = get_the_archive_description();
?>

<?php if ( have_posts() ) : ?>

    <?php if ( is_tax() || is_archive() ) : ?>
        <section class="m-archive__header">
            <div class="-container">
                <?php the_archive_title( '<h1>', '</h1>' ); ?>
            </div><!-- .-container -->
        </section><!-- .page-header -->
    <?php endif; ?>

    <section class="m-archive__articleBlock">
        <div class="-container">
            <div class="row">
                <?php while ( have_posts() ) : ?>
                    <?php the_post(); ?>
                    <?php get_template_part( 'template-parts/archive/content' ); ?>
                <?php endwhile; ?>
            </div>
            <div class="row"><div class="-col-12"><?php pagination_anterior_siguiente(); ?></div></div>
        </div>
    </section>

	<?php pagination_anterior_siguiente(); ?>

<?php endif; ?>

<?php get_template_part( 'template-parts/content/random-posts' ); ?>

<?php get_footer(); ?>