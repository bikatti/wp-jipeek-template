<?php
/**
 * Modal donde están todas las etiquetas
 *
 * @package WordPress
 * @subpackage Monmedios
 */

$tags = get_tags();
?>

<div class="-modal -fade" id="tagsModalShow">
    <div class="m-modal">
        <div class="m-modal__content">
            <button class="m-modal__close" id="shutOne"><span>x</span></button>
        
            <div class="m-modal__body">
                <h4>Etiquetas</h4>
                <div class="m-modal__tax">
                    <?php
                    foreach ( $tags as $tag ) {
                        $tag_link = get_tag_link( $tag->term_id );
                                
                        echo "<a href='{$tag_link}' title='{$tag->name} Tag' class='-toggleItem'>{$tag->name}</a>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>