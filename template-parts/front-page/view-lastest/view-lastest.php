<?php
/**
 * Primer bloque sobre las últimas noticias
 *
 * @package WordPress
 * @subpackage Monmedios
 */
?>

<section class="m-lastArticle">
    <div class="-container">
        <?php get_template_part( 'template-parts/front-page/view-lastest/header', null, $args ); ?>
        <?php get_template_part( 'template-parts/front-page/view-lastest/posts' ); ?>
    </div>
</section>