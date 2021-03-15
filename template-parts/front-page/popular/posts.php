<?php
/**
 * Query de los posts del bloque de últimas noticias
 *
 * @package WordPress
 * @subpackage Monmedios
 */

$args = array(
    'post_type' => ['post'],
    'posts_per_page' => 3,
    'meta_key' => 'wpb_post_views_count',
    'orderby'=>'meta_value_num', 
    'order' => 'DESC',
);

$the_query = new WP_Query($args);
$iter = 0;
?>


<div class="-row">
    <?php
        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post(  );
            ?>
                <div class="-col-4 -col-md-6">
                    <a href="<?php echo esc_url( the_permalink( ) ); ?>">
                        <article class="m-popularItem">
                            <p class="m-popularItem__cat"><?php echo esc_html( the_category_single() ); ?></p>
                            <h3><?php echo esc_html( the_title() ); ?></h3>

                            <?php the_post_thumbnail( 'large', ['class' => 'm-popularItem__img'] ); ?><!-- .m-popularItem__img -->
                        </article><!-- .m-popularItem -->
                    </a>
                </div><!-- .-col-4.-col-md-6 -->
            <?php
            }
        } 
    ?>
    </div>
</div>