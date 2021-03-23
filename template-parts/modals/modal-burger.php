<?php
/**
 * Modal donde están todas las categorías
 *
 * @package WordPress
 * @subpackage Monmedios
 */


$blog_info    = get_bloginfo( 'name' );
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>


<div class="-modal -fade" id="burgerMenu">
    <div class="m-modal">
        <div class="m-modal__content">
            <button class="m-modal__close" id="shutThree"><span>x</span></button>
        
            <div class="m-modal__body">
                <div class="m-modal__logo">
                    <img src="<?php esc_attr_e( $image[0] ); ?>" alt="logotipo de <?php esc_attr_e( get_bloginfo('name') ); ?>">
                </div>
                <div class="m-modal__burger">
                    <?php
                        if ( has_nav_menu( 'burger_menu' ) ) {
                            wp_nav_menu([
                            'theme_location'  => 'burger_menu',
                            'menu_class'      => 'm-burger__nav',
                            'container' => 'ul'
                            ]);
                        }
                    ?>
                </div>
            </div>
            
        </div>
    </div>
</div>