<?php
/* 
Template Name: archive-recipes
*/
get_header(); ?>


<main class="archive-recipes-page">
    <section class="banner-top">
        <div class="img-container">
            <img class="banner-image" src="<?php bloginfo('template_url'); ?>/assets/images/resto1.jpg">
            <img class="banner-hash" src="<?php bloginfo('template_url'); ?>/assets/images/hachures-grises.png">
        </div>
        <p class="subtitles">The Chef's selection</p>            
        <h1 class="title">Recipes Blog</h1>
        <a class="bt-link" href="/?page_id=147">check our menu</a>
    </section>
    
    <section class="recipes-list">
        <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $args = array(
            'post_type'=>array('recettes'), 
            'posts_per_page'=>5, 
            'meta_key'=> 'date',
            'orderby' => 'meta_value',
            'order'   => 'DESC',
            'paged' => $paged,
        );

        query_posts($args);

        $count=0;
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post();
                ?>
                <div class="info-container-mobile <?php if ($count%2==1):?>info-container1<?php else:?>info-container2 <?php endif;?>">
                    <div class="post-picture">
                        <img class="post-image" src="<?php the_field('main_image'); ?>">
                    </div>

                    <div class="post-text">
                        <p class="date"><?php the_field('date'); ?></p>
                        <p class="category"><?php the_field('category'); ?></p>
                        <h3 class="title3"><?php the_field('title'); ?></h3>
                        <p class="shordesc"><?php the_field('short_description'); ?></p>
                        <a href="<?php the_permalink(); ?>">Read More</a>
                    </div>

                </div>
                <?php
                $count++;
            endwhile;
        else:
            ?>
        <p>Cette section est vide</p>
        <?php
        endif;
        
        ?>
        <div class="pagination">
        <?php previous_posts_link(__('&larr; newer', 'kasparabi')); ?>

            <?php 
                echo paginate_links( array(
                    'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                    'total'        => $query->max_num_pages,
                    'current'      => max( 1, get_query_var( 'paged' ) ),
                    'format'       => '?paged=%#%',
                    'show_all'     => false,
                    'type'         => 'plain',
                    'end_size'     => 2,
                    'mid_size'     => 1,
                    'prev_next'    => true,
                    'prev_text'    => sprintf( '<i></i> %1$s', __( 'Newer Posts', 'text-domain' ) ),
                    'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Posts', 'text-domain' ) ),
                    'add_args'     => false,
                    'add_fragment' => '',
                ) );
            ?>
        </div>
        


    </section>
</main>


<?php
get_footer();
?>