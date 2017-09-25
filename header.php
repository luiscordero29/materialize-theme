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
                        <?php /* ?>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li><a href="sass.html">Inicio</a></li>
                            <li><a href="sass.html">Acerca de</a></li>
                            <li><a href="badges.html">Servicios</a></li>
                            <li><a href="badges.html">Equipo</a></li>
                            <li><a href="badges.html">Servicios</a></li>
                            <li><a href="collapsible.html">Blog</a></li>
                            <li><a href="collapsible.html">Contacto</a></li>
                        </ul>
                        <ul class="side-nav" id="mobile-demo">
                            <li><a href="sass.html">Inicio</a></li>
                            <li><a href="badges.html">Servicios</a></li>
                            <li><a id="dropdown-servicios-mobile" class="dropdown-button" href="#!" data-activates="servicios">Servicios<i class="material-icons right">arrow_drop_down</i></a></li>
                            <li><a href="collapsible.html">Blog</a></li>
                            <li><a href="collapsible.html">Contacto</a></li>
                            <li><a id="dropdown-idiomas-mobile" class="dropdown-button" href="#!" data-activates="idiomas">Idiomas<i class="material-icons right">arrow_drop_down</i></a></li>
                        </ul>
                        */ ?>
                    </div>
                </div>
            </nav>
        </header>
        <section class="revolution-">
            
        </section>
        
            <?php /* ?>
            <header id="banner">
                <div class="container">
                    <div class="row">
                        <div class="col s12">
                            <div>
                                <h1>Programador Web Freelance</h1>
                                <h2>Artesano del código fuente para emprendimientos en desarrollo web, marketing online y aplicaciones en android. Trabajo desde Venezuela, ofreciendo mis servicios profesionales.</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            
        <header>
            <div class="parallax-container">
                <?php /* ?>
                <div class="parallax">
                    <img src="<?php echo base_url('assets/images/parallax.jpg'); ?>">
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="col s12 center">
                            <div id="banner">
                                <h1><?php bloginfo('name'); ?></h1>
                                <h2><?php bloginfo('description'); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <?php /* ?>
<header class="barra">
	<a href="#" class="btn-mobile" id="btn-mobile"><i class="fa fa-navicon"></i></a><!--BOTON DEL MENU MOBIL-->
	<div id="logo">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<h1>luiscordero29</h1>
		</a>
	</div>
	<nav>
		<?php
          unset($menu_list);
          $menu_name = 'main';
          if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) )
          {
              $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
              $menu_items = wp_get_nav_menu_items($menu->term_id);
              $menu_list = '<ul>';
              foreach ( (array) $menu_items as $key => $menu_item )
              {
                  $class = '';
                  foreach ($menu_item->classes  as $c) {
                    $class = $class.' '.$c;
                  }
                  $menu_list .= '<li><a href="' . $menu_item->url . '" target="' . $menu_item->target . '" class="' . $class . '">' . $menu_item->title . '</a></li>';
              }
              $menu_list .= '</ul>';
          }
          echo $menu_list;
      ?>
	</nav>
</header>

*/ ?>
