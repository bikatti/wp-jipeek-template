<?php
/**
 * Query de los posts del bloque de últimas noticias
 *
 * @package WordPress
 * @subpackage Monmedios
 */

$args = array(
    'post_type' => ['post'],
    'posts_per_page' => 5,
    'order' => 'DESC',
    'orderby' => 'date'
);

$the_query = new WP_Query($args);
$iter = 0;
?>

<div class="-row">
    <?php
        if ($the_query->have_posts()) {
    ?>
    <div class="-col-7">
    <?php
            while ($the_query->have_posts()) {
                $the_query->the_post(  );
    ?>
                <?php if($iter == 0) {
                    $iter++;
                ?>
                    
                    <a href="<?php echo esc_url( the_permalink( ) ); ?>">
                        <article class="m-bigArticle">
                            <div class="-backHalf"></div><!-- .-backHalf -->
                            <header class="m-bigArticle__header">
                                <p class="m-bigArticle__cat"><?php echo esc_html( the_category_single() ); ?></p>
                                <h3><?php echo esc_html( the_title() ); ?></h3>
                                <p class="m-bigArticle__excerpt"> <?php echo esc_html( get_the_excerpt()); ?> </p>
                            </header><!-- .m-bigArticle__header -->
                            <?php the_post_thumbnail( 'large', ['class' => 'm-bigArticle__img'] ); ?><!-- .m-bigArticle__img -->
                        </article><!-- .m-bigArticle -->
                    </a>
    </div>

    <div class="-col-5">
        <div class="-row">
                <?php } else { ?>
                    <div class="-col-6 -col-md-6 -col-sm-6">
                        <a href="<?php echo esc_url( the_permalink( ) ); ?>">
                            <article class="m-smallArticle">
                                <div class="m-smallArticle__figure">
                                    <?php the_post_thumbnail( 'large', ['class' => 'm-smallArticle__img'] ); ?><!-- .m-smallArticle__img -->
                                </div><!-- .m-smallArticle__header -->
                                <p class="m-smallArticle__cat"><?php echo esc_html( the_category_single() ); ?></p>
                                <h3><?php echo esc_html( the_title() ); ?></h3>
                            </article><!-- .m-smallArticle -->
                        </a>
                    </div><!-- .-col-6.-col-md-6 -->
                <?php
                    } 
                }
            } 
        ?>
        </div>
    </div>
</div>