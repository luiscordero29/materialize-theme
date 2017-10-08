<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php wp_title(); ?></title>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/materialize/css/materialize.min.css"  media="screen,projection"/>
        <!--Import font-awesome.css-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/font-awesome/css/font-awesome.min.css">
        <!-- Custon Style -->
        <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <?php wp_head(); ?>
        <?php 
        # esto deberia ir en una funcion o plugin
        if (is_user_logged_in()): ?>
            <style type="text/css">
                .sticky {
                    margin-top: 30px;
                }
            </style>
        <?php endif;  ?>
    </head>
    <body id="home">
        <header>
            <nav>
                <div class="nav-wrapper">
                    <div class="container">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo" title="<?php bloginfo('description'); ?>" ><?php bloginfo('name'); ?></a>
                        <a href="#" data-activates="mobile-main" class="button-collapse"><i class="material-icons">menu</i></a>
                        <?php 
                            echo header_menu('main');
                            echo header_menu_mobile('main');
                        ?>
                    </div>
                </div>
            </nav>
        </header>