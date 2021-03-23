<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package WordPress
 * @subpackage Monmedios
 */
?>
            </main>
        </div><!-- #content -->
        <?php get_template_part( 'template-parts/modals/modal-burger' );?>
        <?php get_template_part( 'template-parts/modals/modal-tags' );?>
        <?php get_template_part( 'template-parts/modals/modal-categories' );?>

        <?php get_template_part( 'template-parts/footer/site-footer' );?>
        <div class="-glassDark" id="glass"></div>

        <?php wp_footer(  ); ?>

    </body>
</html>