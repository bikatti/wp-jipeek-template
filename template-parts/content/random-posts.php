<?php
/**
 * Random recomendaciones de posts
 *
 * @package WordPress
 * @subpackage Monmedios
 */

$argumentos = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'orderby' => 'rand'
);

$the_query = new WP_Query($argumentos);
$iter = 0;
?>


<?php echo '<section class="m-bottomArticle '. $args['className'] .'">'; ?>
    <div class="-container">
        <div class="-row">
            <?php
                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post(  );
                    ?>
                        <div class="-col-3 -col-md-6 -col-sm-6">
                            <a href="<?php echo esc_url( the_permalink( ) ); ?>">
                                <article class="m-smallArticle">
                                    <div class="m-smallArticle__figure">
                                        <?php the_post_thumbnail( 'large', ['class' => 'm-smallArticle__img'] ); ?><!-- .m-smallArticle__img -->
                                    </div><!-- .m-smallArticle__header -->
                                    <p class="m-smallArticle__cat"><?php echo esc_html( the_category_single() ); ?></p>
                                    <h3><?php echo esc_html( the_title() ); ?></h3>
                                    <p class="m-smallArticle__excerpt"><?php echo esc_html( get_the_excerpt(  ) ); ?></p>
                                </article><!-- .m-smallArticle -->
                            </a>
                        </div><!-- .-col-4.-col-md-6 -->
                    <?php
                    }
                } 
            ?>
            </div>
        </div>
    </div>
</section>