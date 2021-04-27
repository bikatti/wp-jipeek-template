<?php
/**
 * Registers options with the Theme Customizer
 *
 * @param      object    $wp_customize    The WordPress Theme Customizer
 * @package    mercurio
 */

function home_customize_texts_theme( $wp_customize ) {
    $wp_customize->add_panel( 'text_theme_options', 
    [
        'priority'         => 100,
        'title'            => __( 'Personalización de textos', 'nd_dosth' ),
        'description'      => __( 'Inputs para personalizar textos de la revista digital', 'nd_dosth' ),
    ]);
 
    $wp_customize->add_section( 'home_text_options', 
    [
        'title'         => __( 'Títulos de los bloques de portada', 'nd_dosth' ),
        'priority'      => 1,
        'panel'         => 'text_theme_options'
    ]);
 
    // --- Primary block ---
    $wp_customize->add_setting( 'h1_home_text',
    [
        'default'           => __( 'Título...', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ]);
    
    // --- Primary block ---
    $wp_customize->add_control( 'h1_home_text', 
    [
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'home_text_options',
        'label'       => 'Título de la página inicio',
        'description' => 'Aquí escribirás el título principal de página de inicio',
    ]);

    // --- Second block ---
    $wp_customize->add_setting( 'title_second_block_text',
    [
        'type'              => 'option',
        'default'           => __( 'Título...', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ]);

    // --- Second block ---
    $wp_customize->add_control( 'title_second_block_text', 
    [
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'home_text_options',
        'label'       => 'Título del segundo bloque',
        'description' => 'Este es el título del segundo bloque en la página de inicio',
    ]);

    // --- Third block ---
    $wp_customize->add_setting( 'title_third_block_text',
    [
        'type'              => 'option',
        'default'           => __( 'Título...', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ]);

    // --- Third block ---
    $wp_customize->add_control( 'title_third_block_text', 
    [
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'home_text_options',
        'label'       => 'Título del tercer bloque',
        'description' => 'Este es el título del tercer bloque en la página de inicio',
    ]);

    // --- fourth block ---
    $wp_customize->add_setting( 'title_fourth_block_text',
    [
        'type'              => 'option',
        'default'           => __( 'Título...', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ]);

    // --- fourth block ---
    $wp_customize->add_control( 'title_fourth_block_text', 
    [
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'home_text_options',
        'label'       => 'Título del cuarto bloque',
        'description' => 'Este es el título del cuarto bloque en la página de inicio',
    ]);
}
add_action('customize_register','home_customize_texts_theme');


function footer_customize_texts_theme( $wp_customize ) { 
    $wp_customize->add_section( 'footer_text_options', 
    [
        'title'         => __( 'Bloque de footer', 'nd_dosth' ),
        'priority'      => 5,
        'panel'         => 'text_theme_options'
    ]);

    // --- Texto de Footer ---
    $wp_customize->add_setting( 'footer_text',
    [
        'default'           => __( 'Texto...', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ]);

    // --- Texto de Footer ---
    $wp_customize->add_control( 'footer_text', 
    [
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'footer_text_options',
        'label'       => 'Texto al final de página',
        'description' => 'Escriba aquí lo que quiera dajar como engache al final de la página',
    ]);
}
add_action('customize_register','footer_customize_texts_theme');

function archive_customize_texts_theme( $wp_customize ) { 
    $wp_customize->add_section( 'archive_text_options', 
    [
        'title'         => __( 'Bloques de artículos recomendados', 'nd_dosth' ),
        'priority'      => 3,
        'panel'         => 'text_theme_options'
    ]);

    // --- 1era columna ---
    $wp_customize->add_setting( 'title_random_posts_text',
    [
        'default'           => __( 'Texto...', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh'
    ]);

    // --- 1era columna ---
    $wp_customize->add_control( 'title_random_posts_text', 
    [
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'archive_text_options',
        'label'       => 'Título de artículos recomendados',
        'description' => 'Este es el título de los cuatros artículos que son sugeridos al final de una página de categorías, etiquetas o un artículo.',
    ]);
}
add_action('customize_register','archive_customize_texts_theme');