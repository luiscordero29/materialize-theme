<?php 
    get_header(); 
?>
    <section id="post">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="post">
                        <?php
                            while ( have_posts() ) : the_post(); 
                        ?>
                            <article class="article">
                                <header>
                                    <h1><?php the_title(); ?></h1>
                                </header>
                                <footer>
                                    <?php comments_number( '<i class="fa fa-comment-o fa-fw" aria-hidden="true"></i> Sin comentarios', '<i class="fa fa-comment fa-fw" aria-hidden="true"></i> Un comentario', '<i class="fa fa-comments fa-fw" aria-hidden="true"></i> % comentarios' ); ?>
                                    <i class="fa fa-folder fa-fw" aria-hidden="true"></i> <?php the_category( ', ' ); ?> 
                                    <?php the_tags( '<i class="fa fa-tag fa-fw" aria-hidden="true"></i> ', ', ' ); ?> 
                                </footer>
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <img src="<?php echo the_post_thumbnail_url('full'); ?>" alt="" class="circle responsive-img">
                                <?php endif; ?>
                                <?php the_content(); ?>                 
                            </article>
                        <?php
                            endwhile;
                        ?> 
                    </div>
                    <div class="comments">
                        <?php 
                            comments_template();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    get_footer(); 
?>