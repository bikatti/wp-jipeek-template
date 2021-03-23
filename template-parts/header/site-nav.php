<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Monmedios
 */
?>

<nav class="m-header__nav">
    <?php
        if ( has_nav_menu( 'header_menu' ) ) {
            wp_nav_menu([
            'theme_location'  => 'header_menu',
            'menu_class'      => 'm-header__menu',
            'container' => 'ul'
            ]);
        }
    ?>
    <span class="m-header__important" id="categoryModal">Categoría</span><!-- .m-header__link -->
    <span class="m-header__link -mZero" id="tagsModal">Etiquetas</span><!-- .m-header__link -->
    <span class="m-header__burger" id="burgerIcon">
        <?php get_template_part( 'template-parts/header/icon-burger' );?>
    </span><!-- .m-header__burger -->
    <!-- <a href="<?php echo esc_url( home_url( 'nosotros' ) ); ?>" class="m-header__important">Nosotros</a>.m-header__us -->
</nav><!-- .m-header__nav -->