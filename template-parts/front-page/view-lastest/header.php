<?php
/**
 * Header del bloque de últimas noticias
 *
 * @package WordPress
 * @subpackage Monmedios
 */

$blog_info    = get_bloginfo( 'name' );
?>

<div class="-row">
    <div class="-col-12">
        <div class="m-lastArticle__header">
            <div class="-backHalf"></div>
            <h1 class="m-lastArticle__title">
                <?php 
                if ($args['view_title'] == true) {
                    echo $args['view_title'];
                } else {
                    echo esc_html( $blog_info );
                }    
                ?>
            </h1><!-- .m-lastArticle__title -->
            <!-- <a href="<?php echo esc_url( home_url( 'all-posts' ) ); ?>">Todos los posts</a> -->
        </div><!-- .m-lastArticle__header -->
    </div>
</div>