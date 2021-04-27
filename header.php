<?php
/**
 * The header.
 *
 * @package WordPress
 * @subpackage Monmedios
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> id="header">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- 
        ◾ Hecho por Monlogo
        💚 Desarrollado por Bikatti (Programación)
        ✨ Puedes ver más de mí en https://bikatti.com
        🙌 También puedes ir a https://github.com/bikatti
        -->
        
        <?php wp_head(  ); ?>
    </head>
    <body class="theBody" id="theBody">

        <?php get_template_part( 'template-parts/header/site-header' ); ?>
    
        <div id="content">
            <main class="o-content">