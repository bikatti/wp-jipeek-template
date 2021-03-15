<?php
/**
 * Logo del sitio
 * @package WordPress
 * @subpackage Monmedios
 */


$blog_info    = get_bloginfo( 'name' );
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>


<div class="m-header__brand">
    <a href="<?php echo esc_url(home_url( )); ?>">
        <img src="<?php esc_attr_e( $image[0] ); ?>" class="m-header__logo" alt="logotipo de <?php esc_attr_e( get_bloginfo('name') ); ?>">
    </a>
    <!-- <a href="<?php echo esc_url(home_url( )); ?>">
        <span class="m-header__blog -medium">Blog</span>
    </a> -->
</div><!-- #branding -->