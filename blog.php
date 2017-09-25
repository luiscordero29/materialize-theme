<?php 
    get_header(); 
?>
<div class="container">
    <div class="row">
        <div class="col s12 m12 l8">
            <main role="main">
                <?php 
                    if ( have_posts() ) : 
                        while ( have_posts() ) : the_post(); 
                ?>
                    <article>
                        <?php if ( has_post_thumbnail() ) { ?>
                            <img src="<?php echo the_post_thumbnail_url('full'); ?>" class="responsive-img" alt="<?php the_title(); ?>"/>
                        <?php } ?>
                        <h1>
                            <a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>"><?php the_title(); ?></a>
                        </h1>
                            <p>
                                <?php 
                                    $lc29_post_resumen = get_post_meta( get_the_ID(), 'lc29_post_resumen', true ); 
                                    echo $lc29_post_resumen;
                                ?>
                            </p>
                            <footer>
                                <a href="<?php the_permalink(); ?>">
                                    <span><span><?php comments_number( '0', '1', '%' ); ?></span> <i class="material-icons">comment</i></span>
                                </a>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_date(); ?>
                                </a>
                            </footer>
                    </article>
                <?php 
                        endwhile; 
                    endif;
                ?>
            </main>
            <?php
                /*
                global $wp_query;

                if ( $wp_query->max_num_pages >= 1 ) {
                                    
                    $big = 999999999; // need an unlikely integer

                    $pages = paginate_links( 
                        array(
                            'base'          => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format'        => '?paged=%#%',
                            'current'       => max( 1, get_query_var('paged') ),
                            'total'         => $wp_query->max_num_pages,
                            'type'          => 'array',
                            'prev_text'     => '&laquo;',
                            'next_text'     => '&raquo;',
                            'end_size'      => 3,
                            'mid_size'      => 3
                        ) );
                                        
                    if( is_array( $pages ) ){
                        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
                        echo '<div id="pagination">';
                        foreach ( $pages as $page ) 
                        {
                            echo "$page";
                        }
                        echo '</div>';
                    }

                }*/
                ?>
        </div>
        <div class="col s12 m12 l4">
            <?php get_sidebar(); ?>
        </div>   
    </div>
</div>
<?php 
    get_footer(); 
?>