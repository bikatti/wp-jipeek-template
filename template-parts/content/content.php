<?php
/**
 * El contenido del post
 *
 * @package WordPress
 * @subpackage Monmedios
 */

?>


<div class="-row">
    <div class="-col-12">
        <?php
            if ( is_page( ) ) {
                ?>
                    <div class="m-page__card">
                        <h1 class="m-page__title"><?php the_title() ?> </h1>
                    </div>
                    <div class="m-single__content"><?php the_content( ); ?></div>
                <?php
            } else {
                ?>
                    <div class="m-single__content"><?php the_content( ); ?></div>
                <?php
            }
        ?>
    </div>
</div>