<?php
/**
 * Modal donde están todas las categorías
 *
 * @package WordPress
 * @subpackage Monmedios
 */
?>


<div class="-modal -fade" id="categoryModalShow">
    <div class="m-modal">
        <div class="m-modal__content">
            <button class="m-modal__close" id="shutTwo"><span>x</span></button>
        
            <div class="m-modal__body">
                <h4>Categorías</h4>
                <div class="m-modal__category">
                    <ul>
                        <li><a href="<?php echo esc_url( home_url( 'all-posts' ) ); ?>">Todos</a></li>
                        <?php 
                            wp_list_categories( array(
                                'title_li' => ''
                            ) ); 
                        ?>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</div>