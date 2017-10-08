<?php 
    get_header(); 
?>      
        
        <section>
            <div class="parallax-container">
                <div class="parallax">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/parallax.jpg" alt="<?php bloginfo('description'); ?>">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col s12 center">
                            <div class="banner">
                                <h1>Programador Web Freelance</h1>
                                <h2>
                                Usted desea estar en la web. Nosotros deseamos ayudarle. Artesanos del código fuente y del diseño web. Desde Venezuela, ofrecemos nuestros servicios profesionales. Somos la mejor opción para su idea o proyecto.
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="services">
            <div class="container">
                <div class="row">
                    <div class="col s12 center">
                        <h1>Servicios</h1>
                        <p class="description">Junto a mi equipo, manejamos tecnologías de desarrollo web que le brindan soluciones eficaces e innovadoras. Contamos con la experiencia y organización para atender sus necesidades. Trabajamos con pasión y responsabilidad para hacer de su proyecto una realidad a los mejores precios del mercado.</p><p><br /></p>
                    </div>
                    <div class="col l3 m6 s12 center item_service">
                        <i class="large material-icons">code</i>
                        <h2>Aplicaciones Web</h2>
                        <p>Mediante Codeigniter ó Laravel desarrollamos aplicaciones modernas y robustas, bajo los estándares de programación adecuados que le brinden soporte, seguridad y escalabilidad en sus sistemas de información. Gestionamos sus datos con motores de base de datos MySQL, PostgreSQL y MongoDB.</p>
                    </div>
                    <div class="col l3 m6 s12 center item_service">
                        <i class="large material-icons">web</i>
                        <h2>WordPress / Joomla</h2>
                        <p>Creamos temas desde los diseños PSD/AI. Desarrollo de paginas web en plantillas profesionales, maquetaciñn y programación PSD para WordPress y Joomla. Amplia experiencia en el manejo de componentes, plugins y extensiones.</p>
                    </div>
                    <div class="col l3 m6 s12 center item_service">
                        <i class="large material-icons">navigation</i>
                        <h2>SASS</h2>
                        <p>Maquetación con SASS apoyados en Bootstrap ó Materialize. Totalmente adaptables a dispositivos móviles.</p>
                    </div>
                    <div class="col l3 m6 s12 center item_service">
                        <i class="large material-icons">android</i>
                        <h2>Android</h2>
                        <p>Desarrollo de aplicaciones en Android. Usamos metodologías agiles de desarrollo para brindarle soluciones atractivas orientadas totalmente a dispositivos móviles.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="projects">
            
            <h1 class="center">Portafolio</h1>
            <?php 
                $args = array(
                    'posts_per_page' => 20, 
                    'post_type' => 'portfolios',
                    'order' => 'DESC',
                    'orderby' => 'modified', 
                );
                $query = new WP_Query( $args );
                $count = 0 ;
                if ( $query->have_posts() ):
                    while ( $query->have_posts() ) : $query->the_post(); 
                        $count++;
                            if ($count === 1) {
                                echo '<div class="row">';
                            }
            ?>            
                <div class="col s12 m6 l3 item">
                    <a href="#home_project" class="item_project">
                        <img src="<?php echo the_post_thumbnail_url('full'); ?>">
                        <span>                          
                            <?php echo the_excerpt(); ?>                              
                        </span>                     
                    </a>
                </div>                
            <?php 
                        if ($count === 4) {
                            echo '</div>';
                            $count = 0;
                        }
                    endwhile;     
                endif; 
            ?>
        </section> 

        <section class="bible">
            <div class="parallax-container ">
                <div class="parallax-bible">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bible.jpg" alt="Biblia Reina Valera 1960">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col s12 center">
                            <div class="cite">
                                <p><b>Santiago 5:1</b> "Si a alguno de ustedes le falta sabiduría, pídasela a Dios, y él se la dará, pues Dios da a todos generosamente sin menospreciar a nadie."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="contact">
            <div class="row">
                <div class="col l6 m6 s12">
                    <div class="container">
                        <div class="row">
                            <div class="col s12 information">
                                <h1>Contacto</h1>   
                                <ul>
                                    <li>
                                        <a type="button" class="btn-floating btn-small btn-fb">
                                            <i class="material-icons">home</i>
                                        </a>
                                        Av. Chupa Chupa, Urb. Simón Bolivar, Manzana R Casa #8. Barinas-Venezuela
                                    </li>
                                    <li>
                                        <a type="button" class="btn-floating btn-small btn-fb">
                                            <i class="material-icons">email</i>
                                        </a>
                                        info@luiscordero29.com
                                    </li>
                                    <li>
                                        <a type="button" class="btn-floating btn-small btn-fb">
                                            <i class="material-icons">phone</i>
                                        </a>
                                        +58 412 525 39 51 / +58 414 373 54 83
                                    </li>
                                    <li>
                                        <a type="button" class="btn-floating btn-small btn-fb">
                                            <i class="material-icons">public</i>
                                        </a>
                                        <a href="http://luiscordero29.com">luiscordero29.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col l6 m6 s12 form-container">
                    <div class="container">
                        <div class="row">
                            <div class="col s12 information">
                                <?php 
                                    echo do_shortcode('[contact-form-7 id="21" title="Formulario de Contacto"]'); 
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php 
    get_footer(); 
?>