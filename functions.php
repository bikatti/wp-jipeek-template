<?php

/**
 * Presettings
*/
function init_template() {
    add_theme_support('post-thumbnails');
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'custom-logo' );
    add_theme_support('editor-styles');

    register_nav_menus( 
        array(
            'header_menu' => 'Menú Principal',
            'fp_menu' => 'Front-page & categorías Menú',
            'footer_column' => 'Footer',
        )
    );
}

add_action('after_setup_theme', 'init_template');

/**
 * Quitar los artículos sticky
 */
function noSticky( $query ) {
    if ( ! is_admin() && $query->is_main_query() ) {
        $query->set( 'ignore_sticky_posts', 1 );
    }
}

add_filter( 'pre_get_posts', 'noSticky' );

/**
 * Styles CSS, Fonts and others things
 */
function assets() {
    $ver = '1.3.9';
    wp_register_style( 'rubik', 'https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', '', $ver , 'all' );
    wp_register_style( 'Frank Ruhl Libre', 'https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300;400;500;700;900&display=swap', '', $ver, 'all' );

    wp_register_style( 'index', get_template_directory_uri( ).'/style.css', '', $ver, 'all' );

    wp_enqueue_style( 'style', get_stylesheet_uri(  ) , array( 'rubik', 'Frank Ruhl Libre', 'index'), $ver, 'all' );
    wp_enqueue_script( 'jscustom', get_template_directory_uri( ).'/assets/js/index.js', '', $ver, true );
}

add_action( 'wp_enqueue_scripts', 'assets' );

/**
 * Styles CSS y Logo en página de Login
 */
function login_logo() { 
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo $image[0]; ?>);
            height: 60px;
            width: 100px;
            background-size: 100%;
            background-repeat: no-repeat;
            /* padding-bottom: 10px; */
        }

        #login form, .login form {
            background: none;
            padding: 0;
            border: none;
            box-shadow: none;
        }

        #login {
            margin: 50px auto !important;
            border-radius: 4px;
            box-shadow: 0 3px 9px rgb(0 0 0 / 14%);
            padding: 20px !important;
            background: #fff;
        }

        .login #backtoblog, .login #nav {
            text-align: center;
        }

        .login {
            display: flex;
            justify-content: center;
            height: auto;
        }

        @media screen and (max-width: 550px) {
            #login {
                margin: 25px 20px !important;
            }
        }
    </style>
<?php }

add_action( 'login_enqueue_scripts', 'login_logo' );

function login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'login_logo_url' );

/**
 * Texto de copyright
 */
function text_copyright() {
    register_sidebar(
        array(
            'name' => 'Texto de copyright',
            'id' => 'text_copyright',
            'description' => 'Texto del copyright',
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget'  => '',
        )
    );
}

add_action('widgets_init', 'text_copyright');

/**
 * Páginación
 */
function pagination_anterior_siguiente() {
    global $the_query;
 
    if ( $the_query->max_num_pages > 1 ) { ?>
        <div class="m-category__item -pdTopLg">
            <div class="m-pagination">
                <?php posts_nav_link( ' ', 'Anterior', 'Siguiente' ); ?>
            </div>
        </div>
<?php }
 wp_reset_postdata();
}

function n_posts_link_attributes() {
    return 'class="a-btn a-pagination__btn -semiBold -uppercase -right"';
}

add_filter('next_posts_link_attributes', 'n_posts_link_attributes');

function p_posts_link_attributes() {
    return 'class="a-btn a-pagination__btn -semiBold -uppercase"';
}

add_filter('previous_posts_link_attributes', 'p_posts_link_attributes');


function the_category_single() {
	foreach((get_the_category()) as $category) {
        $closeCat = 0;
        if(!$category->parent && $closeCat == 0) { 
            echo $category->cat_name;
            $closeCat++;
        }
    }
}

/**
 * Metadatos popular
 */
function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function wpb_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;    
    }
    wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');

function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count == ''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}

// Change dashboard Posts to News
function change_post_type() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
    $name = 'Artículo';

    $labels->name               = _x( $name, 'post type general name', 'your-plugin-textdomain' );
    $labels->singular_name      = _x( $name, 'post type general name', 'your-plugin-textdomain' );
    $labels->menu_name          = _x( $name, 'admin menu', 'your-plugin-textdomain' );
    $labels->name_admin_bar     = _x( $name, 'add new on admin bar', 'your-plugin-textdomain' );
    $labels->add_new            = _x( 'Añadir nuevo', $name, 'your-plugin-textdomain' );
    $labels->add_new_item       = __( 'Añadir Nuev0 ' . $name, 'your-plugin-textdomain' );
    $labels->new_item           = __( 'Nuevo ' . $name, 'your-plugin-textdomain' );
    $labels->edit_item          = __( 'Editar ' . $name, 'your-plugin-textdomain' );
    $labels->view_item          = __( 'Ver ' . $name, 'your-plugin-textdomain' );
    $labels->all_items          = __( 'Todos los ' . $name, 'your-plugin-textdomain' );
    $labels->search_items       = __( 'Buscar ' . $name, 'your-plugin-textdomain' );
    $labels->not_found          = _n( 'No se encontro el ' . $name, 'No hemos encontrado ningún ' . $name, 'numero-objeto', 'texto-dominio' );
    $labels->not_found_in_trash = _n( 'No se encontro el ' . $name . ' en Papelera', 'No hemos encontrado ningún ' . $name . ' en Papelera', 'numero-objeto', 'texto-dominio' );
}
add_action( 'init', 'change_post_type' );