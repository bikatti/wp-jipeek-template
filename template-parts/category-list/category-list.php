<?php
/**
 * Primer bloque sobre las últimas noticias
 *
 * @package WordPress
 * @subpackage Monmedios
 */
?>

<section class="m-categoryList">
    <div class="-container">
        <div class="-row">
            <div class="-col-12">
                <ul>
                    <?php 
                        wp_list_categories( array(
                            'title_li' => ''
                        ) ); 
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>