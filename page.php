<?php 
    get_header(); 
        while ( have_posts() ) : the_post(); 
            ?>
            <article>
                <header>
                    <h1><?php the_title(); ?></h1>
                </header>
                <?php the_content(); ?>                 
            </article>
            <?php
        endwhile; 
    get_footer(); 
?>