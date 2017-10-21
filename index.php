<?php 
    get_header(); 
?>
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col s8">
                    <div class="posts">
                        <?php
                            while ( have_posts() ) : the_post(); 
                        ?>
                            <article class="blog-article z-depth-2">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php echo the_post_thumbnail_url('thumbnail'); ?>" alt="" class="circle responsive-img">
                                    </a>
                                <?php endif; ?>
                                <header>
                                    <a href="<?php the_permalink(); ?>">
                                        <h1><?php the_title(); ?></h1>
                                    </a>
                                </header>
                                <p class="flow-text">
                                    <?php the_excerpt(); ?>                 
                                </p>
                                <footer>
                                    <?php comments_number( '<i class="fa fa-comment-o fa-fw" aria-hidden="true"></i> Sin comentarios', '<i class="fa fa-comment fa-fw" aria-hidden="true"></i> Un comentario', '<i class="fa fa-comments fa-fw" aria-hidden="true"></i> % comentarios' ); ?>
                                    <i class="fa fa-folder fa-fw" aria-hidden="true"></i> <?php the_category( ', ' ); ?> 
                                    <?php the_tags( '<i class="fa fa-tag fa-fw" aria-hidden="true"></i> ', ', ' ); ?> 
                                </footer>
                            </article>
                        <?php
                            endwhile;
                        ?> 
                    </div>
                </div>
                <div class="col s4">
                    <aside id="aside">
                        <?php 
                            if ( is_active_sidebar( 'sidebar' ) ) :
                                dynamic_sidebar( 'sidebar' ); 
                            endif; 
                        ?>
                    </aside>
                </div>
                <?php /* ?>
                <div class="col s2">
                    <aside id="advertising">
                        <?php 
                            if ( is_active_sidebar( 'advertising' ) ) :
                                dynamic_sidebar( 'advertising' ); 
                            endif; 
                        ?>
                    </aside>
                </div>
                php */ ?>
            </div>
        </div>
    </section>
<?php
    get_footer(); 
?>