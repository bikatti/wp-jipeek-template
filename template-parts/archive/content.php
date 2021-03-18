<?php
/**
 * Archive post
 *
 * @package WordPress
 * @subpackage Monmedios
 */
?>

<div class="-col-12 -alwaysFirst">
    <a href="<?php echo esc_url( the_permalink( ) ); ?>">
        <article class="m-biggerArticle">
            <div class="-backHalf"></div><!-- .-backHalf -->
            <?php the_post_thumbnail( 'large', ['class' => 'm-biggerArticle__img'] ); ?><!-- .m-biggerArticle__img -->

            <p class="m-biggerArticle__cat"><?php echo esc_html( the_category_single() ); ?></p>
            <h3><?php echo esc_html( the_title() ); ?></h3>
            <p class="m-biggerArticle__excerpt"> <?php echo esc_html( get_the_excerpt()); ?> </p>
        </article><!-- .m-biggerArticle -->
    </a>
</div>