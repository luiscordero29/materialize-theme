<?php
    
    # thumbnails
    add_theme_support( 'post-thumbnails' );

    # menus
    function register_menus() {
      register_nav_menus(
        array(

            # HEADER
            'main'                  => __( 'HEADER: MAIN MENU' ),
            'follow-me'             => __( 'FOOTER: FOLLOW ME' ),

        )
      );
    }
    add_action( 'init', 'register_menus' );

    # funcion para construir el menu 
    if (!function_exists('header_menu')) {
        function header_menu($menu)
        {
            $menu_name = $menu;
            if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
                $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                $menu_items = wp_get_nav_menu_items($menu->term_id);
                $menu_list = '<ul id="nav-mobile" class="right hide-on-med-and-down">';
                foreach ( (array) $menu_items as $key => $menu_item ) {
                    if (get_the_ID() == $menu_item->object_id) {
                        $menu_list .= '<li class="active">';
                    }else{
                        $menu_list .= '<li>';
                    }
                    $menu_list .= '<a target="' . $menu_item->target . '" href="'. $menu_item->url .'" title="'. $menu_item->title .'">';
                    $menu_list .= $menu_item->title;
                    $menu_list .= '</a>';
                    $menu_list .= '</li>';
                }
                $menu_list .= '</ul>';
                return $menu_list;
            }else{
                return '';
            }
        }
    } 

    # funcion para construir el menu 
    if (!function_exists('header_menu_mobile')) {
        function header_menu_mobile($menu)
        {
            $menu_name = $menu;
            if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
                $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                $menu_items = wp_get_nav_menu_items($menu->term_id);
                $menu_list = '<ul class="side-nav" id="mobile-main">';
                foreach ( (array) $menu_items as $key => $menu_item ) {
                    if (get_the_ID() == $menu_item->object_id) {
                        $menu_list .= '<li class="active">';
                    }else{
                        $menu_list .= '<li>';
                    }
                    $menu_list .= '<a target="' . $menu_item->target . '" href="'. $menu_item->url .'" title="'. $menu_item->title .'">';
                    $menu_list .= $menu_item->title;
                    $menu_list .= '</a>';
                    $menu_list .= '</li>';
                }
                $menu_list .= '</ul>';
            }
            if (!empty($menu_list)) {
                return $menu_list;
            }else{
                return '';
            }
        }
    }

    # menu footer
    if (!function_exists('footer_menu')) {
        function footer_menu($menu)
        {
            $menu_name = $menu;
            if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
                $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                $menu_items = wp_get_nav_menu_items($menu->term_id);
                $menu_list = '';
                foreach ( (array) $menu_items as $key => $menu_item ) {
                    $class = '';
                    foreach ($menu_item->classes  as $c) {
                        $class = $class.' '.$c;
                    }
                    $menu_list .= '<a class="btn-floating btn-small btn-fb right follow-me" target="' . $menu_item->target . '" href="'. $menu_item->url .'" title="'. $menu_item->title .'">';
                    $menu_list .= '<i class="'.$class.'"></i>';
                    $menu_list .= '</a>';
                }
                return $menu_list;
            }else{
                return '';
            }
        }
    }

    # Listados de Widgets
    add_action( 'widgets_init', 'syi_widgets_init' );
    function syi_widgets_init() 
    {
        # sidebar
        register_sidebar(
            array(
                'name'          => 'sidebar',
                'id'            => 'sidebar',
                'before_widget' => '<div>',
                'after_widget'  => '</div>',
                'before_title'  => '<h3>',
                'after_title'   => '</h3>',
            )
        ); 

        # sidebar
        register_sidebar(
            array(
                'name'          => 'advertising',
                'id'            => 'advertising',
                'before_widget' => '<div class="advertising z-depth-2">',
                'after_widget'  => '</div>',
                'before_title'  => '',
                'after_title'   => '',
            )
        ); 
    } 



    /*
    
    Post Type: portfolio
    
    */

    add_action( 'init', 'portfolio' );

    function portfolio() {

        $labels = array(
            'menu_name'           => __( 'Portfolios', 'materialize-theme' ),
            'name'                => _x( 'Portfolios', 'Post Type General Name', 'materialize-theme' ),
            'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'materialize-theme' ),
            'all_items'           => __( 'All Portfolios', 'materialize-theme' ),
            'add_new'             => _x( 'Add New', 'materialize-theme' ),
            'add_new_item'        => __( 'Add New Portfolio', 'materialize-theme' ),
            'edit_item'           => __( 'Edit Portfolio', 'materialize-theme' ),
            'update_item'         => __( 'Update Portfolio', 'materialize-theme' ),
            'view_item'           => __( 'View Portfolio', 'materialize-theme' ),
            'search_items'        => __( 'Search Portfolio', 'materialize-theme' ),
            'not_found'           => __( 'Not Found', 'materialize-theme' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'materialize-theme' ),
            'parent_item_colon'   => __( 'Parent Portfolio', 'materialize-theme' ),
        );

        // Creamos un array para $args

        $args = array(
            'label'               => __( 'Portfolios', 'materialize-theme' ),
            'description'         => __( 'Portfolio news and reviews', 'materialize-theme' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'section' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            * */
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'rewrite'             => array('slug' => 'portfolio'),
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
        );

        register_post_type( 'portfolios', $args );

        $labels = array(
            'name'              => _x( 'Sections', 'taxonomy general name', 'materialize-theme' ),
            'singular_name'     => _x( 'Section', 'taxonomy singular name', 'materialize-theme' ),
            'search_items'      => __( 'Search Sections', 'materialize-theme' ),
            'all_items'         => __( 'All Sections', 'materialize-theme' ),
            'parent_item'       => __( 'Parent Section', 'materialize-theme' ),
            'parent_item_colon' => __( 'Parent Section:', 'materialize-theme' ),
            'edit_item'         => __( 'Edit Section', 'materialize-theme' ),
            'update_item'       => __( 'Update Section', 'materialize-theme' ),
            'add_new_item'      => __( 'Add New Section', 'materialize-theme' ),
            'new_item_name'     => __( 'New Section Name', 'materialize-theme' ),
            'menu_name'         => __( 'Section', 'materialize-theme' ),
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'section' ),
        );

        register_taxonomy( 'sections', array( 'portfolios' ), $args );
    }